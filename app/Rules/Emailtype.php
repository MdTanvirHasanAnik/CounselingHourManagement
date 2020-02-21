<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Emailtype implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {   
        $find   = '@diu.edu.bd';
        $find2 = '@daffodilvarsity.edu.bd';
        
        if ( strpos($value, $find) !== false){
            return true;

        } 
        else if (strpos($value, $find2) !== false){
            return true;
        
        }
        else {
            return false;
        }

            

            
            

        
       
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Email is not recognized';
    }
}
