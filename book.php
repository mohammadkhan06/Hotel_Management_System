<!DOCTYPE html>
<html>
<head>
	<title>Book my stay</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include('header.html');?>
	<div class=container>
		<div class="header">Book My Stay</div>
		<form action="hotel.php" method="POST">
		<div class="input-group">
      		<label>Check In</label>
      		<input type="date" name="checkIn" value="<?php if(isset($checkIn)) echo $checkIn; ?>">
    	</div>
 		<div class="input-group">
      		<label>Check out</label>
      		<input type="date" name="checkOut" value="<?php if(isset($checkOut)) echo $checkOut; ?>">
    	</div>
		<div class="input-group">
      		<label>Rooms</label>
      		<input type="text" name="room" value="<?php if(isset($room)) echo $room; ?>">
    	</div>
		<div class="input-group">
      		<label>Guests</label>
      		<input type="text" name="guest" value="<?php if(isset($guest)) echo $guest; ?>">
    	</div>
        <div class="input-group">
  	  		<button type="submit" class="btn" name="book_user">Book</button>
  		</div>    
  		</form>
  	</div>	    	   	
</body>
</html>