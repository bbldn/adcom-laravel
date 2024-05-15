<?php

namespace BBLDN\AdCOMLaravel\Context;

use BBLDN\AdCOMLaravel\Enum\AgentTypeEnum;
use Spatie\LaravelData\Data as LaravelData;

/**
 * @see Source or technology provider responsible for the set of included IDs. Expressed as a top-level domain.
 */
class ExtendedUid extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string|null $id Cookie or platform-native identifier.
     * @param AgentTypeEnum|null $atype Type of user agent the match is from. It is highly recommended to set this, as many DSPs separate app-native IDs from browser-based IDs and require a type value for ID resolution. Refer to List: Agent Types.
     */
    public function __construct(
        public string|null $id = null,
        public AgentTypeEnum|null $atype = null,
        public mixed $ext = null,
    ) {
    }
}
