<?php

namespace Domain\Outputs\User;

use App\Models\User;
use Domain\Outputs\BaseOutput;

/**
 * Output: User
 */
class CreateEditOutput implements BaseOutput
{
    private $userData;
    private $formData;

    /**
     * User create & edit page 
     *
     * @return void
     */
    public function __construct($formData, $userData=null)
    {
        $this->userData = $userData ?? new User;
        $this->formData = $formData;
    }

    public function presentation()
    {
        $user = $this->userData;
        $formData = $this->formData;

        $data = [
            'formData', 
            'user'  
        ];
        return view('pages.users.create', compact($data));
    }
}