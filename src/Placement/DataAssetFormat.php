<?php

namespace BBLDN\AdCOMLaravel\Placement;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\NativeDataAssetTypeEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--dataassetformat-
 */
class DataAssetFormat extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $len The maximum allowed length of the data value.
     * @param NativeDataAssetTypeEnum $type The type of data asset supported. Refer to List: Native Data Asset Types.
     */
    public function __construct(
        public NativeDataAssetTypeEnum $type,
        public int|null $len = null,
        public mixed $ext = null,
    ) {
    }
}
