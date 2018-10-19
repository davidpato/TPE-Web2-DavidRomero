<?php
/* Smarty version 3.1.33, created on 2018-10-19 00:56:26
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\canciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc90f9aaa35d7_14659530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41366795e0831280317f60addf4330db32ca8954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\canciones.tpl',
      1 => 1539835431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc90f9aaa35d7_14659530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">

   <h1 id="can"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>



          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Disco</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Canciones']->value, 'cancion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
?>
              <tr>
              <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_id'];?>
</th>
              <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_nombre'];?>
</th>
              <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_duracion'];?>
</th>
              <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['nombre'];?>
</th>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
         </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
