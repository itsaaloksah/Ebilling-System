<?php
/* Smarty version 3.1.39, created on 2023-09-08 13:07:55
  from 'C:\xampp\htdocs\ebilling\ui\theme\ibilling\util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64facbcfbc9804_84931988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e960c48aefd18a1b013ecd7132cfcc8212859284' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ebilling\\ui\\theme\\ibilling\\util_integrationcode.tpl',
      1 => 1630429206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64facbcfbc9804_84931988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75162181564facbcfbc4a50_90602711', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_75162181564facbcfbc4a50_90602711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_75162181564facbcfbc4a50_90602711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</h5>

                </div>
                <div class="ibox-content">
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</h4>
                    <pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_login']->value;?>
</code></pre>
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
</h4>
                    <pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_register']->value;?>
</code></pre>

                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
