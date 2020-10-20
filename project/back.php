<?php

$con=mysqli_connect('localhost', 'root', '', 'bankingsystem');
$q="SELECT *FROM userdetails";
$q1="SELECT *FROM transactionlog ";
$r1=mysqli_query($con, $q1);
$r=mysqli_query($con, $q);
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">


 
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="bootstrap/dist/css/styles.css">
    
<title>Banking System
</title>
</head>
<body>


    <nav class="navbar navbar-dark navbar-expand-sm bg-primary fixed-top">
        <div class="container">
            
           
           <div  >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="bankingindex.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    
                </ul> 
                  
                </div>           
        </div>
    </nav>



	 <header class="jumbotron">
        <div class="container">
            <div class="row row-header ">
                <div class="col-12 col-sm-6">
                    <h1>Banking Management System</h1>                    
                </div>
                
                
            </div>
        </div>
    </header>

    <div class="row row-content  ">
    	
    	<div class=" col-12 col-sm-5 ml-2 ">
    		<div >
    			<h3 class="d-flex justify-content-center"><a href="bankingindex.php"><button type="button" class="btn btn-lg btn-primary">Go to Home Page</button></a></h3>
    		</div>
    		
    	</div>
    	

    </div>



  

</body>


</html>
<script src="jquery/dist/jquery.slim.min.js"></script>
    <script src="popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

</script>