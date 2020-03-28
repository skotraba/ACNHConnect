

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
        <h1>Create profile</h1>
        <?php
            include '../header/header.php';
            createHeader();
        ?>
    </div>

    <div class='container '>
<!-- 
        <h1>Username:</h1>
        <h3 >answer</h3>
        <h2>Townsname:</h2>
        <h3>answer</h3>
        <h2>Fruit:</h2>
        <h3>answer</h3>
        <h2>Flowers:</h2>
        <h3>answer</h3>
        <br><br>
        <a class='btn btn-primary' href='../post/index.php'>POST</a> -->

        <form action='./createProfile.php' method='POST'>
            <div class="form-group">
                <label>Townsname</label>
                <input type="text" class="form-control" name="townsname"  placeholder="Enter townsname" required>
            </div>
            <div class="form-group">
                <label">Fruit</label>
                <input type="text" class="form-control" name="fruits" placeholder="Enter fruits" required>
            </div>
            <div class="form-group">
                <label>Flowers</label>
                <input type="text" class="form-control" name="flowers" placeholder="Enter flowers" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class='btn btn-info' href='../main/index.php'>BACK</a>
        </form>

        <?php 
            include './profile.php';
            createProfile();
        ?>
    </div>
</body>
</html>