<?php
    $this->load->view('inc/bootstrap.php');
?>
<main>

    <div class="page-header" style='margin-bottom: 100px'>

      <div class="container col-md-4">
         <a href="http://localhost:8080/pccomponentes/index.php/home"><img style='height: 100px; width: 100px;' src="<?php echo base_url(); ?>assets/images/logo.svg"></a>
      </div>
      <div class="container col-md-4">

        <h2>Productos</h2>

      </div>


      <div class="container col-md-4">
          <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
          <?php echo "Hola ".$username;?><br>
          <?php echo anchor('login/index','Logueate','title="Login"'); ?>
          <?php echo anchor('home/logout','Logout','title="Logout"'); ?>
          <?php echo anchor('home/registro','Registro','title="Registro"'); ?>
          <?php echo anchor('home/misdatos','Mis datos','title="Mis datos"'); ?>
          <?php echo anchor('home/acercade','Sobre nosotros','title="Acercade"'); ?>
          </nav>
      </div>
  </div>
  </br>
   </br>
    </br>

  <div>
  <div class="container col-md-2">
      <ul class="list-group">
        <li class="list-group-item active">
            Categorías
        </li>
        <?php foreach ($categorias as $categoria): ?>
          <li class="list-group-item ">
              <a href=<?php echo $direccionlistaprod.$categoria->oid; ?>><?php echo $categoria->nombre ?></a>

          </li>
        <?php endforeach; ?>
      </ul>
  </div>
  <div class="container col-md-8">
	  <ul class="list-group">
	  <form action="home/addCarro">
		<?php foreach ($producto as $prod): ?>

        <div class="container col-md-6">
          <a href=<?php echo $direccion.$prod->oid; ?>>
            <img style='height: 300px; width: 300px;' src="<?php echo base_url(); ?>assets/images/<?php echo $prod->oid?>.png">
          </a>
  		    <li class="list-group-item">

  		        <?php echo "<h4>".$prod->nombre ."</h4>"?>
              <?php echo "<p>Precio: ".$prod->precio."€</p>" ?>
              <?php echo "<p>Disponibles: ".$prod->stock."</p>" ?>
              <a href=<?php echo $direccionAdd.$prod->oid; ?>> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Añadir al carrito </a>
  		    </li>
        </div>

		<?php endforeach; ?>
	  </ul>
	  </form>
  </div class="container col-md-12">
  <div class="container col-md-2">
    <h4 style='font-size: 50px;'>Carrito <span class="glyphicon glyphicon-shopping-cart" ></span></h4>
    <table>
      <tr>
        <th>
          <a href=<?php echo $direccionComprar; ?>> Comprar! </a>
        </th>
        <th>
          <a href=<?php echo $direccionVaciar; ?>> Vaciar </a>
        </th>
      </tr>
      <tr>
        <th>
          Producto
        </th>
        <th>
          Cantidad
        </th>
      </tr>

    <?php foreach ($carro as $clave => $prod ): ?>
    <tr>
        <th>
            <?php echo $prod['nombre'] ?>
        </th>
        <th>
          <?php echo $prod['cantidad'] ?>
        </th>
    </tr>
    <?php endforeach; ?>
    <tr>
      <th>
        Total:
      </th>
      <th>
        <?php echo $precioCarrito." €"?>
      </th>
    </tr>
    </form>
    </table>
  </div>
  </div>
</main>

<?php
    $this->load->view('inc/pie.php');
?>
