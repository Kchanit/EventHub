<?php

namespace App\Models\Enums;

enum EventStatus: string
{
    case PENDING = 'NONE';
    case DRAFTED = 'DRAFTED';
    case PUBLISHED = 'PUBLISHED';
    case CANCELLED = 'CANCELLED';
}
