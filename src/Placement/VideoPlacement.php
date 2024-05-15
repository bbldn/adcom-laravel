<?php

namespace BBLDN\AdCOMLaravel\Placement;

use BBLDN\AdCOMLaravel\Enum\SizeUnitEnum;
use BBLDN\AdCOMLaravel\Enum\ClickTypeEnum;
use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\PodSequenceEnum;
use BBLDN\AdCOMLaravel\Enum\ApiFrameworkEnum;
use BBLDN\AdCOMLaravel\Enum\CompanionTypeEnum;
use BBLDN\AdCOMLaravel\Enum\LinearityModeEnum;
use BBLDN\AdCOMLaravel\Enum\DeliveryMethodEnum;
use BBLDN\AdCOMLaravel\Enum\PlaybackMethodEnum;
use BBLDN\AdCOMLaravel\Enum\StartDelayModeEnum;
use BBLDN\AdCOMLaravel\Enum\SlotPositionPodEnum;
use BBLDN\AdCOMLaravel\Enum\PlacementPositionEnum;
use BBLDN\AdCOMLaravel\Enum\PlcmtSubtypeVideoEnum;
use BBLDN\AdCOMLaravel\Enum\ExpandableDirectionEnum;
use BBLDN\AdCOMLaravel\Enum\PlaybackCessationModeEnum;
use BBLDN\AdCOMLaravel\Enum\CreativeSubtypeAudioVideoEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--videoplacement-
 */
class VideoPlacement extends LaravelData
{
    /**
     * @param mixed $ext
     * @param int|null $h
     * @param int|null $w
     * @param int|null $skip
     * @param int|null $podid
     * @param int|null $boxing
     * @param int|null $maxdur
     * @param int|null $maxext
     * @param int|null $maxseq
     * @param int|null $mindur
     * @param int|null $poddur
     * @param int|null $maxbitr
     * @param int|null $minbitr
     * @param int|null $skipmin
     * @param list<string> $mime
     * @param int|null $skipafter
     * @param SizeUnitEnum|null $unit
     * @param list<int>|null $rqddurs
     * @param float|null $mincpmpersec
     * @param list<Companion>|null $comp
     * @param ClickTypeEnum|null $clktype
     * @param PodSequenceEnum|null $podseq
     * @param LinearityModeEnum|null $linear
     * @param StartDelayModeEnum|null $delay
     * @param PlacementPositionEnum|null $pos
     * @param list<ApiFrameworkEnum>|null $api
     * @param PlcmtSubtypeVideoEnum|null $ptype
     * @param SlotPositionPodEnum|null $slotinpod
     * @param list<CompanionTypeEnum>|null $comptype
     * @param PlaybackCessationModeEnum|null $playend
     * @param list<DeliveryMethodEnum>|null $delivery
     * @param list<PlaybackMethodEnum>|null $playmethod
     * @param list<ExpandableDirectionEnum>|null $expdir
     * @param list<CreativeSubtypeAudioVideoEnum>|null $ctype
     * @param list<ExpandableDirectionEnum>|null $overlayexpdir
     */
    public function __construct(
        public array $mime,
        public int|null $h = null,
        public int|null $w = null,
        public int|null $boxing = 1,
        public int|null $maxext = 0,
        public int|null $skip = null,
        public array|null $api = null,
        public int|null $podid = null,
        public array|null $comp = null,
        public int|null $maxdur = null,
        public int|null $maxseq = null,
        public int|null $mindur = null,
        public int|null $poddur = null,
        public int|null $skipafter = 0,
        public array|null $ctype = null,
        public int|null $maxbitr = null,
        public int|null $minbitr = null,
        public int|null $skipmin = null,
        public array|null $expdir = null,
        public array|null $rqddurs = null,
        public array|null $comptype = null,
        public array|null $delivery = null,
        public array|null $playmethod = null,
        public float|null $mincpmpersec = null,
        public array|null $overlayexpdir = null,
        public ClickTypeEnum|null $clktype = null,
        public LinearityModeEnum|null $linear = null,
        public StartDelayModeEnum|null $delay = null,
        public PlacementPositionEnum|null $pos = null,
        public PlcmtSubtypeVideoEnum|null $ptype = null,
        public SizeUnitEnum|null $unit = SizeUnitEnum::DIPS,
        public PlaybackCessationModeEnum|null $playend = null,
        public PodSequenceEnum|null $podseq = PodSequenceEnum::ANY_POD,
        public SlotPositionPodEnum|null $slotinpod = SlotPositionPodEnum::ANY,
        public mixed $ext = null,
    ) {
    }
}
