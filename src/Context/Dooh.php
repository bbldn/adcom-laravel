<?php

namespace BBLDN\AdCOMLaravel\Context;

use BBLDN\AdCOMLaravel\Enum\DOOHVenueTypeEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--dooh-
 */
class Dooh extends DistributionChannel
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $id Vendor-specific unique identifier of the distribution channel.
     * @param int|null $dpi Minimum DPI for text-based creative elements to display clearly.
     * @param int|null $etime The exposure time in seconds per view that the creative will be displayed before refreshing to the next creative.
     * @param int|null $fixed Indicates whether the DOOH placement is in a fixed location (e.g., kiosk, billboard, elevator) or is movable (e.g., taxi), where 1 = fixed, 2 = movable.
     * @param string|null $name Displayable name of the distribution channel.
     * @param Publisher|null $pub Details about the publisher of the distribution channel. Refer to Object: Publisher.
     * @param Content|null $content Details about the content within the distribution channel. Refer to Object: Content.
     * @param DOOHVenueTypeEnum|null $venue The type of out-of-home venue. Refer to List: DOOH Venue TypesList: DOOH Venue Types.
     */
    public function __construct(
        public string $id,
        public int|null $dpi = null,
        public int|null $etime = null,
        public int|null $fixed = null,
        public string|null $name = null,
        public Publisher|null $pub = null,
        public Content|null $content = null,
        public DOOHVenueTypeEnum|null $venue = null,
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
