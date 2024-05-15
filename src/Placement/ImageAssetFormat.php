<?php

namespace BBLDN\AdCOMLaravel\Placement;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\NativeImageAssetTypeEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--imageassetformat-
 */
class ImageAssetFormat extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $h Absolute height of the image asset in device independent pixels (DIPS). Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $w Absolute width of the image asset in device independent pixels (DIPS). Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $hmin The minimum requested absolute height of the image in device independent pixels (DIPS). This option should be used for any scaling of images by the client.
     * @param int|null $wmin The minimum requested absolute width of the image in device independent pixels (DIPS). This option should be used for any scaling of images by the client.
     * @param int|null $hratio Relative height of the image asset when expressing size as a ratio. Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $wratio Relative width of the image asset when expressing size as a ratio. Note that mixing absolute and relative sizes is not recommended.
     * @param list<string>|null $mime Array of supported mime types (e.g., "image/jpeg", "image/gif"). If omitted, all types are assumed.
     * @param NativeImageAssetTypeEnum|null $type The type of image asset supported. Refer to List: Native Image Asset Types.
     */
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public int|null $hmin = null,
        public int|null $wmin = null,
        public array|null $mime = null,
        public int|null $hratio = null,
        public int|null $wratio = null,
        public NativeImageAssetTypeEnum|null $type = null,
        public mixed $ext = null,
    ) {
    }
}
