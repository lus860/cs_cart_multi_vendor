<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:33:26
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/discussion/hooks/companies/data_block.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f13d60787b3_79922350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '817ede74239c993e9e6a36012ed9b66a36f0a560' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/discussion/hooks/companies/data_block.pre.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
  ),
),false)) {
function content_666f13d60787b3_79922350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('reviews','reviews'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_rating']->value && in_array($_smarty_tpl->tpl_vars['addons']->value['discussion']['company_discussion_type'],array('B','R'))) {?>

    <?php if ($_smarty_tpl->tpl_vars['company']->value['average_rating']) {?>
        <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['company']->value['average_rating']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']) {?>
        <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'link'=>"companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion",'link_target'=>"url"), 0, false);
?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count'] && (($tmp = $_smarty_tpl->tpl_vars['show_posts_count']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion"), ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-quantity"><?php } else { ?><p><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count']));
if ($_smarty_tpl->tpl_vars['show_links']->value) {?></a><?php } else { ?></p><?php }?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/data_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/data_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_rating']->value && in_array($_smarty_tpl->tpl_vars['addons']->value['discussion']['company_discussion_type'],array('B','R'))) {?>

    <?php if ($_smarty_tpl->tpl_vars['company']->value['average_rating']) {?>
        <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['company']->value['average_rating']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']) {?>
        <?php $_smarty_tpl->_assignInScope('average_rating', $_smarty_tpl->tpl_vars['company']->value['discussion']['average_rating']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['average_rating']->value > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'link'=>"companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion",'link_target'=>"url"), 0, true);
?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count'] && (($tmp = $_smarty_tpl->tpl_vars['show_posts_count']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
        <?php if ($_smarty_tpl->tpl_vars['show_links']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])."&selected_section=discussion#discussion"), ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-quantity"><?php } else { ?><p><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['company']->value['discussion']['posts_count']));
if ($_smarty_tpl->tpl_vars['show_links']->value) {?></a><?php } else { ?></p><?php }?>
    <?php }
}
}
}
}
