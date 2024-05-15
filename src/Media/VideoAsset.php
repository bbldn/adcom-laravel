<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--videoasset-
 */
class VideoAsset extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $adm Video markup (e.g., VAST document) for the asset. * Exactly one of adm and curl is required. Including both is not recommended.
     * @param string $curl A URL that returns the video markup (e.g., VAST document) for the asset. If this ad is matched to a placement specification, the Placement.curlx attribute indicates if this markup retrieval option is supported. * Exactly one of adm and curl is required. Including both is not recommended.
     */
    public function __construct(
        public string $adm,
        public string $curl,
        public mixed $ext = null,
    ) {
    }
}
