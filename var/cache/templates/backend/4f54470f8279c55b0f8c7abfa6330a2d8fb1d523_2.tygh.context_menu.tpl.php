<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:33:25
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/components/context_menu/context_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f21e587b484_50355367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f54470f8279c55b0f8c7abfa6330a2d8fb1d523' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/components/context_menu/context_menu.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f21e587b484_50355367 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bulk-edit clearfix hidden <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
     <?php if ($_smarty_tpl->tpl_vars['context_menu_items']->value) {?>
         data-ca-bulkedit-expanded-object="true"
         data-ca-bulkedit-component="expandedObject"
     <?php } else { ?>
         data-ca-bulkedit-disabled="true"
     <?php }?>
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['status_selector']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('statuses'=>$_smarty_tpl->tpl_vars['status_selector']->value->getStatuses(),'elms_container'=>$_smarty_tpl->tpl_vars['context_menu_id']->value), 0, true);
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['context_menu_items']->value, 'item', false, 'item_id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['item']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item'=>$_smarty_tpl->tpl_vars['item']->value,'data'=>$_smarty_tpl->tpl_vars['item']->value->getData()), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

</div>
<?php }
}
