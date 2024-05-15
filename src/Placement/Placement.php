<?php

namespace BBLDN\AdCOMLaravel\Placement;

use Spatie\LaravelData\Data as LaravelData;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--placement-
 */
class Placement extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $ssai Indicates if server-side ad insertion (e.g., stitching an ad into an audio or video stream) is in use and the impact of this on asset and tracker retrieval, where 0 = status unknown, 1 = all client-side (i.e., not server-side), 2 = assets stitched server-side but tracking pixels fired client-side, 3 = all server-side.
     * @param int|null $reward Indicates whether the user recieves a reward for viewing the ad, where 0 = no, 1 = yes. Typcially video ad implementations allow users to read an additional news article for free, receive an extra life in a game, or get a sponsored ad-free music session. The reward is typically distributed after the video ad is completed.
     * @param int|null $admx Indicates if including markup is supported (i.e., the various adm attributes throughout the Placement structure), where 0 = no, 1 = yes.
     * @param int|null $curlx Indicates if retrieving markup via URL reference is supported (i.e., the various curl attributes throughout the Placement structure), where 0 = no, 1 = yes.
     * @param int|null $secure Flag to indicate if the creative is secure (i.e., uses HTTPS for all assets and markup), where 0 = no, 1 = yes. There is no default and thus if omitted, the secure state is unknown. However, as a practical matter, the safe assumption is to treat unknown as non-secure.
     * @param string|null $sdk Name of ad mediation partner, SDK technology, or player responsible for rendering ad (typically video, audio, or mobile); used by some ad servers to customize ad code by partner.
     * @param string|null $tagid Identifier for specific ad placement or ad tag; unique within a distribution channel.
     * @param string|null $sdkver Version of the SDK specified in the sdk attribute.
     * @param list<string>|null $wlang Allow list of permitted languages of the creative using ISO-639-1-alpha-2. In practice, vendors using this object may elect an alternate standard (e.g., BCP-47) in which case this must be communicated beforehand. Omission of this attribute indicates there are no restrictions.
     * @param AudioPlacement|null $audio Placement Subtype Object that indicates that this may be an audio placement and provides additional detail related thereto. Refer to Object: AudioPlacement. * At least one placement subtype object is required.
     * @param VideoPlacement|null $video Placement Subtype Object that indicates that this may be a video placement and provides additional detail related thereto. Refer to Object: VideoPlacement. * At least one placement subtype object is required.
     * @param DisplayPlacement|null $display Placement Subtype Object that indicates that this may be a display placement and provides additional detail related thereto. Refer to Object: DisplayPlacement. * At least one placement subtype object is required.
     */
    public function __construct(
        public int|null $ssai = 0,
        public int|null $reward = 0,
        public int|null $admx = null,
        public int|null $curlx = null,
        public int|null $secure = null,
        public string|null $sdk = null,
        public array|null $wlang = null,
        public string|null $tagid = null,
        public string|null $sdkver = null,
        public AudioPlacement|null $audio = null,
        public VideoPlacement|null $video = null,
        public DisplayPlacement|null $display = null,
        public mixed $ext = null,
    ) {
    }
}
