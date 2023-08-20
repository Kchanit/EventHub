<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\Rule;

class ValidStudentId implements Rule
{
    public function passes($attribute, $value)
    {
        return User::where('student_id', $value)->exists();
    }

    public function message()
    {
        return 'This student ID is not valid.';
    }
}
