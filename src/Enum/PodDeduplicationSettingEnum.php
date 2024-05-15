<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum PodDeduplicationSettingEnum: int
{
    case ON_ADOMAIN = 1;

    case ON_IAB_CATEGORY = 2;

    case ON_CREATIVE_ID = 3;

    case ON_MEDIA_FILE_URL = 4;
}
