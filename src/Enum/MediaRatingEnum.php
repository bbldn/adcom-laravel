<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum MediaRatingEnum: int
{
    case ALL_AUDIENCES = 1;

    case EVERYONE_OVER_AGE_12 = 2;

    case MATURE_AUDIENCES = 3;
}
