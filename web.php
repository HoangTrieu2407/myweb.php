
<?php

require("header.php");
session_start();
?>

<html>

<body>

	<div class= menu  >
		<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
	<strong>Nhà Phân Phối Vân Nhi </strong>
	
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
		<br>
        <br>
		<li class="nav-item">   
		
		</li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
		</div>
		
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="HPGB47MJ"></script>
    <style>
			.icon a{
				font-size: 40px;
				color:yellow;
			}
			.icon a:hover{
				color: green;
				
			}
			.icon1 a{
				font-size: 40px;
				color:blue;
			}
			.icon1 a:hover{
				color: green;
			}

    </style>
    
    
     
    <div id="wrapper">
        <header>

            <div id="content" class="container">
                  
                </div>
    
		</header>
<div id="banner">

</div>

</div>
</div>


	<div class="container">
		 
	 <div class="alert alert-warning" role="alert">
			  <strong>Wellcome!  
			  <br>
			  <p class="fs-1" align="center">ĐỆ NHẤT - DANH TRÀ</p>
			
			  
			  <div class="inner-header container">
            <a href="" id="logo"></a>
        <nav>
            <ul id="main-menu">
                                  
				<?php 
					if(isset($_SESSION['login_user'])&& $_SESSION['login_user'] !== ''){ ?>
						<li><a href="logout.php">✪ Đăng xuất ✪</a></li> 					<br> 
					<?php }
					else {  ?>
						<li><a href="formlogin.php">✪ Đăng nhập liên kết ✪</a></li> 					<br> 
					<?php } ?>
                <li><a href="https://www.facebook.com/profile.php?id=100057055705950">✪ Trang chủ  ✪</a></li>    <br>                                   
                <li><a href="http://google.com">✪ Home ✪</a></li> 	<br>
				
				<div class="icon1"><a href=""><i class="fas fa-luggage-cart"></i></a></div>
            </ul>
        </nav>  
    </div>
			  </strong> 
	 </div>
		   <a  class="btn btn-warning btn-lg">Basket</a>
		
		<i class="fas fa-spa"></i>
		
			<label for="lienhe">.</label>
			<select id="cars">
			  <option value="sdt">.</option>
			  <option value="gm">...</option>
			  <option value="fb">....</option>
			 
			</select>	<br>
<div class="icon">
	<a href=""><i class="fas fa-laugh"></i></a>
	<a href=""><i class="fas fa-laugh-beam"></i></a>
	<a href=""><i class="fas fa-laugh-squint"></i></a>

</div>
			

         <div class= "row d-inline-flex">
            <!-- Gallery Item 1 -->
            <div class ="col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border height100">
                  <div>
                     <img src="7.png"/>
                  </div>
		
	<div class="btn-group">
    <button type="button" class="btn btn-outline-warning" >Đặt</button>
    <button type="button" class="btn btn-outline-info" >Thông Tin</button>
	<button  type="button" class="btn btn-outline-success" >Thêm Vào Giỏ</button>
    
    </div>	
	<div id="buy-amount">
		<button class="minus-btn" onclick="handleminus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
		<input type="text" name ="amount" id="amount"value="1">
		<button class="plus-btn"onclick="handleplus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
			
				<a class="fs-5"><span>10.000</span><sup>đ</sup></a>
				
	</div>
  
               </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class ="col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border height100">
                  <div>
                     <img src="3.png"/>
				  </div>
			<div class="btn-group">
    <button type="button" class="btn btn-outline-warning">Đặt</button>
    <button type="button" class="btn btn-outline-info">Thông Tin</button>
	<button type="button" class="btn btn-outline-success" >Thêm Vào Giỏ</button>    
  </div>
<div id="buy-amount">
		<button class="minus-btn" onclick="handleminus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
		<input type="text" name ="amount" id="amount"value="1">
		<button class="plus-btn"onclick="handleplus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
<a class="fs-5"><span>10.000.000</span><sup>đ</sup></a>
	</div>  
               </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class ="col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border height100">
                  <div class="img">
                     <img src="4.png"/>
                    </div>
                 <div class="btn-group">
    <button type="button" class="btn btn-outline-warning">Đặt</button>
    <button type="button" class="btn btn-outline-info">Thông Tin</button>   
	<button type="button" class="btn btn-outline-success" >Thêm Vào Giỏ</button>		
					</div> 
	<div id="buy-amount">
		<button class="minus-btn"onclick="handleminus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
		<input type="text" name ="amount" id="amount"value="1">
		<button class="plus-btn"onclick="handleplus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
	<a class="fs-5"><span>10.000.000</span><sup>đ</sup></a>
	</div>
               </div>
            </div>
            <!-- Gallery Item 4 -->
            <div class ="col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border height100">
                  <div class="img">
                     <img src="5.png"/>
                  </div>
              <div class="btn-group">
    <button type="button" class="btn btn-outline-warning">Đặt</button>
    <button type="button" class="btn btn-outline-info">Thông Tin</button>
	<button type="button" class="btn btn-outline-success" >Thêm Vào Giỏ</button>
	
    
  </div>  
  <div id="buy-amount">
		<button class="minus-btn"onclick="handleminus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
		<input type="text" name ="amount" id="amount"value="1">
		<button class="plus-btn"onclick="handleplus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
<a class="fs-5"><span>10.000</span><sup>đ</sup></a>
	</div>
               </div>
            </div>
            <!-- Gallery Item 5 -->
            <div class ="col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border height100">
                  <div class ="img">
                     <img src="6.png"/>
                  </div>
                 <div class="btn-group">
    <button type="button" class="btn btn-outline-warning">Đặt</button>
    <button type="button" class="btn btn-outline-info">Thông Tin</button>
	<button type="button" class="btn btn-outline-success" >Thêm Vào Giỏ</button>
    
  </div>
  <div id="buy-amount">
		<button class="minus-btn"onclick="handleminus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
		<input type="text" name ="amount" id="amount" value="1">
		<button class="plus-btn"onclick="handleplus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
<a class="fs-5"><span>10.000.000</span><sup>đ</sup></a>
	</div>
               </div>
            </div>
            <!-- Gallery Item 6 -->
            <div class ="col-12 col-sm-6 col-md-4 p-2">
               <div class="d-flex flex-column text-center border height100">
                  <div class="img">
                     <img src="2.png" />
                  </div>
             <div class="btn-group">
    <button type="button" class="btn btn-outline-warning">Đặt</button>
    <button type="button" class="btn btn-outline-info">Thông Tin</button>
	<button type="button" class="btn btn-outline-success" >Thêm Vào Giỏ</button>
    
  </div>   
  
<div id="buy-amount">
		<button class="minus-btn"onclick="handleminus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
		<input type="text" name ="amount" id="amount" value="1">
		<button class="plus-btn"onclick="handleplus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</button>
	<a class="fs-5"><span>10.000.000</span><sup>đ</sup></a>
	</div>  
               </div>
            </div>
         </div>
      </div> 
	  
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slide1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>

  
 <?php 
 require("footer.php");
?>
 
</body>
</html>

