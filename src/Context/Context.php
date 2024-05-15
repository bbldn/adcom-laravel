<?php

namespace BBLDN\AdCOMLaravel\Context;

use Spatie\LaravelData\Data as LaravelData;

class Context extends LaravelData
{
    /**
     * @param App|null $app This object is used to define an ad supported non-browser application, in contrast to a typical website, example. As a derived class, an App object inherits all DistributionChannel attributes and adds those defined below.
     * @param Dooh|null $dooh This object is used to define an ad supported digital out-of-home (DOOH) experience such as a public kiosk or digital billboard. As a derived class, a Dooh object inherits all DistributionChannel attributes and adds those defined below.
     * @param Regs|null $regs This object contains any known legal, governmental, or industry regulations that are in effect.
     * @param Site|null $site This object is used to define an ad supported website, in contrast to a non-browser application, for example. As a derived class, a Site object inherits all DistributionChannel attributes and adds those defined below.
     * @param User|null $user This object contains information known or derived about the human user of the device (i.e., the audience for advertising). The user ID is a vendor-specific artifact and may be subject to rotation or other privacy policies. However, this user ID must be stable long enough to serve reasonably as the basis for frequency capping and retargeting.
     * @param Device|null $device This object provides information pertaining to the device through which the user is interacting. Device information includes its hardware, platform, location, and carrier data. The device can refer to a mobile handset, a desktop computer, set top box, or other digital device.
     * @param Restrictions|null $restrictions This object allows lists of restrictions on ad responses to be specified including specific content categories, advertisers, ads pertaining to specific apps, or creative attributes.
     */
    public function __construct(
        public App|null $app = null,
        public Dooh|null $dooh = null,
        public Regs|null $regs = null,
        public Site|null $site = null,
        public User|null $user = null,
        public Device|null $device = null,
        public Restrictions|null $restrictions = null,
    ) {
    }
}
