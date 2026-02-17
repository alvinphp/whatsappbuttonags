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

// Obtener el documento actual
$doc = Factory::getApplication()->getDocument();

// Registrar y cargar tus assets (CSS y JS)
$baseUrl = Uri::base() . 'modules/mod_whatsappbuttonags/assets/';

$doc->addStyleSheet($baseUrl . 'css/floating-wpp.min.css');
$doc->addStyleSheet($baseUrl . 'css/custom.css');
$doc->addScript($baseUrl . 'js/floating-wpp.min.js');

// Cargar la vista (tmpl/default.php)
require ModuleHelper::getLayoutPath('mod_whatsappbuttonags', $params->get('layout', 'default'));
