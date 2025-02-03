<?php
    session_start();
    include 'includes/order.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/checkout.css">
		<title>TARUNNO DRIVES | checkout</title>
	</head>
	<body>
		<div class="all">
			<div class="nav">
				<a href="cart.php"><i class="fas fa-angle-double-left"></i></a><h1>TARUNNO DRIVES</h1>
			</div>
			<div class="container">
				<h2> Checkout </h2>
				<div class="checkout-info">
					<div id="checkout-flex" class="checkout-form">
						<h3>Client information</h3>
						<form action="checkout.php" method="post">
							<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"><br>
							<input type="text" name="address" placeholder="Address..."><br>
							<input type="text" name="city" placeholder="City..."><br>
							<input type="text" name="phone" placeholder="Phone..."><br>
							<input type="text" name="postal_code" placeholder="Postal code..."><br>
							<button type="submit" name="order-submit" class="order-submit-btn"> Place order</button><br>
						</form>
					</div>
					<div id="checkout-flex" class="checkout-details">
						<h3 style="margin-bottom: 35px;">Checkout information</h3>
						<h4>Total: $ <?php echo $total; ?></h4>
						<h4>Total items: <?php echo $count; ?></h4>
					</div>
				</div>
			</div>
		</div>
    <footer style="background-color: black; padding: 40px 20px; font-family: Arial, sans-serif; font-size: 14px; color: white;">
  <div style="max-width: 1200px; margin: auto; display: flex; justify-content: space-between; flex-wrap: wrap; text-align: left;">
    <!-- Logo and Subscription -->
    <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
      <h3 style="margin: 0;"><img src="assets/Car_images/WhatsApp Image 2025-01-31 at 18.51.16_4a6b57bd.jpg" alt="" width="40px"></h3>
      <p style="margin: 5px 0;">Your Tagline here</p>
      <p style="margin: 15px 0;">Subscribe Now</p>
      <form>
        <input type="email" placeholder="Enter your Email" style="padding: 10px; width: 80%; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
        <button type="submit" style="padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 4px; cursor: pointer;">Subscribe</button>
      </form>
    </div>

    <!-- Information -->
    <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
      <h4 style="margin-bottom: 15px;">Information</h4>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#" style="text-decoration: none; color: #333;">About Us</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">More Search</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Blog</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Testimonials</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Events</a></li>
      </ul>
    </div>

    <!-- Helpful Links -->
    <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
      <h4 style="margin-bottom: 15px;">Helpful Links</h4>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#" style="text-decoration: none; color: #333;">Services</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Supports</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Terms & Condition</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Our Services -->
    <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
      <h4 style="margin-bottom: 15px;">Our Services</h4>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#" style="text-decoration: none; color: #333;">Brands list</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Order</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Return & Exchange</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Fashion list</a></li>
        <li><a href="#" style="text-decoration: none; color: #333;">Blog</a></li>
      </ul>
    </div>

    <!-- Contact Us -->
    <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
      <h4 style="margin-bottom: 15px;">Contact Us</h4>
      <p style="margin: 5px 0;">📞 +212-771000000</p>
      <p style="margin: 5px 0;">📧 tarunnod@gmail.com</p>
      <div style="margin-top: 10px;">
	  <a href="https://www.facebook.com" style="margin-right: 10px; text-decoration: none; color: #fff;" target="_blank">
    <i class="fab fa-facebook"></i>
</a>
<a href="https://www.instagram.com" style="margin-right: 10px; text-decoration: none; color: #fff;" target="_blank">
    <i class="fab fa-instagram"></i>
</a>
<a href="https://twitter.com" style="margin-right: 10px; text-decoration: none; color: #fff;" target="_blank">
    <i class="fab fa-twitter"></i>
</a>
<a href="https://www.linkedin.com" style="margin-right: 10px; text-decoration: none; color: #fff;" target="_blank">
    <i class="fab fa-linkedin"></i>
</a>

      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div style="text-align: center; border-top: 1px solid #ccc; padding-top: 10px; margin-top: 20px;">
    <p style="margin: 5px 0;">2025 © company list | All rights reserved</p>
    <p style="margin: 5px 0;">
      <a href="#" style="text-decoration: none; color: #333;">FAQ</a> |
      <a href="#" style="text-decoration: none; color: #333;">Privacy</a> |
      <a href="#" style="text-decoration: none; color: #333;">Terms & Condition</a>
    </p>
  </div>
</footer>
	</body>
</html>
