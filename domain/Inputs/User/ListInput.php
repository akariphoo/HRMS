<?php

namespace Domain\Inputs\User;

use Domain\Inputs\BaseInput;
use Domain\Exceptions\DbmsException;
use Domain\Commons\ErrorCode;


/**
 * Input: User
 */
class ListInput implements BaseInput
{
    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct($user)
    {
       $this->user = $user;
    }
    
    public function validate()
    {
        if (!is_null($this->user)) {
            throw new DbmsException(ErrorCode::DBMS_ERROR_000_0002, 'invalid parameter : test');
        }
    }
    
}