<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--data-
 */
class Data extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $id Vendor-specific ID for the data provider.
     * @param string|null $name Vendor-specific displayable name for the data provider.
     * @param list<Segment>|null $segment Array of Segment objects that contain the actual data values. Refer to Object: Segment.
     */
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public array|null $segment = null,
        public mixed $ext = null,
    ) {
    }
}
