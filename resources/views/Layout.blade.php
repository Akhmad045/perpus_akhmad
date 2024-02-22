<!doctype html>
<html lang="en">
  <head>
  	<title>Perpustakaan | Digital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		@yield('css')
    
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a class="logo">Perpustakaan</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{ url('dashboard') }}"  >Home</a>
	            
	          </li>
	          <li>
	              <a href="{{ url('barang') }}">Pendataan Barang</a>
	          </li>
	          <li>
              <a href="{{ url('peminjaman') }}" >Peminjaman</a>
              
	          </li>
	          <li>
              <a href="{{ url('registrasi') }}">Registrasi Admin</a>
	          </li>
	          <li>
              <a href="{{ url('laporan') }} }}">Laporan</a>
	          </li>
	        </ul>

	       
	          </form>
					
			  <div class="footer ">
				  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Raden Mupid </a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			  </div>
	        </div>

		
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
		@yield('isi')
        
        </div>
		</div>
		<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
		@yield('js')
  </body>
</html>