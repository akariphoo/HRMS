<?php

namespace Domain\Services\User;

use App\Models\User;
use Domain\Entities\User\ListEntity;

class Service {
    /**
     * Get all user
     * 
     * @return array $users
     */
    public function getAllUser() : ?array
    {
        return User::all()->map(function ($item) {
            return ListEntity::createInstance($item);
        })->toArray();
    }

    /**
     * Store user
     * 
     * @return array $users
     */
    public function storeUser($request,$user)
    {
        $data = $request->all();
        if($user) {
            if ( is_null($request->password) ) {
                $data = $request->except('password');
            }
            return  $user->update($data);
        }

        return User::create($data);
    }

    /**
     * delete user
     */
    public function DeleteUser($user)
    {
        if($user) {
            $user->delete();
        }
    }
}