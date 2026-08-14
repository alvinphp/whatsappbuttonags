<?php 
/**
 * @package     https://github.com/alvinphp
 * @subpackage  mod_whatsappbuttonags
 * @author      Alvin Gil
 * @license     GNU General Public License v2 or later
 */
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Version;
use Joomla\CMS\HTML\HTMLHelper;

// clase que contiene funciones para validar las versiones 

class WhatsAppButtonModule
{
	// comprueba si la version el 4 o superior 
	public static function isCompatible($min = '4.0')
	{
		$version = new Version();
		return version_compare($version->getShortVersion(), $min, '>=');
	}
    // si la version en inferior se detiene
	public static function loadassets()
	{
		if (!self::isCompatible('4.0')) {
			return;
		}

		$doc = Factory::getApplication()->getDocument();

        // Registrar y cargar tus assets (CSS y JS)
		$baseUrl = Uri::base() . 'modules/mod_whatsappbuttonags/assets/';
		// registrando las hojas estilo
		$wa = $doc->getWebAssetManager();
		$wa->registerAndUseStyle('mod_whatsappbuttonags.floating-wpp',$baseUrl.
	    'css/floating-wpp.min.css');
	    $wa->registerAndUseScript('mod_whatsappbuttonags.floating-wpp',$baseUrl.
	    'js/floating-wpp.min.js',['jquery'],[],[]);

	}

}
	
