<?php
    session_start();
    include 'includes/admin.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/admin.css">
		<title>TARUNNO DRIVES | product</title>
	</head>
	<body>
		<div class="order-all">
			<div class="heading">
				<h1><a href="javascript:history.back();"><i class="fas fa-angle-double-left"></i></a>TARUNNO DRIVES <span> Admin </span> </h1>
			</div>
			<div class="user-info">
				<h3>Client details</h3>
				<?php
					echo '
					<h4><i class="fas fa-user"></i> '.$_SESSION['username'].'</h4>
					<h4><i class="fas fa-envelope"></i> '.$_SESSION['email'].'</h4>
					';
				?>
				<?php
					$user_order = new Order();
					$user_order = $user_order->get_order($order_id);
					$user_order = $user_order->fetch_assoc();
					echo '
					<h4><i class="fas fa-map-marker-alt"></i> '.$user_order['address'].' | '.$user_order['city'].'</h4>
					<h4><i class="fas fa-mobile-alt"></i> '.$user_order['phone'].'</h4>
					<h4><i class="fas fa-mail-bulk"></i> '.$user_order['postal_code'].'</h4>
					';
				?>
			</div>
			<div class="order-container">
				<h3>Order details</h3>
				<?php
				echo '<div class="items">';
					while($row = $order_items->fetch_assoc()){
						$product_1 = $row['product_id'];
						$product_2 = $row['product_id2'];
						if($product_1 == -1){
							$item = new Product();
							$item = $item->get_product($product_2);
							$item = $item->fetch_assoc();

							echo '
							<div class="item">
								<img src="assets/Product_images/'.$item['image'].'">
								<h5 class="item-name">'.$item['model'].'</h5>
								<h5 class="item-name">'.$item['manufacturer'].'</h5>
								<h6 class="item-price">$'.$item['price'].'</h6>
							</div>
							';
						} else {
							$item = new Car();
							$item = $item->get_car($product_1);
							$item = $item->fetch_assoc();

							echo '
							<div class="item">
								<img src="assets/Car_images/'.$item['image'].'">
								<h5 class="item-name">'.$item['model'].'</h5>
								<h5 class="item-name">'.$item['manufacturer'].'</h5>
								<h6 class="item-price">$'.$item['price'].'</h6>
							</div>
							';
						}
					}
				echo '</div>'
				?>
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
      <p style="margin: 5px 0;">📞 +91 9999 999 999</p>
      <p style="margin: 5px 0;">📧 youremailid.com</p>
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
