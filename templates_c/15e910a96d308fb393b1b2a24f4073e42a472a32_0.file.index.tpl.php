<?php
/* Smarty version 3.1.33, created on 2019-06-10 20:22:36
  from '/var/www/html/rate/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfe91dcd6cec9_21972403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e910a96d308fb393b1b2a24f4073e42a472a32' => 
    array (
      0 => '/var/www/html/rate/templates/index.tpl',
      1 => 1560187350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfe91dcd6cec9_21972403 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <title>Cours</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Конвертер валюти</span>
</nav>
<div class="container">
    <div class="row justify-content-center"></div>


    <div class="row justify-content-center">
        <div class="col-9">
            <form method="post" action="view.php" name="money" id="money" class="form-inline">
                <div class="form-group mx-sm-3 mb-3">
                    <input type="number" name="value" class="form-control"  placeholder="Value">
                    <select name="currency" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option value="1">UAN</option>
                        <option value="2">USD</option>
                        <option value="3">EUR</option>
                        <option value="4">RUR</option>
                    </select>
                    <button id="btn"><img src="https://img.icons8.com/material-sharp/24/000000/sorting-arrows-horizontal.png"
                                 style="vertical-align: middle"></button>

                    <select name="inCurrency" id="inputState" class="form-control">
                        <option selected >Choose...</option>
                        <option value="1">UAN</option>
                        <option value="2">USD</option>
                        <option value="3">EUR</option>
                        <option value="4">RUR</option>
                    </select>
                    <input type="text" id="result" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" placeholder="Value" disabled >
                </div>
            </form>
            <p style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
        </div>

    </div>
    <div class="row">

        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header"> <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]["ccy"];?>
</span><br></div>
                    <div class="card-body">
                        <h2 ><span class="badge badge-info">Покупка <span class="badge badge-light"> <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]["buy"];?>
</span> </span></h2><br>
                        <h2 ><span class="badge badge-info">Продаж <span class="badge badge-light"> <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]["sale"];?>
</span> </span></h2><br>
                    </div>
                </div>
            </div>

        <?php
}
}
?>

    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
