<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\CategoryTaxonomyEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--producer-
 */
class Producer extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $id Vendor-specific unique producer identifier. Useful if content is syndicated and may be posted on a site using embed tags.
     * @param string|null $name Displayable name of the producer.
     * @param string|null $domain Highest level domain of the producer (e.g., "producer.com").
     * @param list<string>|null $cat Array of content categories that describe the producer using IDs from the taxonomy indicated in cattax.
     * @param CategoryTaxonomyEnum|null $cattax The taxonomy in use for the cat attribute. Refer to List: Category Taxonomies.
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
