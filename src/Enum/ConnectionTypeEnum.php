<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum ConnectionTypeEnum: int
{
    case ETHERNET = 1;

    case WIFI = 2;

    case CELLULAR_NETWORK = 3;

    case CELLULAR_NETWORK_2G = 4;

    case CELLULAR_NETWORK_3G = 5;

    case CELLULAR_NETWORK_4G = 6;

    case CELLULAR_NETWORK_5G = 7;
}
