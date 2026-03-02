<?php
/**
 * @package     https://github.com/alvinphp
 * @subpackage  mod_whatsappbuttonags
 * @author      Alvin Gil
 * @license     GNU General Public License v2 or later
 */
defined('_JEXEC') or die;
use Joomla\CMS\Factory;

class LoadScript
{
    public static function loadJquery()
    {    
        // llamando helper
        $helperPath = __DIR__ . '/helper.php';
        if (file_exists($helperPath )) {
            require_once $helperPath;
        }
        // llamando clase de helper que contiene metodo de compatibilidad 
        if (class_exists('WhatsAppButtonHelper') && WhatsAppButtonHelper::isCompatible('4.0')) {
            $app = Factory::getApplication();
            $doc = $app->getDocument();

            if (method_exists($doc, 'getWebAssetManager')) {
                $wa = $doc->getWebAssetManager();
                $wa->useScript('jquery');
            }
        }
        
        
    }
}