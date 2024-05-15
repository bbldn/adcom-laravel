<?php

namespace BBLDN\AdCOMLaravel\Placement;

use BBLDN\AdCOMLaravel\Enum\SizeUnitEnum;
use BBLDN\AdCOMLaravel\Enum\ClickTypeEnum;
use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\ApiFrameworkEnum;
use BBLDN\AdCOMLaravel\Enum\PlacementPositionEnum;
use BBLDN\AdCOMLaravel\Enum\DisplayContextTypeEnum;
use BBLDN\AdCOMLaravel\Enum\DisplayPlacementTypeEnum;
use BBLDN\AdCOMLaravel\Enum\CreativeSubtypeDisplayEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--displayplacement-
 */
class DisplayPlacement extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $h Width of the placement in units specified by unit. Note that this size applies to the placement itself; permitted creative sizes are specified elsewhere (e.g., DisplayFormat, ImageAssetFormat, etc.).
     * @param int|null $w Width of the placement in units specified by unit. Note that this size applies to the placement itself; permitted creative sizes are specified elsewhere (e.g., DisplayFormat, ImageAssetFormat, etc.).
     * @param int|null $priv Indicator of whether or not the placement supports a buyer-specific privacy notice URL, where 0 = no, 1 = yes.
     * @param int|null $instl Indicates if this is an interstitial placement, where 0 = no, 1 = yes.
     * @param int|null $ampren AMPHTML rendering treatment for AMP ads in this placement, where 1 = early loading, 2 = standard loading.
     * @param int|null $topframe Indicates if the placement will be loaded into an iframe or not, where 0 = unfriendly iframe or unknown, 1 = top frame, friendly iframe, or SafeFrame. A value of "1" can be understood to mean that expandable ads are technically capable of being delivered.
     * @param SizeUnitEnum|null $unit Unit of size used for placement size (i.e., w and h attributes). Refer to List: Size Units.
     * @param list<string>|null $mime Array of supported mime types (e.g., "image/jpeg", "image/gif"). If omitted, all types are assumed.
     * @param list<string>|null $ifrbust Array of iframe busters supported by this placement. The meaning of strings in this attribute must be coordinated beforehand among vendors.
     * @param ClickTypeEnum|null $clktype Indicates the click type of this placement. Refer to List: Click Types.
     * @param list<EventSpec>|null $event Array of supported ad tracking events. Refer to Object: EventSpec.
     * @param NativeFormat|null $nativefmt This object specified the required and permitted assets and attributes of a native display placement. Refer to Object: NativeFormat.
     * @param PlacementPositionEnum|null $pos Placement position on screen. Refer to List: Placement Positions.
     * @param list<ApiFrameworkEnum>|null $api List of supported APIs. If an API is not explicitly listed, it is assumed to be unsupported. Refer to List: API Frameworks.
     * @param DisplayContextTypeEnum|null $context The context of the placement. Refer to List: Display Context Types.
     * @param DisplayPlacementTypeEnum|null $ptype The display placement type. Refer to List: Display Placement Types.
     * @param list<DisplayFormat>|null $displayfmt Array of objects that govern the attributes (e.g., sizes) of a banner display placement. Refer to Object: DisplayFormat.
     * @param list<CreativeSubtypeDisplayEnum>|null $ctype Creative subtypes permitted. Refer to List: Creative Subtypes - Display.
     */
    public function __construct(
        public int|null $h = null,
        public int|null $priv = 0,
        public int|null $w = null,
        public int|null $instl = 0,
        public array|null $api = null,
        public array|null $mime = null,
        public int|null $ampren = null,
        public array|null $ctype = null,
        public array|null $event = null,
        public int|null $topframe = null,
        public array|null $ifrbust = null,
        public array|null $displayfmt = null,
        public NativeFormat|null $nativefmt = null,
        public PlacementPositionEnum|null $pos = null,
        public DisplayContextTypeEnum|null $context = null,
        public DisplayPlacementTypeEnum|null $ptype = null,
        public SizeUnitEnum|null $unit = SizeUnitEnum::DIPS,
        public ClickTypeEnum|null $clktype = ClickTypeEnum::CLICKABLE_UNKNOWN,
        public mixed $ext = null,
    ) {
    }
}
