<?php
/* Smarty version 3.1.31, created on 2018-08-16 09:03:46
  from "D:\sync\websvr\xampp\formbuilder\formtools\themes\default\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b7521d2392e64_01025945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aefa48718d56ae8818cc5fca49493413409c6cf2' => 
    array (
      0 => 'D:\\sync\\websvr\\xampp\\formbuilder\\formtools\\themes\\default\\footer.tpl',
      1 => 1534170620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7521d2392e64_01025945 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once 'D:\\sync\\websvr\\xampp\\formbuilder\\formtools\\global\\smarty_plugins\\function.show_page_load_time.php';
?>

      </div>
    </td>
  </tr>
  </table>

</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div class="footer">
    <?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
