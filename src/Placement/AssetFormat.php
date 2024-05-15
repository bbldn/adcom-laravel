<?php

namespace BBLDN\AdCOMLaravel\Placement;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--assetformat-
 */
class AssetFormat extends LaravelData
{
    /**
     * @param int $id Asset ID, unique within the scope of this placement specification.
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $req Indicator of whether or not this asset is required, where 0 = no, 1 = yes.
     * @param DataAssetFormat|null $data Asset Format Subtype Object that indicates this is specifying a data asset and provides additional detail as such. Refer to Object: DataAssetFormat. * Required if no other asset format subtype object is specified.
     * @param ImageAssetFormat|null $img Asset Format Subtype Object that indicates this is specifying an image asset and provides additional detail as such. Refer to Object: ImageAssetFormat. * Required if no other asset format subtype object is specified.
     * @param VideoPlacement|null $video Asset Format Subtype Object, which leverages the VideoPlacement object, that indicates this is specifying a video asset and provides additional detail as such. Refer to Object: VideoPlacement. * Required if no other asset format subtype object is specified.
     * @param TitleAssetFormat|null $title Asset Format Subtype Object that indicates this is specifying a title asset and provides additional detail as such. Refer to Object: TitleAssetFormat. * Required if no other asset format subtype object is specified.
     */
    public function __construct(
        public int $id,
        public int|null $req = 0,
        public DataAssetFormat|null $data = null,
        public ImageAssetFormat|null $img = null,
        public VideoPlacement|null $video = null,
        public TitleAssetFormat|null $title = null,
        public mixed $ext = null,
    ) {
    }
}
