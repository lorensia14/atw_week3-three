<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Book Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- start: Header -->
    
      <!-- end: Header -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="{{url('home')}}" class="current">Home</a></li>
            <li><a href="{{url('subpage')}}">Search</a></li>
            <li><a href="{{url('books')}}">Books</a></li>            
            <li><a href="{{url('newreleases')}}">New Releases</a></li>  
            <li><a href="#">About</a></li> 
            <li><a href="#">Contact</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over Rp 50.000
        	</p>
			<a href="subpage.blade.php" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>
                <li>Asya Story</li>
                <li>Septihan</li>
                <li>Alaska</li>
                <li>Teluk Alaska</li>
            </ul>
            <a href="subpage.blade.php" style="margin-left: 50px;">Read more...</a>
        </div>
    </div> <!-- end of header -->
     
     @yield('content')
     
    <div id="templatemo_footer">
    
	       <a href="subpage.php">Home</a> | <a href="subpage.php">Search</a> | <a href="subpage.php">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright ©2020 <a href="#"><strong>Milenial Book store</strong></a> 
      </div> 
    <!-- end of footer -->

</div> <!-- end of container -->

</body>
</html>