<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--brandversion-
 */
class BrandVersion extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $brand A brand identifier, for example, "Chrome" or "Windows". The value may be sourced from the User-Agent Client Hints headers, representing either the user agent brand (from the Sec-CH-UA-Full-Version header) or the platform brand (from the Sec-CH-UA-Platform header).
     * @param list<string>|null $version A sequence of version components, in descending hierarchical order (major, minor, micro, …)
     */
    public function __construct(
        public string|null $brand = null,
        public array|null $version = null,
        public mixed $ext = null,
    ) {
    }
}
