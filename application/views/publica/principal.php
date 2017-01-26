<?php
    $this->load->view('inc/bootstrap.php');
?>
<main>
  <h2>Productos</h2>
  <?php echo "Hola ".$username;?>

  <br>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <?php echo anchor('login/index','Logueate','title="Login"'); ?>
  <?php echo anchor('home/logout','Logout','title="Logout"'); ?>
  <?php echo anchor('home/registro','Registro','title="Registro"'); ?>
  <?php echo anchor('home/misdatos','Mis datos','title="Mis datos"'); ?>
  <?php echo anchor('home/acercade','Sobre nosotros','title="Acercade"'); ?>
  </nav>

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
  </div>
  <div class="container col-md-2">
    <h4>Carrito</h4>
    <table>
      <tr>
        <th>
          Producto
        </th>
        <th>
          Cantidad
        </th>
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
      <a href=<?php echo $direccionComprar; ?>> Comprar! </a>
    </form>
    </table>
  </div>
</main>
