<?php require 'inc/head.php';

if (empty($_COOKIE['nom'])) {

  header('Location: Disconnect.php');

}

if (isset($_GET['remove_from_cart'])) {
    $cookRef = $_GET['remove_from_cart'];
    if ($_COOKIE[$cookRef] <= 0) {
      $amount = 0;
      setcookie($_GET['remove_from_cart'], $amount);
    }elseif (isset($_COOKIE[$cookRef])) {
      $amount = $_COOKIE[$cookRef]-1;
      setcookie($_GET['remove_from_cart'], $amount);
      header('Location: cart.php');
    }

  }



 ?>
<section class='cookies container-fluid'>
  <div class='row'>
    <?php
    if ($_COOKIE[46] > 0) {
    echo  "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
        <figure class='thumbnail text-center'>
          <img src='assets/img/product-46.jpg' alt='cookies choclate chips' class='img-responsive'>
          <figcaption class='caption'>
            <h3>Pecan nuts</h3>
            <p> Cooked by Penny ! <br> AMOUNT : ";
            echo $_COOKIE[46];
            echo " </p>
            <a  href='?remove_from_cart=46' class='btn btn-danger'>
              <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> remove from cart
            </a>
          </figcaption>
        </figure>
      </div>";
    }

    if ($_COOKIE[36] > 0) {
    echo  "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
      <figure class='thumbnail text-center'>
        <img src='assets/img/product-36.jpg' alt='cookies choclate chips' class='img-responsive'>
        <figcaption class='caption'>
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette ! <br> AMOUNT : ";
          echo $_COOKIE[36];
          echo "</p>
          <a  href='?remove_from_cart=36' class='btn btn-danger'>
            <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> remove from cart
          </a>
        </figcaption>
      </figure>
    </div>";
    }
    if ($_COOKIE[58] > 0) {
    echo  "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
      <figure class='thumbnail text-center'>
        <img src='assets/img/product-58.jpg' alt='cookies choclate chips' class='img-responsive'>
        <figcaption class='caption'>
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette ! <br> AMOUNT : ";
          echo $_COOKIE[58];
          echo "</p>
          <a  href='?remove_from_cart=58' class='btn btn-danger'>
            <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> remove from cart
          </a>
        </figcaption>
      </figure>
    </div>";
    }
    if ($_COOKIE[32] > 0) {
    echo  "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
      <figure class='thumbnail text-center'>
        <img src='assets/img/product-32.jpg' alt='cookies choclate chips' class='img-responsive'>
        <figcaption class='caption'>
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny ! <br> AMOUNT : ";
          echo $_COOKIE[32];
          echo "</p>
          <a  href='?remove_from_cart=32' class='btn btn-danger'>
            <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> remove from cart
          </a>
        </figcaption>
      </figure>
    </div>";
    }
    ?>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
