<?php

namespace App\Models\Enums;

enum EventStatus: string
{
    case NONE = 'NONE';
    case DRAFTED = 'DRAFTED';
    case PENDING = 'PENDING';
    case PUBLISHED = 'PUBLISHED';
    case CANCELLED = 'CANCELLED';
}
