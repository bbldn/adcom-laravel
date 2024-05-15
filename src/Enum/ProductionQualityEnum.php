<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum ProductionQualityEnum: int
{
    case UNKNOWN = 0;

    case PROFESSIONALLY_PRODUCED = 1;

    case PROSUMER = 2;

    case USER_GENERATED = 3;
}
