<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum PlaybackCessationModeEnum: int
{
    case ON_VIDEO_COMPLETION_OR_WHEN_TERMINATED_BY_USER = 1;

    case ON_LEAVING_VIEWPORT_OR_WHEN_TERMINATED_BY_USER = 2;

    case ON_LEAVING_VIEWPORT_CONTINUES_AS_A_FLOATING_SLIDER_UNIT_UNTIL_VIDEO_COMPLETION_OR_WHEN_TERMINATED_BY_USER = 3;
}
