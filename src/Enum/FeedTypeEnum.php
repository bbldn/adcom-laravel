<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum FeedTypeEnum: int
{
    case AOD_MUSIC = 1;

    case LIVE_FM_AM = 2;

    case AOD_PODCAST = 3;

    case AOD_CATCH_UP = 4;

    case LIVE_WEB_RADIO = 5;

    case MISC_VIDEO_GAME = 6;

    case MISC_TEXT_TO_SPEECH = 7;
}
