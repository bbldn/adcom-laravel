<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--titleasset-
 */
class TitleAsset extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $text The text content of the text element.
     * @param int|null $len The length of the contents of the text attribute.
     */
    public function __construct(
        public string $text,
        public int|null $len = null,
        public mixed $ext = null,
    ) {
    }
}
