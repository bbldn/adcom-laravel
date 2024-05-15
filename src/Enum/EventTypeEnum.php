<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum EventTypeEnum: int
{
    case LOADED = 1;

    case IMPRESSION = 2;

    case VIEWABLE_MRC50 = 3;

    case VIEWABLE_MRC100 = 4;

    case VIEWABLE_VIDEO50 = 5;
}
