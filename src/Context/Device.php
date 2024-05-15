<?php

namespace BBLDN\AdCOMLaravel\Context;

use BBLDN\AdCOMLaravel\Enum\DeviceTypeEnum;
use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\ConnectionTypeEnum;
use BBLDN\AdCOMLaravel\Enum\OperatingSystemEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--device-
 */
class Device extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $h Physical height of the screen in pixels.
     * @param int|null $w Physical width of the screen in pixels.
     * @param int|null $js Support for JavaScript, where 0 = no, 1 = yes.
     * @param Geo|null $geo Location of the device (i.e., typically the user's current location). Refer to Object: Geo.
     * @param int|null $dnt Standard "Do Not Track" flag as set in the header by the browser, where 0 = tracking is unrestricted, 1 = do not track.
     * @param int|null $lmt "Limit Ad Tracking" signal commercially endorsed (e.g., iOS, Android), where 0 = tracking is unrestricted, 1 = tracking must be limited per commercial guidelines.
     * @param int|null $ppi Screen size as pixels per linear inch.
     * @param int|null $iptr Indicator of truncation of any of the IP attributes (i.e., ip, ipv6, xff), where 0 = no, 1 = yes (e.g., from 1.2.3.4 to 1.2.3.0). Refer to https://tools.ietf.org/html/rfc6235#section-4.1.1 for more information on IP truncation.
     * @param string|null $ip IPv4 address closest to device.
     * @param string|null $ua Browser user agent string. This field represents a raw user agent string from the browser. For backwards compatibility, exchanges are recommended to always populate `ua` with the User-Agent string, when available from the end user’s device, even if an alternative representation, such as the User-Agent Client-Hints, is available and gets used to populate `sua`. No inferred or approximated user agents are expected in this field. If both `ua` and `sua` are present in the bid request, `sua` should be considered the more accurate representation of the device attributes. This is because the `ua` may contain a frozen or reduced UserAgent string.
     * @param string|null $hwv Hardware version of the device (e.g., "5S" for iPhone 5S).
     * @param string|null $ifa ID sanctioned for advertiser use in the clear (i.e., not hashed).
     * @param string|null $osv Device operating system version (e.g., "3.1.2").
     * @param string|null $xff The value of the "x-forwarded-for" header.
     * @param string|null $ipv6 IP address closest to device as IPv6.
     * @param string|null $lang Browser language using ISO-639-1-alpha-2. Only one of lang or langb should be present.
     * @param string|null $make Device make (e.g., "Apple").
     * @param int|null $geofetch Indicates if the geolocation API will be available to JavaScript code running in display ad, where 0 = no, 1 = yes.
     * @param string|null $langb Browser language using IETF BCP 47. Only one of lang or langb should be present.
     * @param string|null $model Device model (e.g., "iPhone10,1" when the specific device model is known, "iPhone" otherwise). The value obtained from the device O/S should be used when available.
     * @param UserAgent|null $sua Structured user agent information defined by a Object: UserAgent. If both `ua` and `sua` are present in the bid request, `sua` should be considered the more accurate representation of the device attributes. This is because the `ua` may contain a frozen or reduced UserAgent string.
     * @param float|null $pxratio The ratio of physical pixels to device independent pixels.
     * @param string|null $mccmnc Mobile carrier as the concatenated MCC-MNC code (e.g., "310-005" identifies Verizon Wireless CDMA in the USA). Refer to https://en.wikipedia.org/wiki/Mobile_country_code for further information and references. Note that the dash between the MCC and MNC parts is required to remove parsing ambiguity. The MCC-MNC values represent the SIM installed on the device and do not change when a device is roaming. Roaming may be inferred by a combination of the MCC-MNC, geo, IP and other data signals.
     * @param string|null $carrier Carrier or ISP (e.g., "VERIZON") using exchange curated string names which should be published to bidders beforehand.
     * @param string|null $mccmncsim MCC and MNC of the SIM card using the same format as mccmnc. When both values are available, a difference between them reveals that a user is roaming.
     * @param DeviceTypeEnum|null $type The general type of device. Refer to List: Device Types.
     * @param OperatingSystemEnum|null $os Device operating system. Refer to List: Operating Systems.
     * @param ConnectionTypeEnum|null $contype Network connection type. Refer to List: Connection Types.
     */
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public int|null $js = null,
        public Geo|null $geo = null,
        public int|null $dnt = null,
        public int|null $lmt = null,
        public int|null $ppi = null,
        public int|null $iptr = null,
        public string|null $ip = null,
        public string|null $ua = null,
        public string|null $hwv = null,
        public string|null $ifa = null,
        public string|null $osv = null,
        public string|null $xff = null,
        public string|null $ipv6 = null,
        public string|null $lang = null,
        public string|null $make = null,
        public int|null $geofetch = null,
        public string|null $langb = null,
        public string|null $model = null,
        public UserAgent|null $sua = null,
        public float|null $pxratio = null,
        public string|null $mccmnc = null,
        public string|null $carrier = null,
        public string|null $mccmncsim = null,
        public DeviceTypeEnum|null $type = null,
        public OperatingSystemEnum|null $os = null,
        public ConnectionTypeEnum|null $contype = null,
        public mixed $ext = null,
    ) {
    }
}
