<?php

namespace BBLDN\AdCOMLaravel\Media;

use BBLDN\AdCOMLaravel\Enum\EventTypeEnum;
use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\ApiFrameworkEnum;
use BBLDN\AdCOMLaravel\Enum\EventTrackingMethodEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--event-
 */
class Event extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $url The URL of the tracking pixel or JavaScript tag, respectively. * Required for Image-Pixel or JavaScript methods.
     * @param EventTypeEnum $type Type of event to track. Refer to List: Event Types.
     * @param EventTrackingMethodEnum $method Method of tracking requested. Refer to List: Event Tracking Methods.
     * @param array<string, mixed>|null $cdata An array of key-value pairs to support vendor-specific data required for custom tracking. For example, the account number of a buyer with a tracking company might be represented as: {"acct": "123"}.
     * @param list<ApiFrameworkEnum>|null $api The APIs being used by the tracker; only relevant when the tracking method is JavaScript. Refer to List: API Frameworks.
     */
    public function __construct(
        public string $url,
        public EventTypeEnum $type,
        public EventTrackingMethodEnum $method,
        public array|null $api = null,
        public array|null $cdata = null,
        public mixed $ext = null,
    ) {
    }
}
