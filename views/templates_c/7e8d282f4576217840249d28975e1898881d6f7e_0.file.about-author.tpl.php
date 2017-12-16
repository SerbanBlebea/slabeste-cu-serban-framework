<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-16 12:13:03
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\partials\about-author.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a350dcf322839_77259249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e8d282f4576217840249d28975e1898881d6f7e' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\partials\\about-author.tpl',
      1 => 1513426379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/banner-as-seen-on.tpl' => 1,
  ),
),false)) {
function content_5a350dcf322839_77259249 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row container-content">
    <h3 class="col mb-4 text-center">Cine este Serban si de ce ar trebui sa ii urmezi sfaturile?</h3>
    <div class="row align-v-center">
        <div class="col-md-8">
            <p>Numele meu este Serban Blebea, iar misiunea mea este sa <strong>ajut femeile din Romania sa piarda centimetri in plus</strong> si sa isi tonifieze talia, soldurile si posteriorul <strong>prin antrenamente inteligent</strong>, fara diete stricte si <strong>fara infometare</strong>.</p>
            <p>Timp de 7 ani de zile am lucrat ca antrenor personal la unele dintre cele mai mari sali de fitness din Bucuresti printre care si WorldClass si am avut oportunitatea sa ajut sute de persoane sa obtina corpul dorit fara sacrificiile asociate cu acest proces (diete stricte, pastile minune sau infometare)</p>
            <p>In 2013 am inceput am pus bazele site-ului <strong>Slabeste Cu Serban</strong> si am scris sute de articole in revistele de specialitate, cum ar fi Cosmopolitan, Ce se intampla doctore? si Slab sau Gras.</p>
        </div>
        <div class="col-md-4 align-h-center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['app_path']->value;?>
/img/landing-page/author-circle.png" />
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value == "true") {?>
        <?php $_smarty_tpl->_subTemplateRender("file:partials/banner-as-seen-on.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
</div>
<?php }
}