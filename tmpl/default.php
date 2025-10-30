<?php
/**
 * @package     https://github.com/alvinphp
 * @subpackage  mod_whatsappbuttonags
 * @author      Alvin Gil
 * @license     GNU General Public License v2 or later
 */

defined('_JEXEC') or die;
use Joomla\CMS\Factory;

// Cargar jQuery
$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
$wa->useScript('jquery');

// Obtener parámetros
$phone        = $params->get('phone', '');
$message      = $params->get('message', 'Welcome To jQueryScript.Net');
$position     = $params->get('side', 'right');
$showpop      = $params->get('showpop', 1) ? 'true' : 'false';
$header_color = $params->get('Header_color', '#128C7E');
$msg_holder   = $params->get('message_placeholder', 'Your message to send!');
$msg_header   = $params->get('titulo_encabezado', 'jQuery Floating WhatsApp');

?>

<style>
 .floating-wpp {
  position: fixed;
  bottom: 20px;
  z-index: 9999;
}

.floating-wpp .floating-wpp-message {
 color: black;
}


</style>


<div class="floating-wpp"></div>

<!-- libreria jquery -->
<script>
jQuery(function($){
    $('.floating-wpp').floatingWhatsApp({
            phone: '<?php echo $phone;?>',
            popupMessage: '<?php echo $message;?>',
            showPopup: <?php echo $showpop;?>,
            headerColor: '<?php echo $header_color;?>',
            position: '<?php echo $position;?>',
            //autoOpen: false,
            //autoOpenTimer: 4000,
            message: '<?php echo $msg_holder;?>',
            //headerColor: 'orange',
            headerTitle: '<?php echo $msg_header;?>'
    });
    
});
</script>

