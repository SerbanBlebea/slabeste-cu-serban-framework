<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-11-05 15:38:21
  from "C:\Laragon\www\slabeste-cu-serban\slabeste-cu-serban-framework\views\templates\layouts\checkout_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59ff306d0d3581_18202731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfbacbc6720df3ece1ac98b5e17d491155f31e0' => 
    array (
      0 => 'C:\\Laragon\\www\\slabeste-cu-serban\\slabeste-cu-serban-framework\\views\\templates\\layouts\\checkout_layout.tpl',
      1 => 1509896297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff306d0d3581_18202731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://unpkg.com/popper.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <style>
            .nav {
                background-color: #e5e5e5;
                box-shadow: 2px 2px 20px;
                margin-bottom:50px;
            }
            .container-fluid {
                max-width:900px;
                padding: 20px;
            }
            .btn {
                cursor: pointer;
            }
            .program-name {
                font-size: 1.9em;
                font-weight: bold;
            }
            .discount-price {
                font-size: 3.2em;
                font-weight: bold;
                color: #0A82C5;
                line-height: 1;
            }
            .normal-price {
                font-size: 1.5em;
                font-weight: bold;
                line-height: 1;
            }
            .discount-label-text {
                font-size:2em;
                margin-bottom:0px;
            }
            .old-price {
                color:grey;
            }
            .strike {
                text-decoration: line-through;
            }
            .text-shadow {
                text-shadow: 1px 2px 2px black;
            }
            .footer {
                padding:5px;
                background-color:#1B6389;
                color:#fff;
            }
            .guarantee {
                background-color: #F1F1F1;
            }
            .business-details {
                display: block;
                margin: auto;
                margin-left: 30px;
                border-left: 1px solid #d8cece;
                padding-left: 30px;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            /* Ribbon */
            .ribbon {
                 font-size: 16px !important;
                 /* This ribbon is based on a 16px font side and a 24px vertical rhythm. I've used em's to position each element for scalability. If you want to use a different font size you may have to play with the position of the ribbon elements */

                 width: 90%;

                 position: relative;
                 background: #ba89b6;
                 color: #fff;
                 text-align: center;
                 padding: 1em 2em; /* Adjust to suit */
                 margin: 2em auto 3em; /* Based on 24px vertical rhythm. 48px bottom margin - normally 24 but the ribbon 'graphics' take up 24px themselves so we double it. */
            }
            .ribbon:before, .ribbon:after {
                 content: "";
                 position: absolute;
                 display: block;
                 bottom: -1.5em;
                 border: 1.5em solid #986794;
                 z-index: -1;
            }
            .ribbon:before {
                 left: -1.5em;
                 border-right-width: 1.5em;
                 border-left-color: transparent;
            }
            .ribbon:after {
                 right: -1.5em;
                 border-left-width: 1.5em;
                 border-right-color: transparent;
            }
            .ribbon .ribbon-content:before, .ribbon .ribbon-content:after {
                 content: "";
                 position: absolute;
                 display: block;
                 border-style: solid;
                 border-color: #804f7c transparent transparent transparent;
                 bottom: -1em;
            }
            .ribbon .ribbon-content:before {
                 left: 0;
                 border-width: 1em 0 0 1em;
            }
            .ribbon .ribbon-content:after {
                 right: 0;
                 border-width: 1em 1em 0 0;
            }
        </style>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77786743259ff306d0ccf55_75168884', "nav");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56231816259ff306d0cf806_38455784', "body");
?>


        <footer class="footer">
            Slabeste cu Serban
        </footer>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156100181059ff306d0d1674_81737329', "script");
?>

        <?php echo '<script'; ?>
>
            braintree.setup("<?php echo $_smarty_tpl->tpl_vars['braintree_token']->value;?>
", 'dropin', {
                container: 'dropin-container',
                form: 'checkout-form',
            });
        <?php echo '</script'; ?>
>
    </body>
<body>
<?php }
/* {block "nav"} */
class Block_77786743259ff306d0ccf55_75168884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_77786743259ff306d0ccf55_75168884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_56231816259ff306d0cf806_38455784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_56231816259ff306d0cf806_38455784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "body"} */
/* {block "script"} */
class Block_156100181059ff306d0d1674_81737329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_156100181059ff306d0d1674_81737329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "script"} */
}
