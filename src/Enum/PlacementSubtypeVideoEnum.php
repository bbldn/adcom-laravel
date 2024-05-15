<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum PlacementSubtypeVideoEnum: int
{
    case IN_STREAM = 1;

    case IN_BANNER = 2;

    case IN_ARTICLE = 3;

    case IN_FEED = 4;

    case INTERSTITIAL_SLIDER_FLOATING = 5;
}
