<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum VolumeNormalizationModeEnum: int
{
    case NONE = 0;

    case AD_VOLUME_AVERAGE_NORMALIZED_TO_CONTENT = 1;

    case AD_VOLUME_PEAK_NORMALIZED_TO_CONTENT = 2;

    case AD_LOUDNESS_NORMALIZED_TO_CONTENT = 3;

    case CUSTOM_VOLUME_NORMALIZATION = 4;
}
