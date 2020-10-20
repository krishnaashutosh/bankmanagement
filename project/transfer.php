<?php 
session_start();
$con=mysqli_connect('localhost','root','','bankingsystem');
$name=$_POST['name'];
$q="select * from userdetails where Name='$name'";
$q1="select *from userdetails where not Name='$name'";
$r1=mysqli_query($con, $q1);


$result=mysqli_query($con,$q);

$row=mysqli_fetch_array($result);
$mail=$row['EmailId'];
$credit=$row['CurrentBalance'];
$_SESSION['name']=$name;
?>
<!DOCTYPE html>

<head>	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">


 
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/dist/css/styles.css">
	<title><?php echo $name;?></title>

</head>
<body>

<header class="jumbotron">
        <div class="container">
            <div class="row row-header ">
                <div class="col-12 col-sm-6">
                    <h1>Banking Mnagement System</h1>
                                      
                </div>
                
                
            </div>
        </div>
    </header>
<div class="container">
	<div class="offset-sm-3 row row-content d-flex jusify-content-center">
		<form action="update.php" method="post" >
			<h3 color="blue">Transaction Window</h3>
		<div class="table-responsive">
       <table class="table">
			<tr>
				<th>Name</th>
				<td><?php echo $name;?></td>
			</tr>
			
			<tr>
				
				<th>YourId</th>
				<td><select name='sender'>
					<option value='<?php echo $mail;?>'><?php echo $mail;?></option>
				</select></td>
			</tr>
           
           <tr>
				
				<th> Current Balance</th>
				<td><?php echo $credit?></td>
			</tr>
			<tr>
				
				<th>To</th>
				<td><select name="receiver" >
           <?php 
           while($row1 = mysqli_fetch_array($r1)) { ?>
			<option  value="<?php echo $row1["Name"]; ?>"><?php echo $row1["EmailId"]; ?></option>
			<?php } ?>
		</select></td>
			</tr>
			<br>

			<tr>
			
			<th>Amount<th> 
			<input type="number" min=0 name="amount" />
		</tr>
		<tr>
		<td>
				
				<button type="submit" class="btn btn-md btn-success" value="Credit">Transfer</button>
				
		   </td>
		   <td>
		   	<a href="index.php" type="button" class='btn btn-md btn-danger'>Abort transaction</a></td>
		</tr>



        </table>

        </div>
    </form>

		
     

	
	
		
				
	
</div>

<br><br><br><br>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2 ">
                     <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li ><a class="fa fa-home" href="index.php">Home</a></li>
                                            
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