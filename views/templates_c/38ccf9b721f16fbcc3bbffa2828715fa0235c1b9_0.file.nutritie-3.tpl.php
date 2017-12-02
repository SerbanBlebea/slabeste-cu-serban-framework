<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-12-02 19:25:40
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\programs\talie-mai-subtire\nutritie-3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a22fe34881f80_82589404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ccf9b721f16fbcc3bbffa2828715fa0235c1b9' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\programs\\talie-mai-subtire\\nutritie-3.tpl',
      1 => 1512242732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/download-card.tpl' => 2,
  ),
),false)) {
function content_5a22fe34881f80_82589404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15105885585a22fe3486e996_60244437', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/membership/membership_layout.tpl');
}
/* {block "body"} */
class Block_15105885585a22fe3486e996_60244437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15105885585a22fe3486e996_60244437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="jumbotron">
            <div class="program-section">
                <h1 class="display-3">Nutritie Saptamana 3</h1>
                <p class="lead">"Carnea de vita tocata se amesteca cu ceapa, ciupercile si..."</p>
                <hr class="my-4">

                <div class="text-section">
                    <p>Descarca planul de alimentatie si lista de cumparaturi pentru a III-a saptamana din cadrul programului Talie Mai Subtire.</p>
                    <p>Chiar daca aceasta este ultima saptamana din cadrul programului, iti recomand sa mananci in continuare sanatos. Transformarea corporala este un proces pe termen lung si pentru a mentine rezultatele obtinute ai nevoie sa fii consecventa.</p>
                    <p>In plus, beneficiile sportului si ale unei alimentatii sanatoase le vei resimti si peste 10-20 de ani de acum incolo, in termeni de sanatate si bunastare fizica si emotionala.</p>
                    <p>Nu uita sa verifici si <a href="http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Retete-Delicioase.pdf" style="color: blue;">Ghidul Retetelor (click aici pentru a il descarca)</a> pentru a iti pregati mesele indicate in planul alimentar</p>
                </div>

                <?php $_smarty_tpl->_subTemplateRender("file:partials/download-card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Ghidul de alimentatie saptamana 3",'text'=>"Apasa pe butonul de mai jos pentru a descarca ghidul de alimentatie pentru saptamana 3.",'button_text'=>"Descarca",'download_link'=>"http://www.slabestecuserban.ro/wp-content/uploads/2016/07/PLAN-DE-ALIMENTATIE-SAPTAMANA-III.pdf",'image_link'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/talie-mai-subtire/nutritie-saptamana-3.png"), 0, false);
?>


                <?php $_smarty_tpl->_subTemplateRender("file:partials/download-card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Lista de alimente pentru saptamana 3",'text'=>"Apasa pe butonul de mai jos si descarca lista de cumparaturi sanatoase pentru saptamana 3.",'button_text'=>"Descarca",'download_link'=>"http://www.slabestecuserban.ro/wp-content/uploads/2016/07/Lista-de-cumparaturi_saptamana-III_Talie-Mai-Subtire.pdf",'image_link'=>((string)$_smarty_tpl->tpl_vars['app_path']->value)."/img/talie-mai-subtire/cumparaturi-saptamana-3.png"), 0, true);
?>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
