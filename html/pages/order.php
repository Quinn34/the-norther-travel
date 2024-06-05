<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/luuk.css" >
</head>
<header>
    <div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/north travel logo.png" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="#" class="Items">Home</a>     
            <a href="/pages/overons.php" class= "Items">Over ons</a>
            <a href="/pages/overons.php" class= "Items">Reizen</a>     
            <a href="/pages/contact.php" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/login.php" class="Items">Login</a>   
        </div>
    </div>
    </div>
</header>
    <div class="row">
      <div class="col-75">
        <div class="container">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

          
            <div class="row">
              <div class="col-50">
                <label for="land">land</label>
                <input type="text" id="land" name="land" placeholder="NL">
              </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:rgb(198, 10, 10);"></i>
              <i class="fa fa-cc-discover" style="color:rgb(230, 0, 255);"></i>
            </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:rgb(0, 0, 0)">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$1500</span></p>
      <p><a href="#">Product 2</a> <span class="price">$500</span></p>
      <p><a href="#">Product 3</a> <span class="price">$800</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2000</span></p>
      <hr>
      <p>Total <span class="price" style="color:rgb(0, 0, 0)"><b>$4800</b></span></p>
    </div>
  </div>
</div>