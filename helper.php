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

// clase que contiene funciones para validar las versiones 

class WhatsAppButtonModule
{
	public static function isCompatible($min = '4.0')
	{
		$version = new Version();
		return version_compare($version->getShortVersion(), $min, '>=');
	}

	public static function loadassets()
	{
		if (!self::isCompatible('4.0')) {
			return;
		}

		$doc = Factory::getApplication()->getDocument();

    // Registrar y cargar tus assets (CSS y JS)
		$baseUrl = Uri::base() . 'modules/mod_whatsappbuttonags/assets/';

		$doc->addStyleSheet($baseUrl . 'css/floating-wpp.min.css');
		$doc->addStyleSheet($baseUrl . 'css/custom.css');
		$doc->addScript($baseUrl . 'js/floating-wpp.min.js');
	}

}
	
