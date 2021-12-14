<?php
/**
 * Social Share plugin for Craft CMS 3.x
 *
 * Social Share
 * 
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\socialshare\services;
use Craft;
use craft\base\Component;
use ds\socialshare\Socialshare;
use ds\socialshare\resources\SocialshareAsset;


/**
 * Social Share Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Dotsquares
 */


class SocialService extends  Component

{
   
    // Public Methods
    // =========================================================================

    public function socialshare($fb=null, $insta=null, $linkdin=null, $twi=null, $pin=null ){
       
      //Register Asset Bundle

        $view = Craft::$app->getView();
        $view->registerAssetBundle(SocialshareAsset::class);

        // Get Plugin Settings
        
        $settings = Socialshare::getInstance()->getSettings();
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  
        $fb= $settings->getFacebook();
        $Reddit=  $settings->getInstagram();
        $Linkedin=  $settings->getLinkedin();
        $Twitter = $settings->getTwitter();
        $Pinterest= $settings->getPinterest();
        echo "<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
        integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
       ";

echo "<div class='left_icons'>";
        if($fb == 1){

           echo '<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u='. $actual_link .'" target="_blank"><i class="fab fa-facebook-f"></i></a>';


        }

        if($Reddit == 1){

            echo '<a class="reddit" href="http://reddit.com/submit?url'. $actual_link .'" target="_blank"><i class="fab fa-reddit-alien" ></i>
            </a>';
 
 
        
         }
         if($Linkedin == 1){

            echo '<a class="linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url='. $actual_link .'" target="_blank">
            <i class="fab fa-linkedin"></i></a>';
 
 
        
         }
         if($Twitter == 1){

            echo '<a class="twitter" href="http://twitter.com/share?url='. $actual_link .'" target="_blank">
            <i class="fab fa-twitter"></i></a>';
 
        
         }

         if($Pinterest == 1){

            echo '<a class="pinterest" href="http://pinterest.com/pin/create/link/?url='. $actual_link .'" target="_blank">
            <i class="fab fa-pinterest"></i></a>';
 
 
        
         }

         

        
        
     echo"</div>" ;
}

}
     

