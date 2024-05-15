<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\UserAgentSourceEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--useragent-
 */
class UserAgent extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $mobile 1 if the agent prefers a "mobile" version of the content, if available, i.e. optimized for small screens or touch input. 0 if the agent prefers the "desktop" or "full" content. Implementers should derive this value from the Sec-CH-UA-Mobile header *.
     * @param string|null $model Device model. Implementers should retrieve this value from the Sec-CH-UA-Model header *.
     * @param string|null $bitness Device’s bitness, e.g. "64" for 64-bit architecture. Implementers should retrieve this value from the Sec-CH-UA-Bitness header *.
     * @param string|null $architecture Device’s major binary architecture, e.g. "x86" or "arm". Implementers should retrieve this value from the Sec-CH-UA-Arch header*.
     * @param BrandVersion|null $platform Refer to Object: BrandVersion that identifies the user agent’s execution platform / OS. Implementers should send a brand derived from the Sec-CH-UA-Platform header, and version derived from the Sec-CH-UA-Platform-Version header *.
     * @param UserAgentSourceEnum|null $source The source of data used to create this object. Refer to List: User-Agent Source
     * @param list<BrandVersion>|null $browsers Each BrandVersion object identifies a browser or similar software component. Refer to Object: BrandVersion. Implementers should send brands and versions derived from the Sec-CH-UA-Full-Version-List header*.
     */
    public function __construct(
        public int|null $mobile = null,
        public string|null $model = null,
        public array|null $browsers = null,
        public string|null $bitness = null,
        public string|null $architecture = null,
        public BrandVersion|null $platform = null,
        public UserAgentSourceEnum|null $source = UserAgentSourceEnum::UNKNOWN,
        public mixed $ext = null,
    ) {
    }
}
