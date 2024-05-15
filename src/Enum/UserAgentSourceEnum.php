<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum UserAgentSourceEnum: int
{
    case UNKNOWN = 0;

    case ONLY_LOW_ENTROPY_HEADERS = 1;

    case WITH_HIGH_ENTROPY_HEADERS = 2;

    case PARSED = 4;
}
