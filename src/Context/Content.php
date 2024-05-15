<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;
use BBLDN\AdCOMLaravel\Enum\MediaRatingEnum;
use BBLDN\AdCOMLaravel\Enum\ContentContextEnum;
use BBLDN\AdCOMLaravel\Enum\CategoryTaxonomyEnum;
use BBLDN\AdCOMLaravel\Enum\ProductionQualityEnum;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--content-
 */
class Content extends LaravelData
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $len Length of content in seconds; typically for video or audio.
     * @param int|null $live Indication of live content, where 0 = not live, 1 = live (e.g., stream, live blog).
     * @param int|null $embed Indicator of whether or not the content is embedded off-site from the the site or app described in those objects (e.g., an embedded video player), where 0 = no, 1 = yes.
     * @param string|null $id ID uniquely identifying the content.
     * @param int|null $srcrel Source relationship, where 0 = indirect, 1 = direct.
     * @param string|null $url A single URL of the content, for buy-side contextualization or review.
     * @param int|null $episode Episode number.
     * @param string|null $isrc International Standard Recording Code conforming to ISO-3901.
     * @param string|null $lang Content language using ISO-639-1-alpha-2. Only one of lang or langb should be present.
     * @param string|null $album Album to which the content belongs; typically for audio.
     * @param string|null $genre Genre that best describes the content (e.g., rock, pop, etc).
     * @param string|null $langb Content language using IETF BCP 47. Only one of lang or langb should be present.
     * @param string|null $title Content title. Video Examples: "Search Committee" (television), "Star Wars, A New Hope" (movie), or "Endgame" (made for web). Non-Video Example: "Why an Antarctic Glacier Is Melting So Quickly" (Time magazine article).
     * @param string|null $artist Artist credited with the content.
     * @param string|null $rating Content rating (e.g., MPAA).
     * @param string|null $season Content season (e.g., "Season 3").
     * @param string|null $series Content series. Video Examples: "The Office" (television), "Star Wars" (movie), or "Arby 'N' The Chief" (made for web). Non-Video Example: "Ecocentric" (Time Magazine blog).
     * @param string|null $urating User rating of the content (e.g., number of stars, likes, etc.).
     * @param Channel|null $channel Details about the channel. Refer to Object: Channel.
     * @param Network|null $network Details about the network. Refer to Object: Network.
     * @param list<Data>|null $data Additional user data. Each Data object represents a different data source. Refer to Object: Data.
     * @param string|null $keywords Comma-separated list of keywords describing the content. Only one of 'keywords' or 'kwarray' may be present. NOTE: this field is deprecated, use 'kwarray' instead.
     * @param list<string>|null $cat Array of content categories describing the content using IDs from the taxonomy indicated in cattax. Implementer should ensure compliance with regional legislation around data usage and sharing.
     * @param Producer|null $producer Details about the content producer. Refer to Object: Producer.
     * @param list<string>|null $kwarray Array of keywords describing the content. Only one of 'keywords' or 'kwarray' may be present.
     * @param MediaRatingEnum|null $mrating Media rating per IQG guidelines. Refer to List: Media Ratings.
     * @param ContentContextEnum|null $context Type of content (game, video, text, etc.). Refer to List: Content Contexts.
     * @param CategoryTaxonomyEnum|null $cattax The taxonomy in use for the cat attribute. Refer to List: Category Taxonomies.
     * @param ProductionQualityEnum|null $prodq Production quality. Refer to List: Production Qualities.
     */
    public function __construct(
        public int|null $len = null,
        public int|null $live = null,
        public array|null $cat = null,
        public int|null $embed = null,
        public string|null $id = null,
        public array|null $data = null,
        public int|null $srcrel = null,
        public string|null $url = null,
        public int|null $episode = null,
        public string|null $isrc = null,
        public string|null $lang = null,
        public string|null $album = null,
        public string|null $genre = null,
        public string|null $langb = null,
        public string|null $title = null,
        public array|null $kwarray = null,
        public string|null $artist = null,
        public string|null $rating = null,
        public string|null $season = null,
        public string|null $series = null,
        public string|null $urating = null,
        public Channel|null $channel = null,
        public Network|null $network = null,
        public string|null $keywords = null,
        public Producer|null $producer = null,
        public MediaRatingEnum|null $mrating = null,
        public ContentContextEnum|null $context = null,
        public CategoryTaxonomyEnum|null $cattax = null,
        public ProductionQualityEnum|null $prodq = null,
        public mixed $ext = null,
    ) {
    }
}
