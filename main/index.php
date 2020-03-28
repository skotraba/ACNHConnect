

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <div class='jumbotron text-center bg-dark text-white'>
        <h1>Main Page</h1>
        <?php
            include '../header/header.php';
            createHeader();
        ?>
        <a class='btn btn-primary' href='../post/index.php'>POST</a>
        <a class='btn btn-info' href='../register/register.html'>REGISTER</a>
        <a class='btn btn-info' href='../login/login.html'>LOGIN</a>
        <a class='btn btn-warning' href='../logout/logout.php' onClick="refreshPage();">LOGOUT</a>
        <a class='btn btn-success' href='../profile/createProfile.php'>CREATE PROFILE</a>
        <a class='btn btn-success' href='../profile/viewProfile.php'>VIEW PROFILE</a>
    </div>


    <div class='container '>
    <?php include '../post/post.php';

       
    
    ?>
    </div>

    <script>
        function refreshPage(){
            window.location.reload();
        } 
</script>
</body>
</html>