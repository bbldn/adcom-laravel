<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum ClickTypeEnum: int
{
    case NON_CLICKABLE = 0;

    case CLICKABLE_UNKNOWN = 1;

    case CLICKABLE_EMBEDDED = 2;

    case CLICKABLE_BROWSER = 3;
}
