<?php

namespace BBLDN\AdCOMLaravel\Context;

use BBLDN\AdCOMLaravel\Enum\CategoryTaxonomyEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--app-
 */
class App extends DistributionChannel
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $id Vendor-specific unique identifier of the distribution channel.
     * @param int|null $paid Indicator of whether or not this is a paid app, where 0 = free, 1 = paid.
     * @param string|null $ver Application version.
     * @param string|null $name Displayable name of the distribution channel.
     * @param Publisher|null $pub Details about the publisher of the distribution channel. Refer to Object: Publisher.
     * @param string|null $bundle Bundle or package name of the app (e.g., "com.foo.mygame") and should NOT be app store IDs (e.g., not iTunes store IDs).
     * @param string|null $domain Domain of the app (e.g., "mygame.foo.com").
     * @param int|null $privpolicy Indicates if the app has a privacy policy, where 0 = no, 1 = yes.
     * @param string|null $storeid The ID of the app in an app store (e.g., Apple iTunes, Google Play).
     * @param Content|null $content Details about the content within the distribution channel. Refer to Object: Content.
     * @param string|null $keywords Comma-separated list of keywords about the app. Only one of 'keywords' or 'kwarray' may be present. NOTE: this field is deprecated, use 'kwarray' instead.
     * @param string|null $storeurl App store URL for an installed app; for IQG 2.1 compliance.
     * @param list<string>|null $cat Array of content categories describing the app using IDs from the taxonomy indicated in cattax.
     * @param list<string>|null $kwarray Array of keywords about the app. Only one of 'keywords' or 'kwarray' may be present.
     * @param list<string>|null $pagecat Array of content categories describing the current page or view of the app using IDs from the taxonomy indicated in cattax.
     * @param list<string>|null $sectcat Array of content categories describing the current section of the app using IDs from the taxonomy indicated in cattax.
     * @param CategoryTaxonomyEnum|null $cattax The taxonomy in use for the cat, sectcat and pagecat attributes. Refer to List: Category Taxonomies.
     */
    public function __construct(
        public string $id,
        public int|null $paid = 0,
        public array|null $cat = null,
        public string|null $ver = null,
        public string|null $name = null,
        public Publisher|null $pub = null,
        public array|null $kwarray = null,
        public array|null $pagecat = null,
        public array|null $sectcat = null,
        public string|null $bundle = null,
        public string|null $domain = null,
        public int|null $privpolicy = null,
        public string|null $storeid = null,
        public Content|null $content = null,
        public string|null $keywords = null,
        public string|null $storeurl = null,
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
