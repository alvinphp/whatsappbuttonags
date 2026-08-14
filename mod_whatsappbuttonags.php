<?php
/**
 * @package     https://github.com/alvinphp
 * @subpackage  mod_whatsappbuttonags
 * @author      Alvin Gil
 * @license     GNU General Public License v2 or later
 */

defined('_JEXEC') or die;
use Joomla\CMS\Helper\ModuleHelper;
// cargando la clase helper.php
require_once __DIR__ . '/helper.php';
WhatsAppButtonModule::loadassets();

// Cargar la vista (tmpl/default.php)
require ModuleHelper::getLayoutPath('mod_whatsappbuttonags', $params->get('layout', 'default'));