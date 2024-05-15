<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--linkasset-
 */
class LinkAsset extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $url Landing URL of the clickable link.
     * @param string|null $urlfb Fallback URL for deep-link to be used if the URL specified in url is not supported by the device.
     * @param list<string>|null $trkr List of third-party tracker URLs to be fired on click.
     */
    public function __construct(
        public string $url,
        public array|null $trkr = null,
        public string|null $urlfb = null,
        public mixed $ext = null,
    ) {
    }
}
