<?php
/**
 * @package     https://github.com/alvinphp
 * @subpackage  mod_whatsappbuttonags
 * @author      Alvin Gil
 * @license     GNU General Public License v2 or later
 */

defined('_JEXEC') or die;
// llamando clase
require_once dirname(__DIR__) . '/lib/lib.php';
LoadScript::loadJquery();

// Obtener parámetros
$phone        = $params->get('phone', '');
$message      = $params->get('message', 'Welcome To jQueryScript.Net');
$position     = $params->get('side', 'right');
$showpop      = $params->get('showpop', 1) ? 'true' : 'false';
$header_color = $params->get('Header_color', '#128C7E');
$msg_holder   = $params->get('message_placeholder', 'Your message to send!');
$msg_header   = $params->get('titulo_encabezado', 'jQuery Floating WhatsApp');

?>

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

