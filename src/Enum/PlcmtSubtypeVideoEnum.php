<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum PlcmtSubtypeVideoEnum: int
{
    case INSTREAM = 1;

    case ACCOMPANYING_CONTENT = 2;

    case INTERSTITIAL = 3;

    case NO_CONTENT_STANDALONE = 4;
}
