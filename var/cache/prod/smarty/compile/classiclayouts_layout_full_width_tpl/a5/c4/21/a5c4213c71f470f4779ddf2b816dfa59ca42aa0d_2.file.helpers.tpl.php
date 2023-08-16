<?php
/* Smarty version 4.3.1, created on 2023-08-16 00:26:39
  from '/home4/digit554/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64dc5e0f7232a6_62882220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5c4213c71f470f4779ddf2b816dfa59ca42aa0d' => 
    array (
      0 => '/home4/digit554/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64dc5e0f7232a6_62882220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home4/digit554/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/a5/c4/21/a5c4213c71f470f4779ddf2b816dfa59ca42aa0d_2.file.helpers.tpl.php',
    'uid' => 'a5c4213c71f470f4779ddf2b816dfa59ca42aa0d',
    'call_name' => 'smarty_template_function_renderLogo_80766106364dc5e0f71b656_88754390',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_80766106364dc5e0f71b656_88754390 */
if (!function_exists('smarty_template_function_renderLogo_80766106364dc5e0f71b656_88754390')) {
function smarty_template_function_renderLogo_80766106364dc5e0f71b656_88754390(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_80766106364dc5e0f71b656_88754390 */
}
