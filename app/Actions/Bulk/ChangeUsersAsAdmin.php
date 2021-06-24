<?php

namespace App\Actions\Bulk;

use App\Models\User;
use LaravelViews\Actions\Action;
use LaravelViews\Actions\Confirmable;
use LaravelViews\Views\View;

class ChangeUsersAsAdmin extends Action
{
    use Confirmable;

    /**
     * Any title you want to be displayed
     * @var String
     * */
    public $title = "Change as admin";

    /**
     * This should be a valid Feather icon string
     * @var String
     */
    public $icon = "shield";

    /**
     * Execute the action when the user clicked on the button
     *
     * @param Array $selectedModels Array with all the id of the selected models
     * @param $view Current view where the action was executed from
     */
    public function handle($selectedModels, View $view)
    {
        User::whereKey($selectedModels)->update([
            'type' => 'admin'
        ]);
        $this->success();
    }
}
