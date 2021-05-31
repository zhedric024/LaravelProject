<!DOCTYPE html>
<html lang = "en" dir="ltr" >
	<head> 
		<meta charset="utf-8">
		<title> COVID PROTECTION KIT </title>	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<style type="text/css">
     body {
	margin: 0;
	padding: 0;
	font-family: "Roboto", sans-serif;
}

 header {
	position: fixed;
	background: #22242A;
	padding: 20px; 
	width: 100%;
	height: 10px;
}

.left_area span{
	color: #1DC4E7;
}

.logout_btn{
	padding: 5px;
	background: #19B3D3;
	text-decoration: none;
	float: right;
	margin-top: -10px;
	margin-right: 40px;
	border-radius: 2px;
	font-size: 15px;
	font-weight: 600;
	color: #fff;
	transition: 0.5s
	transition-property: background;
}

.logout_btn:hover{
	background: #0D9DBB;

}

.sidebar{
	background: #2F323A;
	margin-top: 50px;
	padding-top: 30px;
	position: fixed;
	left: 0;
	width: 250px;
	height: 100%;
	transition: 0.5s;
	transition-property: left;
}

.sidebar .profile_image{
	width: 100px;
	height: 100px;
	border-radius: 100px; 
	margin-bottom: 10px;
}

.sidebar h4{
	color: #ccc;
	margin-top: 0;
	margin-bottom: 20px; 
}

.sidebar a{
	color: #fff;
	display: block;
	width: 100%;
	line-height: 60px;
	text-decoration: none;
	padding-left: 40px;
	box-sizing: border-box;
	transition: 0.5s;
	transition-property: background;
}

.sidebar a:hover{
	background: #19B3D3;
}

.sidebar i{
	padding-right: 10px;
}

label #sidebar_btn{
	z-index: 1;
	color: #fff;
	position: fixed;
	cursor: pointer;
	left: 30px;
	font-style: 20px;
	margin: 0px 0;
	transition: 0.5s ;
	transition-property: color;

}

label #sidebar_btn:hover{
	color: #19B3D3
}

#check:checked ~ .sidebar{
	left: -190px;
}

#check:checked ~ .sidebar a span{
	display: none;
}

#check:checked ~ .sidebar a{
	font-size: 20px;
	margin-left: 170px;
	width: 80px;
}

.content{
	margin-left: 250px;
	background: url(cov.jpeg) no-repeat;
	background-position: center;
	background-size: cover;
	height: 100vh; 
	transition: 0.5s;
}

#check:checked ~ .content{
	margin-left: 60px;
}

#check{
	display: none;
}


    </style>
    </head>
	<body>

		<input type="checkbox" id="check"> 
		<!-- header area start -->
		<header>
			<label for="check"> 
				<i class="fas fa-bars" id="sidebar_btn"></i>
			 </label>


		<div class="right_area">
			<a href="#" class="logout_btn">Logout</a>
		</div>
			</header>
			<!-- header area end -->

			<div class="sidebar">
				
					<a href="Main.php"> <i class="fas fa-desktop"></i> <span>Dashboard</span> </a>
					<a href="{{ route('categories.index') }}"> <i class="fas fa-table"></i> <span>Category</span> </a>
					<a href="{{ route('products.index') }}"> <i class="fas fa-cube"></i> <span>Product</span> </a>	
					<a href="Seller.php"> <i class="fas fa-address-book"></i> <span>Seller</span> </a>		
					<a href="{{ route('orders.index') }}"> <i class="	fas fa-cart-plus"></i> <span>Order</span> </a>
					<a href="#"> <i class="fas fa-info-circle"></i> <span>About</span> </a>			
			</div>

			<div></div>
		</body>
</html>