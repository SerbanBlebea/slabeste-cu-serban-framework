<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\User;
use App\Models\Account;

class NrOfProgramsBoughtManager implements ManagerInterface
{
	public function run($payload)
	{
		// Check if users are passed as payload
		if($payload == false)
		{
			// Get all users who bought programs
			$users = $this->getAllUsers();
		} else {
			// IF users are passed as payload then asssign then to $users
			$users = $payload;
		}

		// Add the number of programs bought to user MongoDeleteBatch
		if($users !== [])
		{
			foreach($users as $user)
			{
				$bought = $this->getNrOfProgramsBought($user);
				$user->programsBought = $bought;
			}
		}
		// Return the result
		return $users;
	}

	private function getAllUsers()
	{
		$user = new User();
		return $user->sortBy("regdate", "DESC")->limitBy(10)->selectAll();
	}

	private function getNrOfProgramsBought($user)
	{
		$account = new Account();
		$items = $account->where('username', '=', $user->username)->select();
		return count($items);
	}
}
