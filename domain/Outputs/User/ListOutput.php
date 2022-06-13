<?php

namespace Domain\Outputs\User;

use Domain\Outputs\BaseOutput;

/**
 * Output: User
 */
class ListOutput implements BaseOutput
{
    private $userData;

    /**
     * User list page.
     *
     * @return void
     */
    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    public function presentation()
    {
        $users = $this->userData;

        return view('pages.users.index', compact('users'));
    }
}