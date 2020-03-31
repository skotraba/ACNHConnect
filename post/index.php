<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel='stylesheet' href='style.css'>

</head>
<body>

    <div class='jumbotron text-center bg-dark text-white'>
        <h1>Post Page</h1>
        <?php
            include '../header/header.php';
            createHeader();
        ?>
    </div>


    <div class='container'>
       
        <form action='./post.php' method='post'>
        
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" rows="3" name='message' required></textarea>
            </div class='form-control'>
                <button class='btn btn-primary'>Submit</button>
                <a class='btn btn-warning' href='../main/index.php' window.location = "http://www.google.com/">VIEW</a>
            <div>

            </div>
        </form>
       
        
    </div>
    
</body>
</html>


