
    <?php
      $nombre = $_POST['nombre'] ?? null;
      $password = $_POST['password'] ?? null;
    ?>

    <?php
      require('templates/open.php');
    ?>


    <form role="form" action="registracion.php" method="post" enctype="multipart/form-data">
      <div class="row">
          <div class="form-group col-sm-6">
              <label for="nombre">Email or Username</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Email or Username">
          </div>
      </div>
      <div class="row">
          <div class="form-group col-sm-6">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
          </div>
      </div>
    </form>


    <?php
      require('templates/close.php');
    ?>
