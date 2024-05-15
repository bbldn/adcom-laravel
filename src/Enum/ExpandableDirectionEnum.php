<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum ExpandableDirectionEnum: int
{
    case LEFT = 1;

    case RIGHT = 2;

    case UP = 3;

    case DOWN = 4;

    case FULL_SCREEN = 5;

    case RESIZE_MINIMIZE = 6;
}
