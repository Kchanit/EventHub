<?php

namespace App\Models\Enums;

enum EventBudgetStatus: string
{
    case NONE = 'NONE';
    case PENDING = 'PENDING';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
    case CANCELLED = 'CANCELLED';
}
