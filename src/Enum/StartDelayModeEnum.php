<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum StartDelayModeEnum: int
{
    case MID_ROLL = 1;

    case PRE_ROLL = 0;

    case GENERIC_MID_ROLL = -1;

    case GENERIC_POST_ROLL = -2;
}
