<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--regs-
 */
class Regs extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $gdpr Flag indicating if GDPR regulations apply, where 0 = no, 1 = yes. The General Data Protection Regulation (GDPR) is a regulation of the European Union.
     * @param int|null $coppa Flag indicating if COPPA regulations apply, where 0 = no, 1 = yes. The Children's Online Privacy Protection Act (COPPA) was established by the U.S. Federal Trade Commission.
     */
    public function __construct(
        public int|null $gdpr = null,
        public int|null $coppa = null,
        public mixed $ext = null,
    ) {
    }
}
