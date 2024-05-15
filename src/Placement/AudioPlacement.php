<?php

namespace BBLDN\AdCOMLaravel\Placement;

use BBLDN\AdCOMLaravel\Enum\FeedTypeEnum;
use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\PodSequenceEnum;
use BBLDN\AdCOMLaravel\Enum\ApiFrameworkEnum;
use BBLDN\AdCOMLaravel\Enum\CompanionTypeEnum;
use BBLDN\AdCOMLaravel\Enum\DeliveryMethodEnum;
use BBLDN\AdCOMLaravel\Enum\PlaybackMethodEnum;
use BBLDN\AdCOMLaravel\Enum\StartDelayModeEnum;
use BBLDN\AdCOMLaravel\Enum\SlotPositionPodEnum;
use BBLDN\AdCOMLaravel\Enum\ExpandableDirectionEnum;
use BBLDN\AdCOMLaravel\Enum\PlaybackCessationModeEnum;
use BBLDN\AdCOMLaravel\Enum\VolumeNormalizationModeEnum;
use BBLDN\AdCOMLaravel\Enum\CreativeSubtypeAudioVideoEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--audioplacement-
 */
class AudioPlacement extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $mime Array of supported mime types (e.g., "audio/mp4"). If omitted, all types are assumed.
     * @param int|null $skip Indicates if the placement imposes ad skippability, where 0 = no, 1 = yes.
     * @param int|null $podid Unique identifier indicating that an impression opportunity belongs to a video ad pod. If multiple impression opportunities within a bid request share the same podid, this indicates that those impression opportunities belong to the same video ad pod.
     * @param int|null $maxdur Maximum creative duration in seconds. This field is mutually exclusive with rqddurs; only one of maxdur and rqddurs may be in a bid request.
     * @param int|null $maxext Maximum extended creative duration if extension is allowed. If 0, extension is not allowed. If -1, extension is allowed and there is no time limit imposed. If greater than 0, then the value represents the number of seconds of extended play supported beyond the maxdur value.
     * @param int|null $maxseq The maximum number of ads that can be played in an ad pod.
     * @param int|null $mindur Minimum creative duration in seconds. This field is mutually exclusive with rqddurs; only one of mindur and rqddurs may be in a bid request.
     * @param int|null $poddur Indicates the total amount of time in seconds that advertisers may fill for a "dynamic" video ad pod, or the dynamic portion of a "hybrid" ad pod. This field is required only for the dynamic portion(s) of video ad pods. This field refers to the length of the entire ad break, whereas mindur/maxdur/rqddurs are constraints relating to the slots that make up the pod.
     * @param int|null $maxbitr Maximum bit rate of the creative in Kbps.
     * @param int|null $minbitr Minimum bit rate of the creative in Kbps.
     * @param int|null $skipmin The placement allows creatives of total duration greater than this number of seconds to be skipped; only applicable if the ad is skippable.
     * @param int|null $skipafter Number of seconds a creative must play before the placement enables skipping; only applicable if the ad is skippable.
     * @param FeedTypeEnum|null $feed Type of audio feed of this placement. Refer to List: Feed Types.
     * @param list<int>|null $rqddurs Precise acceptable durations for video creatives in seconds. This field specifically targets the Live TV use case where non-exact ad durations would result in undesirable 'dead air'. This field is mutually exclusive with mindur and maxdur; if rqddurs is specified, mindur and maxdur must not be specified and vice versa.
     * @param float|null $mincpmpersec Minimum CPM per second. This is a price floor for the "dynamic" portion of a video ad pod, relative to the duration of bids an advertiser may submit.
     * @param list<Companion>|null $comp Array of objects indicating that companion ads are available and providing the specifications thereof. Refer to Object: Companion.
     * @param PodSequenceEnum|null $podseq The sequence (position) of the video ad pod within a content stream. Refer to List: List: Pod Sequence for guidance on the use of this field.
     * @param StartDelayModeEnum|null $delay Indicates the start delay in seconds for pre-roll, mid-roll, or post-roll placements. For additional generic values, refer to List: Start Delay Modes.
     * @param list<ApiFrameworkEnum>|null $api List of supported APIs for this placement. If an API is not explicitly listed, it is assumed to be unsupported. Refer to List: API Frameworks.
     * @param SlotPositionPodEnum|null $slotinpod For video ad pods, this value indicates that the seller can guarantee delivery against the indicated slot position in the pod. Refer to List: List: Slot Position in Pod for guidance on the use of this field.
     * @param VolumeNormalizationModeEnum|null $nvol Volume normalization mode of this placement. Refer to List: Volume Normalization Modes.
     * @param list<CompanionTypeEnum>|null $comptype Supported companion ad types; recommended if companion ads are specified in comp. Refer to List: Companion Types.
     * @param PlaybackCessationModeEnum|null $playend The event that causes playback to end for this placement. Refer to List: Playback Cessation Modes.
     * @param list<DeliveryMethodEnum>|null $delivery Array of supported creative delivery methods. If omitted, all can be assumed. Refer to List: Delivery Methods.
     * @param list<PlaybackMethodEnum>|null $playmethod Playback method(s) in use for this placement. Refer to List: Playback Methods.
     * @param list<CreativeSubtypeAudioVideoEnum>|null $ctype Creative subtypes permitted for this placement. Refer to List: Creative Subtypes - Audio/Video.
     * @param list<ExpandableDirectionEnum>|null $overlayexpdir Directions in which the creative (overlay) is permitted to expand. Refer to List: Expandable Directions.
     */
    public function __construct(
        public string $mime,
        public int|null $skip = null,
        public int|null $skipmin = 0,
        public array|null $api = null,
        public int|null $podid = null,
        public array|null $comp = null,
        public int|null $maxdur = null,
        public int|null $maxext = null,
        public int|null $maxseq = null,
        public int|null $mindur = null,
        public int|null $poddur = null,
        public int|null $skipafter = 0,
        public array|null $ctype = null,
        public int|null $maxbitr = null,
        public int|null $minbitr = null,
        public array|null $rqddurs = null,
        public array|null $comptype = null,
        public array|null $delivery = null,
        public array|null $playmethod = null,
        public FeedTypeEnum|null $feed = null,
        public float|null $mincpmpersec = null,
        public array|null $overlayexpdir = null,
        public StartDelayModeEnum|null $delay = null,
        public VolumeNormalizationModeEnum|null $nvol = null,
        public PlaybackCessationModeEnum|null $playend = null,
        public PodSequenceEnum|null $podseq = PodSequenceEnum::ANY_POD,
        public SlotPositionPodEnum|null $slotinpod = SlotPositionPodEnum::ANY,
        public mixed $ext = null,
    ) {
    }
}
