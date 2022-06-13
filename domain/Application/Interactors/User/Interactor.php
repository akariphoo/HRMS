<?php

namespace Domain\Application\Interactors\User;

use Domain\Inputs\User\ListInput;
use Domain\Outputs\User\ListOutput;
use Domain\Outputs\User\CreateEditOutput;
use Domain\Outputs\User\StoreOutput;
use Domain\Application\Usecases\User\Usecase;
use Domain\Services\User\Service;

/**
 * Interactor: User
 */
class Interactor implements Usecase
{
    private $userService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Service $userService)
    {
        $this->userService = $userService;
    }

    /**
     * main process
     *
     * @param ListInput
     * @return UserOutput
     */
    public function listHandler(ListInput $input): ListOutput
    {
        $input->validate();

        $userData = $this->userService->getAllUser();

        $output = new ListOutput($userData);

        return $output;
    }
    /**
     * user create form
     */
    public function createHandler(): CreateEditOutput
    {
        $form_data = [
            'route' => route('users.store'),
            'method' => 'post',
            'title' => 'Create User',
            'button' => 'Save'
        ];
        $output = new CreateEditOutput($form_data);

        return $output;
    }

    /**
     * store new user 
     * update existing user
     * @param Request $request 
     * @param User $user 
     */
    public function storeHandler($request, $user)
    {
        $this->userService->storeUser($request,$user);

        return jsonResponse('success', 'Successfully Saved.', route('users.list'));
        exit();
    }
    /**
     * edit user
     * @param User $user
     */
    public function editHandler($user): CreateEditOutput
    {
        $formData = [
            'route' => route('users.store', $user->id),
            'method' => 'post',
            'title' => 'Edit User',
            'button' => 'Update'
        ];
        $output = new CreateEditOutput($formData, $user);

        return $output;
    }
    
    /**
     * delede user
     * @param User $user
     */
    public function DeleteHandler($user)
    {
        $this->userService->deleteUser($user);

        return jsonResponse('success', 'Successfully Deleted.', route('users.list'));
        exit();
    }

}