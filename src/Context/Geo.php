<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\LocationTypeEnum;
use BBLDN\AdCOMLaravel\Enum\IPLocationServiceEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--geo-
 */
class Geo extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param float|null $lat Latitude from -90.0 to +90.0, where negative is south.
     * @param float|null $lon Longitude from -180.0 to +180.0, where negative is west.
     * @param int|null $accur Estimated location accuracy in meters; recommended when lat/lon are specified and derived from a device's location services (i.e., type = 1). Note that this is the accuracy as reported from the device. Consult OS specific documentation (e.g., Android, iOS) for exact interpretation.
     * @param string|null $zip ZIP or postal code.
     * @param int|null $lastfix Number of seconds since this geolocation fix was established. Note that devices may cache location data across multiple fetches. Ideally, this value should be from the time the actual fix was taken.
     * @param string|null $city City using United Nations Code for Trade & Transport Locations "UN/LOCODE" with the space between country and city suppressed (e.g., Boston MA, USA = "USBOS"). Refer to UN/LOCODE Code List.
     * @param string|null $metro Regional marketing areas such as Nielsen's DMA codes or other similar taxonomy to be agreed among vendors prior to use. Note that DMA is a trademarked asset of The Nielsen Company. Vendors are encouraged to ensure their use of DMAs is properly licensed.
     * @param int|null $utcoffset Local time as the number +/- of minutes from UTC.
     * @param string|null $region Region code using ISO-3166-2; 2-letter state code if USA.
     * @param string|null $country Country code using ISO-3166-1-alpha-2. Note that alpha-3 codes may be encountered and vendors are encouraged to be tolerant of them.
     * @param LocationTypeEnum|null $type Source of location data; recommended when passing lat/lon. Refer to List: Location Types.
     * @param IPLocationServiceEnum|null $ipserv Service or provider used to determine geolocation from IP address if applicable (i.e., type = 2). Refer to List: IP Location Services.
     */
    public function __construct(
        public float|null $lat = null,
        public float|null $lon = null,
        public int|null $accur = null,
        public string|null $zip = null,
        public int|null $lastfix = null,
        public string|null $city = null,
        public string|null $metro = null,
        public int|null $utcoffset = null,
        public string|null $region = null,
        public string|null $country = null,
        public LocationTypeEnum|null $type = null,
        public IPLocationServiceEnum|null $ipserv = null,
        public mixed $ext = null,
    ) {
    }
}
