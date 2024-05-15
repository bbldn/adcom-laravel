<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--asset-
 */
class Asset extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $id The value of AssetFormat.id if this ad references a specific native placement defined by a Placement object and its structure.
     * @param int|null $req Indicates if the asset is required to be displayed, where 0 = no, 1 = yes.
     * @param DataAsset|null $data Asset Subtype Object that indicates this is a data asset and provides additional detail as such. Refer to Object: DataAsset. * Required if no other asset subtype object is specified.
     * @param LinkAsset|null $link Asset Subtype Object that indicates this is a link asset and provides additional detail as such. Refer to Object: LinkAsset. * Required if no other asset subtype object is specified.
     * @param ImageAsset|null $image Asset Subtype Object that indicates this is an image asset and provides additional detail as such. Refer to Object: ImageAsset. * Required if no other asset subtype object is specified.
     * @param TitleAsset|null $title Asset Subtype Object that indicates this is a title asset and provides additional detail as such. Refer to Object: TitleAsset. * Required if no other asset subtype object is specified.
     * @param VideoAsset|null $video Asset Subtype Object that indicates this is a video asset and provides additional detail as such. Refer to Object: VideoAsset. * Required if no other asset subtype object is specified.
     */
    public function __construct(
        public int|null $req = 0,
        public int|null $id = null,
        public DataAsset|null $data = null,
        public LinkAsset|null $link = null,
        public ImageAsset|null $image = null,
        public TitleAsset|null $title = null,
        public VideoAsset|null $video = null,
        public mixed $ext = null,
    ) {
    }
}
