<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum DOOHMultiplierMeasurementSourceTypeEnum: int
{
    case UNKNOWN = 0;

    case MEASUREMENT_VENDOR_PROVIDED = 1;

    case PUBLISHER_PROVIDED = 2;

    case EXCHANGE_PROVIDED = 3;
}
