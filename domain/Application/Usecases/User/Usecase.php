<?php

namespace Domain\Application\Usecases\User;

use Domain\Inputs\User\ListInput;
use Domain\Outputs\User\ListOutput;
use Domain\Outputs\User\StoreOutput;
use Domain\Outputs\User\CreateEditOutput;

/**
 * Usecase: User
 */
interface Usecase
{
    /**
     * user lists
     * @param ListInput $input
     */
    public function ListHandler(ListInput $input): ListOutput;

    /**
     * user create 
    */
    public function createHandler(): CreateEditOutput;

    /**
     * user store and update 
     * @param Request $request
    */
    public function storeHandler($request, $user);

    /**
     * user edit
     * @param User $user
    */
    public function editHandler($user): CreateEditOutput;

    /**
     * user delete
     * @param User $user
    */
    public function DeleteHandler($user);
    
}