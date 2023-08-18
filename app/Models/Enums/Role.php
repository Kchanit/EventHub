<?php

namespace App\Models\Enums;

enum Role: string
{
    case ADMIN = 'ADMIN';
    case OFFICER = 'OFFICER';
    case USER = 'USER';
}
