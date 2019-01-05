<?php
/* Smarty version 3.1.31, created on 2018-08-16 09:13:33
  from "D:\sync\websvr\xampp\formbuilder\formtools\themes\default\admin\forms\edit\tab_edit_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b75241d67f688_48087583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '813fa33f9d1580c34498957e6b7490111a87984c' => 
    array (
      0 => 'D:\\sync\\websvr\\xampp\\formbuilder\\formtools\\themes\\default\\admin\\forms\\edit\\tab_edit_view.tpl',
      1 => 1534170618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b75241d67f688_48087583 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once 'D:\\sync\\websvr\\xampp\\formbuilder\\formtools\\global\\smarty_plugins\\function.ft_include.php';
?>
    <div class="previous_page_icon">
      <a href="?page=views"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/up.jpg" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" border="0" /></a>
    </div>

    <div class="underline margin_top_large">
      <div style="float:right; padding-right: 20px; margin-top: -4px;"><?php echo $_smarty_tpl->tpl_vars['previous_view_link']->value;?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['next_view_link']->value;?>
</div>
      <span class="subtitle"><a href="?page=views"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_views'], 'UTF-8');?>
</a></span> &raquo; <span><?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_name'];?>
</span>
    </div>

    <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


    <form method="post" id="edit_view_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return view_ns.process_form(this)">
      <input type="hidden" name="view_id" value="<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
" />

      <div class="inner_tabset" id="edit_view">
        <div class="tab_row fiveCols">
          <div class="inner_tab1<?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value == 1) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_general'];?>
</div>
          <div class="inner_tab2<?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value == 2) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_columns'];?>
</div>
          <div class="inner_tab3<?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value == 3) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_fields'];?>
</div>
          <div class="inner_tab4<?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value == 4) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_tabs'];?>
</div>
          <div class="inner_tab5<?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value == 5) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_filters'];?>
</div>
        </div>
        <div class="inner_tab_content">
          <div class="inner_tab_content1" <?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value != 1) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_view__main.tpl"),$_smarty_tpl);?>

          </div>
          <div class="inner_tab_content2" <?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value != 2) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_view__list_page.tpl"),$_smarty_tpl);?>

          </div>
          <div class="inner_tab_content3" <?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value != 3) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_view__fields.tpl"),$_smarty_tpl);?>

          </div>
          <div class="inner_tab_content4" <?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value != 4) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_view__tabs.tpl"),$_smarty_tpl);?>

          </div>
          <div class="inner_tab_content5" <?php if ($_smarty_tpl->tpl_vars['edit_view_tab']->value != 5) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_view__filters.tpl"),$_smarty_tpl);?>

          </div>
        </div>
      </div>

      <p>
        <input type="submit" name="update_view" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_update_view'];?>
" />
      </p>
    </form>
<?php }
}
