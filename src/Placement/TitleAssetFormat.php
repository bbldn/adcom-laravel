<?php

namespace BBLDN\AdCOMLaravel\Placement;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--titleassetformat-
 */
class TitleAssetFormat extends LaravelData
{
    /**
     * @param int $len The maximum allowed length of the title value. Recommended lengths are 25, 90, or 140.
     * @param mixed $ext Optional vendor-specific extensions.
     */
    public function __construct(
        public int $len,
        public mixed $ext = null,
    ) {
    }
}
