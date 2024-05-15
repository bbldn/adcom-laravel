<?php

namespace BBLDN\AdCOMLaravel\Context;

use BBLDN\AdCOMLaravel\Enum\CategoryTaxonomyEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--site-
 */
class Site extends DistributionChannel
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $id Vendor-specific unique identifier of the distribution channel.
     * @param int|null $amp Indicates if the page is built with AMP HTML, where 0 = no, 1 = yes.
     * @param int|null $mobile Indicates if the site has been programmed to optimize layout when viewed on mobile devices, where 0 = no, 1 = yes.
     * @param string|null $ref Referrer URL that caused navigation to the current page.
     * @param string|null $name Displayable name of the distribution channel.
     * @param string|null $page URL of the page within the site.
     * @param Publisher|null $pub Details about the publisher of the distribution channel. Refer to Object: Publisher.
     * @param string|null $domain Domain of the site (e.g., "mysite.foo.com").
     * @param string|null $search Search string that caused navigation to the current page.
     * @param int|null $privpolicy Indicates if the site has a privacy policy, where 0 = no, 1 = yes.
     * @param Content|null $content Details about the content within the distribution channel. Refer to Object: Content.
     * @param string|null $keywords Comma-separated list of keywords about the site. Only one of 'keywords' or 'kwarray' may be present. NOTE: this field is deprecated, use 'kwarray' instead.
     * @param list<string>|null $cat Array of content categories describing the site using IDs from the taxonomy indicated in cattax.
     * @param list<string>|null $kwarray Array of keywords about the site. Only one of 'keywords' or 'kwarray' may be present.
     * @param list<string>|null $pagecat Array of content categories describing the current page or view of the site using IDs from the taxonomy indicated in cattax.
     * @param list<string>|null $sectcat Array of content categories describing the current section of the site using IDs from the taxonomy indicated in cattax.
     * @param CategoryTaxonomyEnum|null $cattax The taxonomy in use for the cat, sectcat and pagecat attributes. Refer to List: Category Taxonomies.
     */
    public function __construct(
        public string $id,
        public int|null $amp = null,
        public array|null $cat = null,
        public int|null $mobile = null,
        public string|null $ref = null,
        public string|null $name = null,
        public string|null $page = null,
        public Publisher|null $pub = null,
        public array|null $kwarray = null,
        public array|null $pagecat = null,
        public array|null $sectcat = null,
        public string|null $domain = null,
        public string|null $search = null,
        public int|null $privpolicy = null,
        public Content|null $content = null,
        public string|null $keywords = null,
        public CategoryTaxonomyEnum|null $cattax = null,
        public mixed $ext = null,
    ) {
        parent::__construct(
            id: $id,
            pub: $pub,
            name: $name,
            content: $content,
        );
    }
}
