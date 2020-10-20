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
            
           
           <div>
                <a class="navbar-brand mr-auto" href="bankingindex.php"><span class="fa fa-home fa-lg"></span>Home</a>
                  
                </div>           
        </div>
    </nav>



	 
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header ">
                <div class="col-12 col-sm-6">
                    <h1>Banking System</h1>
                    <p>Through this portal transfer money to each other gets easy.</p>
                </div>
                
                
                
            </div>
        </div>
    </header>

    <div class="row row-content  ">
    	
    	<div class=" col-12 col-sm-5 ml-2 ">
    		<div >
    			<h3 class="d-flex justify-content-center"><button type="button" class="btn btn-lg btn-primary" data-toggle="collapse" data-target="#usertable">User Details</button></h3>
    		</div>
    		<div class="table-responsive collapse ml-5" id="usertable">
    			<table class="table table-striped">
    				<thead>
    				<tr>
    					<th>Name
    					</th>
    					<th>UserId
    					</th>
                        <th>Current Balance
                        </th>
    					<th>Do
    					</th>
    				</tr>
    				</thead>
    				<tbody>
    					<?php
                        while($row=mysqli_fetch_array($r))
                        {?>
                        <tr>
                            <td><?php echo $row["Name"];?>
                            </td>
                            <td><?php echo $row["EmailId"];?>
                            </td>
                            <td><?php echo $row["CurrentBalance"];?></td>
                            <td><form action="transfer.php" method="post">
                                <button type="submit" name='name' class="btn btn-sm btn-info"   value='<?php echo $row["Name"];?>'>Transcation</button>
                            </form>
                            </td>
                        </tr>
                        <?php
                         }
                        ?>
    				</tbody>
    			</table>
    		</div>
    	</div>
    	<div class=" offset-sm-1 col-12 col-sm-5">
    		<div >
    			<h3 class="d-flex justify-content-center"><button type="button" class="btn btn-lg btn-warning" data-toggle="collapse" data-target="#transactiontable">Transaction Details</button></h3>
    		</div>
    		<div class="table-responsive collapse" id="transactiontable">
    			<table class="table table-striped">
    				<thead>
    					<tr>
    						<th>Date</th>
    						<th>Amount</th>
    						<th>From</th>
    						<th>To</th>
    					</tr>
    				</thead>
    				<tbody>
                        <?php

                        while($row1=mysqli_fetch_array($r1))
                        {
                            ?>
    					<tr>
    						<td><?php echo $row1["Date"];?></td>
    						<td><?php echo $row1["Amount"];?></td>
    						<td><?php echo $row1["YourId"];?></td>
    						<td><?php echo $row1["BenificiaryId"];?></td>
    					</tr>
                        <?php
                    }
                    ?>
    				</tbody>
    			</table>
    		</div>
    	</div>
    	

    </div>
<br><br><br><br>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2 ">
                     <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li ><a class="fa fa-home" href="bankingindex.php">Home</a></li>
                                            
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        Web developer <br>Intern <br>
                        The Sparks Foundation<br>
                        
                        
                        
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                       
                        <a  href="http://www.linkedin.com/in/sce17cs053"><i class="fa fa-linkedin"></i>
                       
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Akp @ The Sparks Foundation 2020</p>
                </div>
            </div>
        </div>  
</footer>

  

</body>


</html>
<script src="jquery/dist/jquery.slim.min.js"></script>
    <script src="popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

</script>