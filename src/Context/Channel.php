<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--channel-
 */
class Channel extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $id A unique identifier assigned by the publisher. This may not be a unique identifier across all supply sources.
     * @param string|null $name Channel the content is on (e.g., a local channel like "WABC-TV").
     * @param string|null $domain The primary domain of the channel (e.g., "abc7ny.com" in the case of the local channel WABC-TV). It is recommended to include the top private domain (PSL+1) for DSP targeting normalization purposes.
     */
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public string|null $domain = null,
        public mixed $ext = null,
    ) {
    }
}
