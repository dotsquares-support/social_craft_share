<?php

/**
 * Social Share plugin for Craft CMS 3.x
 *
 * Social Share
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\socialshare\variables;

use ds\socialshare\Socialshare;


use Craft;


class DssocialshareVariable

    // Public Methods
    // =========================================================================
     /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.dssocialshare.getSocial() }}
     *  */
{
    public function getSocial()
    {
        return Socialshare::getInstance()->SocialService->socialshare();
    }

}
