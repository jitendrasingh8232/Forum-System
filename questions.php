<?php
    require 'assets/config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/signupandlogin.css">
    <link rel="stylesheet" href="css/questions.css">
    <link rel="stylesheet" href="css/login.css">
    
    <style>
        .container.active{
            filter: blur(25px);
        }
    </style>
</head>
<body>
    <?php
        require 'signupandlogin.php';
    ?>

    <div class="container">
        <?php
            require 'header.php';
        ?>

        <div id="questions">
            <?php
                $sql = "SELECT * FROM `questions` WHERE questiontype = '$id'";
                $sqlquery = mysqli_query($connect,$sql);
                if(mysqli_num_rows($sqlquery) > 0){
                    while($row = mysqli_fetch_assoc($sqlquery)){
                        echo '<div class="question">
                            <h2>'.$row['title'].'</h2>
                            <p>
                            '.substr($row['description'],0,400).' ...'.'
                            </p>
                            <button class="questionReadMoreBtn">Read More</button>
                        </div>';
                    }
                }
                else{
                    echo '<h2>Sorry ! No Questins Found</h2>';
                }
            ?>
        </div>

    </div>
</body>
<script src="js/header.js"></script>
</html>