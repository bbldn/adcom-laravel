<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\ApiFrameworkEnum;
use BBLDN\AdCOMLaravel\Enum\CreativeSubtypeDisplayEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--display-
 */
class Display extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $h Absolute height of the creative in device independent pixels (DIPS), typically for non-native ads. Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $w Absolute width of the creative in device independent pixels (DIPS), typically for non-native ads. Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $hratio Relative height of the creative when expressing size as a ratio, typically for non-native ads. Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $wratio Relative width of the creative when expressing size as a ratio, typically for non-native ads. Note that mixing absolute and relative sizes is not recommended.
     * @param string|null $adm General display markup (e.g., HTML, AMPHTML) if not using a structured alternative (e.g., banner, native). Note that including both adm and curl is not recommended.
     * @param string|null $curl Optional means of retrieving display markup by reference; a URL that can return HTML, AMPHTML, or a collection native Asset object and their subordinates). If this ad is matched to a Placement specification, the Placement.curlx attribute indicates if this markup retrieval option is supported. Note that including both adm and curl is not recommended.
     * @param string|null $mime Mime type of the ad (e.g., "image/jpeg").
     * @param string|null $priv URL of a page informing the user about a buyer's targeting activity.
     * @param list<Event> $event Array of events that the advertiser or buying platform wants to track. Refer to Object: Event.
     * @param Banner|null $banner Structured banner image object, recommended for simple banner creatives. Refer to Object: Banner.
     * @param Native|null $native Structured native object, recommended for native ads. Refer to Object: Native.
     * @param list<ApiFrameworkEnum>|null $api API required by the ad if applicable. Refer to List: API Frameworks.
     * @param CreativeSubtypeDisplayEnum|null $ctype Subtype of display creative. Refer to List: Creative Subtypes - Display.
     */
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public array|null $api = null,
        public int|null $hratio = null,
        public int|null $wratio = null,
        public string|null $adm = null,
        public array|null $event = null,
        public string|null $curl = null,
        public string|null $mime = null,
        public string|null $priv = null,
        public Banner|null $banner = null,
        public Native|null $native = null,
        public CreativeSubtypeDisplayEnum|null $ctype = null,
        public mixed $ext = null,
    ) {
    }
}
