<?php

namespace App\Controllers;

use Framework\Alias\Template;
use App\Models\User;
use App\Models\Page;
use App\Models\Program;
use Framework\Router\Request;
use App\Managers\OwnedProgramsManager;
use App\Managers\PrepareChaptersAndLessonsManager;
use App\Managers\ResetPasswordManager;
use Framework\Sessions\UsernameSession;
use Framework\Alias\Router;

class MembershipController
{
    public function index()
    {
        $manager = new OwnedProgramsManager();
        Template::setAssign([
            "programs" => $manager->run()
        ])->setDisplay("home/index.tpl");
    }

    public function page(Program $program, $slug)
    {
        // Get the specific page to display
        $page = new Page();
        $page = $page->where("program_tag", "=", $program->program_tag)
                     ->where("page_slug", "=", $slug)
                     ->selectOne();

        // Get all the chapters
        $managerChapters = new PrepareChaptersAndLessonsManager();
        $chapters = $managerChapters->run($program);

        // Get all the programs that the user didn't buy
        $managerPrograms = new OwnedProgramsManager();
        $programs = $managerPrograms->run();

        // Select just the programs that are not owned
        $programs = array_filter($programs, function($program) {
            return $program->owned == false;
        });

        // Reset program indexes
        $programs = array_values($programs);

        // Get the auth
        $auth = new UsernameSession();
        $auth = $auth->getContent();

        $user = new User();
        $user = $user->where("username", "=", $auth)->selectOne();

        Template::setAssign([
                "auth"     => $user,
                "chapters" => $chapters,
                "program"  => $program,
                "programs" => $programs
        ])->setDisplay($page->page_url);
    }

    // Download files from the system, like ebooks, cheatsheets, etc
    public function ebook($program, $extension, $file)
    {
        Router::goToUrl("ebooks/" . $program . "/" . $file . "." . $extension);
    }

    // Get the account information in the membership
    public function getAccount()
    {
        $auth = new UsernameSession();
        $auth = $auth->getContent();

        $user = new User();
        $user = $user->where("username", "=", $auth)->selectOne();

        $managerPrograms = new OwnedProgramsManager();
        $programs = $managerPrograms->run();
        // dd($programs);
        Template::setAssign([
                "user"     => $user,
                "programs" => $programs,
                "error"    => false,
        ])->setDisplay("home/account.tpl");
    }

    public function postAccount(Request $request)
    {
        $auth = new UsernameSession();
        $auth = $auth->getContent();

        $user = new User();
        $auth_user = $user->where("username", "=", $auth)->selectOne();

        if($request->out("email"))
        {
            $user->where("username", "=", $auth)->update([
                "email" => $request->out("email")
            ]);
        }

        if(!empty($request->out("password1")) && $request->out("password1") !== "")
        {
            $manager = new ResetPasswordManager();
            $manager->run([
                "user"     => $auth_user,
                "password" => $request->out("password1")
            ]);
        }

        $managerPrograms = new OwnedProgramsManager();
        $programs = $managerPrograms->run();

        Template::setAssign([
                "user"         => $user,
                "programs"     => $programs,
                "error"        => true,
                "type"         => "success",
                "errorTitle"   => "Succes!",
                "errorMessage" => "Modificarile tale au fost salvate"
        ])->setDisplay("home/account.tpl");
    }
}
