<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\AuditStatusCodeEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--audit-
 */
class Audit extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $init Timestamp of the original instantiation of this object in Unix format (i.e., milliseconds since the epoch).
     * @param mixed|null $corr Correction object wherein the auditor can specify changes to attributes of the Ad object or its children they believe to be proper. For example, if the original Ad indicated a category of "IAB3", but the auditor deems the correct category to be "IAB13", then corr could include a sparse Ad object including just the cat array indicating "IAB13".
     * @param int|null $lastmod Timestamp of most recent modification to this object in Unix format (i.e., milliseconds since the epoch).
     * @param list<string>|null $feedback One or more human-readable explanations as to reasons for rejection or any changes to fields for ad quality reasons (e.g., adomain, cat, attr, etc.).
     * @param AuditStatusCodeEnum|null $status The audit status of the ad. Refer to List: Audit Status Codes.
     */
    public function __construct(
        public int|null $init = null,
        public int|null $lastmod = null,
        public array|null $feedback = null,
        public AuditStatusCodeEnum|null $status = null,
        public mixed $ext = null,
        public mixed $corr = null,
    ) {
    }
}
