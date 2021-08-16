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
    <?php
        require 'login.php';
    ?>

    <div class="container">
        <?php
            require 'header.php';
        ?>

        <div id="questions">
            <div class="question">
                <h2>This is the title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem ut, libero culpa quae nemo quis atque aspernatur,           temporibus exercitationem repellendus. Voluptatem repudiandae quae ipsa, officia minus autem animi ut.
                    dignissimos delectus accusantium incidunt tenetur iusto numquam minus enim quisquam aperiam recusandae cumque.
                </p>
                <button class="questionReadMoreBtn">Read More</button>
            </div>
        </div>

    </div>
</body>
<script src="js/index.js"></script>
</html>