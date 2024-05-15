<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--user-
 */
class User extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param Geo|null $geo Location of the user's home base (i.e., not necessarily their current location). Refer to Object: Geo.
     * @param int|null $yob Year of birth as a 4-digit integer.
     * @param string|null $id Vendor-specific ID for the user. At least one of id or buyeruid is strongly recommended.
     * @param string|null $gender Gender, where "M" = male, "F" = female, "O" = known to be other (i.e., omitted is unknown).
     * @param string|null $consent GDPR consent string if applicable, complying with the comply with the IAB standard Consent String Format in the Transparency and Consent Framework technical specifications.
     * @param list<Data>|null $data Additional user data. Each Data object represents a different data source. Refer to Object: Data.
     * @param string|null $buyeruid Buyer-specific ID for the user as mapped by an exchange for the buyer. At least one of id or buyeruid is strongly recommended.
     * @param string|null $keywords Comma-separated list of keywords, interests, or intent. Only one of 'keywords' or 'kwarray' may be present. NOTE: this field is deprecated, use 'kwarray' instead.
     * @param list<string>|null $kwarray Array of keywords describing the content. Only one of 'keywords' or 'kwarray' may be present.
     * @param list<ExtendedIds>|null $eids Extended (third-party) identifiers for this user. Refer to Object: Extended Identifiers.
     */
    public function __construct(
        public Geo|null $geo = null,
        public int|null $yob = null,
        public string|null $id = null,
        public array|null $data = null,
        public array|null $eids = null,
        public array|null $kwarray = null,
        public string|null $gender = null,
        public string|null $consent = null,
        public string|null $buyeruid = null,
        public string|null $keywords = null,
        public mixed $ext = null,
    ) {
    }
}
