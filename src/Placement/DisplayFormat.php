<?php

namespace BBLDN\AdCOMLaravel\Placement;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\ExpandableDirectionEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--displayformat-
 */
class DisplayFormat extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $h Absolute height of the creative in units specified by DisplayPlacement.unit. Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $w Absolute width of the creative in units specified by DisplayPlacement.unit. Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $hratio Relative height of the creative when expressing size as a ratio. Note that mixing absolute and relative sizes is not recommended.
     * @param int|null $wratio Relative width of the creative when expressing size as a ratio. Note that mixing absolute and relative sizes is not recommended.
     * @param list<ExpandableDirectionEnum>|null $expdir Directions in which the creative is permitted to expand. Refer to List: Expandable Directions.
     */
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public int|null $hratio = null,
        public int|null $wratio = null,
        public array|null $expdir = null,
        public mixed $ext = null,
    ) {
    }
}
