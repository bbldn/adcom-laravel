<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--native-
 */
class Native extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param LinkAsset|null $link Default destination link for the native ad overall; used if an asset is activated (e.g., clicked) that doesn't specify it's own destination link. Refer to Object: LinkAsset.
     * @param list<Asset>|null $asset Array of assets that comprise the native ad. Refer to Object: Asset.
     */
    public function __construct(
        public array|null $asset = null,
        public LinkAsset|null $link = null,
        public mixed $ext = null,
    ) {
    }
}
