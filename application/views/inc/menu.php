<?php
    $this->load->view('inc/bootstrap.php');
?>
<nav class="navbar navbar-light bg-faded">
<?php echo anchor('home/index','Inicio  ','title="Volver al principio de la página"'); ?>
<?php echo anchor('gestion/usuarios','Usuarios  ','title="Gestión de usuarios"'); ?>
<?php echo anchor('gestion/productos','Productos  ','title="Gestión de productos"'); ?>
<?php echo anchor('gestion/categorias','Categorias  ','title="Gestión de categorias"'); ?>
<?php echo anchor('gestion/subcategorias','SubCategorias  ','title="Gestión de subcategorias"'); ?>
<?php echo anchor('gestion/opiniones','Opiniones  ','title="Moderación de opiniones"'); ?>
<?php echo anchor('home/acercade','Acerca de  ','title="Sobre sitio web"'); ?>
<?php echo anchor('home/logout','Logout  ','title="Logout!"'); ?>
</nav>
