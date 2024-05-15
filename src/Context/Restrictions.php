<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\CategoryTaxonomyEnum;
use BBLDN\AdCOMLaravel\Enum\CreativeAttributeEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--restrictions-
 */
class Restrictions extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param list<string>|null $badv Block list of advertisers by their domains (e.g., "ford.com").
     * @param list<string>|null $bapp Block list of apps for which ads are disallowed. These should be bundle or package names (e.g., "com.foo.mygame") and should NOT be app store IDs (e.g., not iTunes store IDs).
     * @param list<string>|null $bcat Block list of content categories using IDs from the taxonomy indicated in cattax.
     * @param CategoryTaxonomyEnum|null $cattax The taxonomy in use for the bcat attribute. Refer to List: Category Taxonomies.
     * @param list<CreativeAttributeEnum>|null $battr Block list of creative attributes. Refer to List: Creative Attributes.
     */
    public function __construct(
        public array|null $badv = null,
        public array|null $bapp = null,
        public array|null $bcat = null,
        public array|null $battr = null,
        public CategoryTaxonomyEnum|null $cattax = CategoryTaxonomyEnum::CONTENT_2_0,
        public mixed $ext = null,
    ) {
    }
}
