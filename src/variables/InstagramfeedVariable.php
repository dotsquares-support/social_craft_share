<?php

namespace ds\socialshare\variables;

use ds\socialshare\Socialshare;


use Craft;

class SocialshareVariable
{
    public function getFeed()
    {
        return Feedplugin::getInstance()->FeedService->instafeed();
    }

}
