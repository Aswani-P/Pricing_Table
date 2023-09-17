<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dream Travel Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="httpdocs/images/favicon.ico">
</head>
<body>
    <!-- menu bar starts here -->
    <?php
        include('template/menubar.php'); 
    ?>
    <!-- menu bar ends here -->
<!-- body part starts here -->
    <div class="container" style="padding:20px; background-image: linear-gradient(#080A52, #63BFD1);height:800px;">
          <h1 style="color:white;">  <i class="bi bi-tags"></i>  Best Offers</h1>
        <div class="container px-4 text-center" style="width:80%;padding:20px;">
            <div class="row gx-5 " style="height:600px;">
                <div class="col" style="border:4px solid #475A5F;border-radius:10px;margin:20px;background-color:white;height:500px;padding:20px;">
                    <div><img src="httpdocs/images/images.png" alt="basic" height="150px"></div>
                    <div class="p-3"style="color:#E91111"><h2>Basic</h2></div>
                    <div>Basic package services</div>
                    <div>Limited to 2 persons</div>
                    <div>Travel by moto bike</div>
                    <div>Free lunch and dinner</div>
                    <div>Local guid</div>
                    <div><h3>$ 39.75</h3></div>
                    <div><a class="btn btn-primary" href="signup.php" role="button" style="margin-top:20px">Sign Up</a></div>
                </div>
                <div class="col" style="border:4px solid #475A5F;border-radius:10px;margin:20px;background-color:white;height:550px;">
                    <div><img src="httpdocs/images/premium.jpg" alt="premium" ></div>
                    <div class="p-3"style="color:#FAB303;"><h2>Premium</h2></div>
                    <div>Family package services</div>
                    <div>Limited to 12 persons</div>
                    <div>Travel by bus</div>
                    <div>Free lunch and dinner</div>
                    <div>Local guid</div>
                    <div><h3>$ 180.75</h3></div>
                    <div><a class="btn btn-primary" href="signup.php" role="button" style="margin-top:20px">Sign Up</a></div>
                </div>
                <div class="col" style="border:4px solid #475A5F;border-radius:10px;margin:20px;background-color:white;height:500px;padding-top:20px;" >
                    <div><img src="httpdocs/images/standard1.jpg" alt="standard"height="150px" style="padding:5x"></div>
                    <div class="p-3"style="color:#EE8625"><h2>Standard</h2></div>
                    <div>Medium package services</div>
                    <div>Limited to 5 persons</div>
                    <div>Travel by city car</div>
                    <div>Free lunch and dinner</div>
                    <div>Local guid</div>
                    <div><h3>$ 59.75</h3></div>
                    <div>
                    <a class="btn btn-primary" href="signup.php" role="button" style="margin-top:20px">Sign Up</a>
                    </div>
                </div>
              
               
                
            </div>
            

        </div>
    </div>


<script>
     
     localStorage.setItem('fname','<?php echo $_POST['fname']?>');
     localStorage.setItem('lname','<?php echo $_POST['lname']?>');  /*or we can use'<?php //echo $_GET['fname']?>' */
     localStorage.setItem('email','<?php echo $_POST['email']?>');
     localStorage.setItem('password','<?php echo $_POST['password']?>');
     localStorage.setItem('city','<?php echo $_POST['city']?>');
     localStorage.setItem('district','<?php echo $_POST['district']?>');
     localStorage.setItem('zip','<?php echo $_POST['zip']?>');/*or we can use'<?php //echo $_GET['lname']?> '*/
        // console.log(param1,param2,param3,param4,param5,param6);
        
        
</script>
   <!-- body part ends here --> 
</body>
</html>