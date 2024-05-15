<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum ContentContextEnum: int
{
    case VIDEO = 1;

    case GAME = 2;

    case MUSIC = 3;

    case APPLICATION = 4;

    case TEXT = 5;

    case OTHER = 6;

    case UNKNOWN = 7;
}
