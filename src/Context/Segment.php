<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--segment-
 */
class Segment extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $id ID of the data segment specific to the data provider.
     * @param string|null $name Displayable name of the data segment specific to the data provider.
     * @param string|null $value String representation of the data segment value.
     */
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public string|null $value = null,
        public mixed $ext = null,
    ) {
    }
}
