<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-02 19:25:48
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\nutritie-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a22fe3c72ac01_43853075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284b7bbe63d9bae2a60e41ec4fe1a677aff7040d' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\nutritie-1.tpl',
      1 => 1512242376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/download-card.tpl' => 2,
  ),
),false)) {
function content_5a22fe3c72ac01_43853075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1065281145a22fe3c7143d0_39435518', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_1065281145a22fe3c7143d0_39435518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1065281145a22fe3c7143d0_39435518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Nutritie Saptamana 1</h1>
                <p class="lead">"Dupa aceea coacem totul la foc mic..."</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Descarca planul de alimentatie si lista de cumparaturi pentru prima saptamana. Iti recomand sa iti planifici mesele in avans pentru a te asigura ca nu iei decizii eronate in privinta alimentatiei, atunci cand esti obosita sau stresata si cand autocontroul tau este scazut.</p>
                    <p>Nu uita sa verifici si <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor (click aici pentru a il descarca)</a> pentru a iti pregati mesele indicate in planul alimentar</p>
                </div>

                <?php $_smarty_tpl->_subTemplateRender("file:partials/download-card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Ghidul de alimentatie saptamana 1",'text'=>"Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 1.",'button_text'=>"Descarca",'download_link'=>"http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-I.pdf",'image_link'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/talie-mai-subtire/nutritie-saptamana-1.png"), 0, false);
?>


                <?php $_smarty_tpl->_subTemplateRender("file:partials/download-card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Lista de alimente pentru saptamana 1",'text'=>"Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 1.",'button_text'=>"Descarca",'download_link'=>"http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-I_Talie-Mai-subtire.pdf",'image_link'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/talie-mai-subtire/cumparaturi-saptamana-1.png"), 0, true);
?>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
