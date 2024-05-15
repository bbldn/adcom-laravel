<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--network-
 */
class Network extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $id A unique identifier assigned by the publisher. This may not be a unique identifier across all supply sources.
     * @param string|null $name Network the content is on (e.g., a TV network like "ABC").
     * @param string|null $domain The primary domain of the network (e.g., "abc.com" in the case of the network ABC). It is recommended to include the top private domain (PSL+1) for DSP targeting normalization purposes.
     */
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public string|null $domain = null,
        public mixed $ext = null,
    ) {
    }
}
