<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum AuditStatusCodeEnum: int
{
    case PENDING_AUDIT = 1;

    case PRE_APPROVED = 2;

    case APPROVED = 3;

    case DENIED = 4;

    case CHANGED = 5;

    case EXPIRED = 6;
}
