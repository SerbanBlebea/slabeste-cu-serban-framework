<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-03 16:29:30
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\landing-testimonial-left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a24266aa0c8c2_47307265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cb08bcb63c487735e4a0a9b3b546030c8ef6cd1' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\landing-testimonial-left.tpl',
      1 => 1512318547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a24266aa0c8c2_47307265 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row p-2">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <img class="testimonial-image" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="Generic placeholder image">
    </div>
    <div class="col-md-9 col-sm-6 col-xs-12">
        <div class="media-body">
            <h5 class="mt-0"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h5>
            <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
        </div>
    </div>
</div>
<?php }
}