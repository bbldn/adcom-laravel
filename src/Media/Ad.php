<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\MediaRatingEnum;
use BBLDN\AdCOMLaravel\Enum\CategoryTaxonomyEnum;
use BBLDN\AdCOMLaravel\Enum\CreativeAttributeEnum;

/**
 * @https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--ad-
 */
class Ad extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $id ID of the creative; unique at least throughout the scope of a vendor (e.g., an exchange or buying platform). Note that multiple instances of the same ad when used in transactions must have the same ID.
     * @param int|null $init Timestamp of the original instantiation of this ad (i.e., this object or any of its children) in Unix format (i.e., milliseconds since the epoch).
     * @param int|null $secure Flag to indicate if the creative is secure (i.e., uses HTTPS for all assets and markup), where 0 = no, 1 = yes. There is no default and thus if omitted, the secure state is unknown. However, as a practical matter, the safe assumption is to treat unknown as non-secure.
     * @param Audio|null $audio Media Subtype Object that indicates this is an audio ad and provides additional detail as such. Refer to Object: Audio. * Required if no other media subtype object is specified.
     * @param Audit|null $audit An object depicting the audit status of the ad; typically part of a quality/safety review process. Refer to Object: Audit.
     * @param Video|null $video Media Subtype Object that indicates this is a video ad and provides additional detail as such. Refer to Object: Video. * Required if no other media subtype object is specified.
     * @param int|null $lastmod Timestamp of most recent modification to this ad (i.e., this object or any of its children other than the Audit object) in Unix format (i.e., milliseconds since the epoch).
     * @param string|null $iurl URL without cache-busting to an image that is representative of the ad content for cursory level ad quality checking.
     * @param string|null $lang Language of the creative using ISO-639-1-alpha-2. In practice, vendors using this object may elect an alternate standard (e.g., BCP-47) in which case this must be communicated beforehand. The non-standard code "xx" may also be used if the creative has no linguistic content (e.g., a banner with just a company logo).
     * @param Display|null $display Media Subtype Object that indicates this is a display ad and provides additional detail as such. Refer to Object: Display. * Required if no other media subtype object is specified.
     * @param list<string>|null $cat Array of content categories describing the ad using IDs from the taxonomy indicated in cattax. Implementer should ensure compliance with regional legislation around data usage and sharing.
     * @param list<string>|null $bundle When the product of the ad is an app, the unique ID of that app as a bundle or package name (e.g., "com.foo.mygame"). This should NOT be an app store ID (e.g., no iTunes store IDs). This can be an array of for the case of rotating creatives.
     * @param list<string>|null $adomain Advertiser domain; top two levels only (e.g., "ford.com"). This can be an array for the case of rotating creatives.
     * @param MediaRatingEnum|null $mrating Media rating per IQG guidelines. Refer to List: Media Ratings.
     * @param CategoryTaxonomyEnum|int|null $cattax The taxonomy in use for the cat attribute. Refer to List: Category Taxonomies.
     * @param list<CreativeAttributeEnum>|null $attr Set of attributes describing the creative. Refer to List: Creative Attributes.
     */
    public function __construct(
        public string $id,
        public int|null $init = null,
        public array|null $cat = null,
        public array|null $attr = null,
        public int|null $secure = null,
        public Audio|null $audio = null,
        public Audit|null $audit = null,
        public Video|null $video = null,
        public int|null $lastmod = null,
        public string|null $iurl = null,
        public string|null $lang = null,
        public array|null $bundle = null,
        public array|null $adomain = null,
        public Display|null $display = null,
        public MediaRatingEnum|null $mrating = null,
        public CategoryTaxonomyEnum|int|null $cattax = CategoryTaxonomyEnum::CONTENT_2_0,
        public mixed $ext = null,
    ) {
    }
}
