<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\NativeDataAssetTypeEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--dataasset-
 */
class DataAsset extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $len The length of the value contents. This length should conform to recommendations provided in List: Native Data Asset Types
     * @param string $value A formatted string of data to be displayed (e.g., "5 stars", "3.4 stars out of 5", "$10", etc.).
     * @param NativeDataAssetTypeEnum|null $type The type of data represented by this asset. Refer to List: Native Data Asset Types.
     */
    public function __construct(
        public string $value,
        public int|null $len = null,
        public NativeDataAssetTypeEnum|null $type = null,
        public mixed $ext = null,
    ) {
    }
}
