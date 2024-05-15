<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#abstract-class--distributionchannel-
 */
abstract class DistributionChannel extends LaravelData
{
    /**
     * @param string $id Vendor-specific unique identifier of the distribution channel.
     * @param string|null $name Displayable name of the distribution channel.
     * @param Publisher|null $pub Details about the publisher of the distribution channel. Refer to Object: Publisher.
     * @param Content|null $content Details about the content within the distribution channel. Refer to Object: Content.
     */
    public function __construct(
        public string $id,
        public string|null $name = null,
        public Publisher|null $pub = null,
        public Content|null $content = null,
    ) {
    }
}
