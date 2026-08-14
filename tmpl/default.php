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
$position     = $params->get('side', 'right');
$msg_holder   = $params->get('message_placeholder', 'Your message to send!');
?>

<div class="floating-wpp"></div>

<!-- libreria jquery -->
<script>
jQuery(function($){
    $('.floating-wpp').floatingWhatsApp({
            phone: '<?php echo $phone;?>',
            showPopup: false,
            position: '<?php echo $position;?>',
            message: '<?php echo $msg_holder;?>'
            
    });
    
});
</script>

