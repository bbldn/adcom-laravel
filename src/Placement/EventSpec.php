<?php

namespace BBLDN\AdCOMLaravel\Placement;

use BBLDN\AdCOMLaravel\Enum\EventTypeEnum;
use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\ApiFrameworkEnum;
use BBLDN\AdCOMLaravel\Enum\EventTrackingMethodEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--eventspec-
 */
class EventSpec extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $wjs Sense of the jstrk restriction list, where 0 = block list, 1 = allow list.
     * @param int|null $wpx Sense of the pxtrk restriction list, where 0 = block list, 1 = allow list.
     * @param EventTypeEnum $type Type of supported ad tracking event. Refer to List: Event Types.
     * @param list<string>|null $jstrk Array of domains, top two levels only (e.g., "tracker.com"), that constitute a restriction list of JavaScript trackers. The sense of the restrictions is determined by wjs.
     * @param list<string>|null $pxtrk Array of domains, top two levels only (e.g., "tracker.com"), that constitute a restriction list of pixel image trackers. The sense of the restrictions is determined by wpx.
     * @param list<ApiFrameworkEnum>|null $api Event tracking APIs available for use; only relevant for JavaScript method trackers. Refer to List: API Frameworks.
     * @param list<EventTrackingMethodEnum>|null $method Array of supported event tracking methods for this event type. Refer to List: Event Tracking Methods.
     */
    public function __construct(
        public EventTypeEnum $type,
        public int|null $wjs = 1,
        public int|null $wpx = 1,
        public array|null $api = null,
        public array|null $jstrk = null,
        public array|null $pxtrk = null,
        public array|null $method = null,
        public mixed $ext = null,
    ) {
    }
}
