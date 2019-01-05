<?php
/* Smarty version 3.1.31, created on 2018-08-16 09:17:11
  from "D:\sync\websvr\xampp\formbuilder\formtools\themes\default\admin\forms\option_lists\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b7524f7cca6c1_13603716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7adc691aa0229af28470bebcfd6d56664595b9' => 
    array (
      0 => 'D:\\sync\\websvr\\xampp\\formbuilder\\formtools\\themes\\default\\admin\\forms\\option_lists\\edit.tpl',
      1 => 1534170618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7524f7cca6c1_13603716 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once 'D:\\sync\\websvr\\xampp\\formbuilder\\formtools\\global\\smarty_plugins\\function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_option_lists.gif" width="34" height="34" border="0" /></a></td>
    <td class="title">
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_option_lists'];?>
</a> <span class="joiner">&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['list_info']->value['option_list_name'];?>

    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/forms/option_lists/tab_main.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "form_fields") {?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/forms/option_lists/tab_form_fields.tpl'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smarty_function_ft_include(array('file'=>'admin/forms/option_lists/tab_main.tpl'),$_smarty_tpl);?>

    <?php }?>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);
}
}
