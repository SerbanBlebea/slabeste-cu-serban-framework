
{extends file='layouts/admin/admin_layout.tpl'}

{block name="body"}
    <div class="container-fluid">
        {if $error == true}
            <div class="alert alert-{$errorType}" role="alert">
                {$errorMessage}
            </div>
        {/if}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All products</h4>
                <h6 class="card-subtitle mb-2 text-muted">Set up, edit and delete products</h6>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Clients</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $programs as $index => $program}
                            <tr>
                                <th scope="row">{$index + 1}</th>
                                <td>{$program->program_name}</td>
                                <td>{$program->sold}</td>
                                <td><a href="{$app_path}/admin/program/{$program->id}">Edit</a></td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/block}

{block name="footer"}

{/block}
