<?php


/**
 * Social Share  plugin for Craft CMS 3.x
 *
 * Social Share
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */

namespace ds\socialshare\models;
use ds\socialshare\Socialshare;


use Craft;
use craft\base\Model;


/**
 * Social Share Model
 * 
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 
 */


class Settings extends Model
{
   // Public Properties
    // =========================================================================

    public $Fb = '';
    public $Instagram = '';
    public $Linkedin  = '';
    public $Twitter = '';
    public $Pintereset ="";

    // Returns the validation rules for attributes.

    
    public function getFacebook()
    {
        return Craft::parseEnv(trim(Socialshare::getInstance()->getSettings()->Fb));
    }
   
    public function getInstagram()
    {
        return Craft::parseEnv(trim(Socialshare::getInstance()->getSettings()->Instagram));
    }

    public function getLinkedin()
    {
        return Craft::parseEnv(trim(Socialshare::getInstance()->getSettings()->Linkedin));
    }
   
    public function getTwitter()
    {
        return Craft::parseEnv(trim(Socialshare::getInstance()->getSettings()->Twitter));
    }
    public function getPinterest()
    {
        return Craft::parseEnv(trim(Socialshare::getInstance()->getSettings()->Pintereset));
    }

    
}