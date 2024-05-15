<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\NativeImageAssetTypeEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--imageasset-
 */
class ImageAsset extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $url A URL that returns the image for the asset.
     * @param int|null $h Height of the image asset in device independent pixels (DIPS).
     * @param int|null $w Width of the image asset in device independent pixels (DIPS).
     * @param NativeImageAssetTypeEnum|null $type The type of image represented by this asset. Refer to List: Native Image Asset Types.
     */
    public function __construct(
        public string $url,
        public int|null $h = null,
        public int|null $w = null,
        public NativeImageAssetTypeEnum|null $type = null,
        public mixed $ext = null,
    ) {
    }
}
