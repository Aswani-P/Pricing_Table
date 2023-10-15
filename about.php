<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing table</title>
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
    <?php
        include('template/about_body.php'); 
    ?>
<!-- body part ends here -->


<script>
    document.cookie = "fname=<?php echo $_POST['firstname']?>";
    document.cookie = "lname=<?php echo $_POST['lastname']?>";
    document.cookie = "mail=<?php echo $_POST['mail']?>";
    document.cookie = "city=<?php echo $_POST['city']?>";
    document.cookie = "district=<?php echo $_POST['district']?>";
    document.cookie = "number=<?php echo $_POST['number']?>";
    document.cookie = "zip=<?php echo $_POST['zip']?>";
    document.cookie = "brouchure=<?php echo $_POST['brouchure']?>";
    const param1 = document.cookie.replace(/(?:(?:^|.*;\s*)name\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    const param2 = document.cookie.replace(/(?:(?:^|.*;\s*)lname\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    const param3 = document.cookie.replace(/(?:(?:^|.*;\s*)mail\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    const param4 = document.cookie.replace(/(?:(?:^|.*;\s*)city\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    const param5 = document.cookie.replace(/(?:(?:^|.*;\s*)district\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    const param6 = document.cookie.replace(/(?:(?:^|.*;\s*)number\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    const param7 = document.cookie.replace(/(?:(?:^|.*;\s*)zip\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    const param8 = document.cookie.replace(/(?:(?:^|.*;\s*)brouchure\s*\=\s*([^;]*).*$)|^.*$/, "$1");
     
        console.log(param1,param2,param3,param4,param5,param6,param7,param8);
        
        
</script>
   

    
</body>
</html>