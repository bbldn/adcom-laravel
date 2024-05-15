<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum DeviceTypeEnum: int
{
    case MOBILE_TABLET_GENERAL = 1;

    case PERSONAL_COMPUTER = 2;

    case CONNECTED_TV = 3;

    case PHONE = 4;

    case TABLET = 5;

    case CONNECTED_DEVICE = 6;

    case SET_TOP_BOX = 7;

    case OOH_DEVICE = 8;
}
