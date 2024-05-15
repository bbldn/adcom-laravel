<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum PlacementPositionEnum: int
{
    case UNKNOWN = 0;

    case ABOVE_THE_FOLD = 1;

    case LOCKED = 2;

    case BELOW_THE_FOLD = 3;

    case HEADER = 4;

    case FOOTER = 5;

    case SIDEBAR = 6;

    case FULLSCREEN = 7;
}
