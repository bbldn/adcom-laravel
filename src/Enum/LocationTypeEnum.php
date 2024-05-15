<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum LocationTypeEnum: int
{
    case GPS_LOCATION_SERVICES = 1;

    case IP_ADDRESS = 2;

    case USER_PROVIDED = 3;
}
