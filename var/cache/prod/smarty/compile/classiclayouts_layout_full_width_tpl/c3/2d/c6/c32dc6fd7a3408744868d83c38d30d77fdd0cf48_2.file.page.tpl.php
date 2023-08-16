<?php
/* Smarty version 4.3.1, created on 2023-08-16 00:26:39
  from '/home4/digit554/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64dc5e0f701043_18928805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32dc6fd7a3408744868d83c38d30d77fdd0cf48' => 
    array (
      0 => '/home4/digit554/public_html/themes/classic/templates/page.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64dc5e0f701043_18928805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40995117564dc5e0f6fd039_75432121', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_172310990064dc5e0f6fd7c8_83173731 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_62592054764dc5e0f6fd3b7_15192079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172310990064dc5e0f6fd7c8_83173731', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_186535671864dc5e0f6ff8a7_09387259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_28780589764dc5e0f6ffe23_36402407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_202134644364dc5e0f6ff556_60960480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186535671864dc5e0f6ff8a7_09387259', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28780589764dc5e0f6ffe23_36402407', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15903093564dc5e0f7007d0_80006903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_38840813864dc5e0f700512_02155125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15903093564dc5e0f7007d0_80006903', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_40995117564dc5e0f6fd039_75432121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_40995117564dc5e0f6fd039_75432121',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_62592054764dc5e0f6fd3b7_15192079',
  ),
  'page_title' => 
  array (
    0 => 'Block_172310990064dc5e0f6fd7c8_83173731',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_202134644364dc5e0f6ff556_60960480',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_186535671864dc5e0f6ff8a7_09387259',
  ),
  'page_content' => 
  array (
    0 => 'Block_28780589764dc5e0f6ffe23_36402407',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_38840813864dc5e0f700512_02155125',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15903093564dc5e0f7007d0_80006903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62592054764dc5e0f6fd3b7_15192079', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202134644364dc5e0f6ff556_60960480', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38840813864dc5e0f700512_02155125', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
