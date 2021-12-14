<?php


/**
 * Social Share plugin for Craft CMS 3.x
 *
 * Social Share
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */

namespace ds\socialshare;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use ds\socialshare\models\Settings;
use ds\socialshare\services\SocialService;
use craft\web\twig\variables\CraftVariable;
use ds\socialshare\variables\dssocialshare;
use yii\base\Event;



class Socialshare extends Plugin 

{
    public $hasCpSettings = true;
	public static $plugin;
    
    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
         self::$plugin = $this;
         
        // Register our service

        $this->setComponents([
            'SocialService' =>  services\SocialService::class,
        ]);

        
        // Register our variable
        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                //handle name                             //classname
                $variable->set('dssocialshare', variables\DssocialshareVariable::class);
            }
        );


        Craft::info(
            Craft::t(
                'dssocialshare',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

     // Protected Methods
    // =========================================================================
        protected function createSettingsModel()
        {
            return new Settings();
        }
    
    
            // Get the settings that are being defined by template
    
        protected function settingsHtml()
        {
            return \Craft::$app->getView()->renderTemplate(
                // Plugin handle name/settings
                'dssocialshare/settings',
                [ 'settings' => $this->getSettings() ]
            );

        } 
    





}

?>
