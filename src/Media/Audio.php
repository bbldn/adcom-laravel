<?php

namespace BBLDN\AdCOMLaravel\Media;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\ApiFrameworkEnum;
use BBLDN\AdCOMLaravel\Enum\CreativeSubtypeAudioVideoEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--audio-
 */
class Audio extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $dur Duration of the audio creative in seconds.
     * @param string|null $adm Audio markup (e.g., DAAST). Note that including both adm and curl is not recommended.
     * @param string|null $curl Optional means of retrieving markup by reference; a URL that returns audio markup (e.g., DAAST). If this ad is matched to a Placement specification, the Placement.curlx attribute indicates if this markup retrieval option is supported. Note that including both adm and curl is not recommended.
     * @param list<string>|null $mime Mime type(s) of the ad creative(s) (e.g., "audio/mp4").
     * @param list<ApiFrameworkEnum>|null $api API required by the ad if applicable. Refer to List: API Frameworks.
     * @param CreativeSubtypeAudioVideoEnum|null $ctype Subtype of audio creative. Refer to List: Creative Subtypes - Audio/Video.
     */
    public function __construct(
        public int|null $dur = null,
        public array|null $api = null,
        public array|null $mime = null,
        public string|null $adm = null,
        public string|null $curl = null,
        public CreativeSubtypeAudioVideoEnum|null $ctype = null,
        public mixed $ext = null,
    ) {
    }
}
