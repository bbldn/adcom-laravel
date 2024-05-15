<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\CategoryTaxonomyEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--publisher-
 */
class Publisher extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $id Vendor-specific unique publisher identifier, as used in ads.txt files.
     * @param string|null $name Displayable name of the publisher.
     * @param string|null $domain Highest level domain of the publisher (e.g., "publisher.com").
     * @param list<string>|null $cat Array of content categories that describe the publisher using IDs from the taxonomy indicated in cattax. Implementer should ensure compliance with regional legislation around data usage and sharing.
     * @param CategoryTaxonomyEnum|null $cattax The taxonomy in use for the cat attribute. Refer to CategoryTaxonomyEnum.
     */
    public function __construct(
        public array|null $cat = null,
        public string|null $id = null,
        public string|null $name = null,
        public string|null $domain = null,
        public CategoryTaxonomyEnum|null $cattax = null,
        public mixed $ext = null,
    ) {
    }
}
