<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum DisplayPlacementTypeEnum: int
{
    case IN_THE_FEED_OF_CONTENT = 1;

    case IN_THE_ATOMIC_UNIT_OF_THE_CONTENT = 2;

    case OUTSIDE_THE_CORE_CONTENT = 3;

    case RECOMMENDATION_WIDGET = 4;
}
