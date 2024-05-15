<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see Source or technology provider responsible for the set of included IDs. Expressed as a top-level domain.
 */
class ExtendedIds extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $source Source or technology provider responsible for the set of included IDs. Expressed as a top-level domain.
     * @param list<ExtendedUid>|null $uids Array of extended ID UID objects from the given source. Refer to Object: Extended Identifier UIDs.
     */
    public function __construct(
        public array|null $uids = null,
        public string|null $source = null,
        public mixed $ext = null,
    ) {
    }
}
