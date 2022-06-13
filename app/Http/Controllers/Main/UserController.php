<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Domain\Application\Usecases\User\Usecase;
use Domain\Inputs\User\ListInput;

class UserController extends Controller
{
    /**
     * User list page.
     *
     * @return view() 
     */
    public function index(
        Request $request,
        Usecase $usecase
    )
    {
        $input = new ListInput($request->get('test'));
        $output = $usecase->listHandler($input);
        
        return $output->presentation();
    }

    /**
     * create user
     * @return view() 
     */
    public function create(
        Usecase $usecase
    )
    {
        $output = $usecase->createHandler();
        
        return $output->presentation();
    }

    /**
     * store and update user
    */
    public function store(
        Store $request,
        Usecase $usecase,
        User $user=null
    )
    {
        $output = $usecase->storeHandler($request, $user);
        
        return $output;
    }

    /**
     * edit user
     */
    public function edit(
        Usecase $usecase,
        User $user
    )
    {
        $output = $usecase->EditHandler($user);
        
        return $output->presentation();
    }
    
    /**
     * delete user
     */
    public function destroy(
        Usecase $usecase,
        User $user
    )
    {
        $output = $usecase->DeleteHandler($user);

        return $output;
    }

}
