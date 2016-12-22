<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>
    <?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/estilos.css">
    
</head>
<body>
    
<!--
cabecera-->
    <header>
        <h1> <?php echo $tituloH1; ?></h1>
    </header>