<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/signupandlogin.css">
</head>
<body>
    <?php
        require 'signupandlogin.php';
    ?>
    <div class="container">
            <?php
                require 'header.php';
            ?>
        
            <div id="mainContent">
                <h1>Topics</h1>
                <div id="topics">
        
                    <?php
                        require 'assets/config.php';
                        $sql = "SELECT * FROM `topics`";
                        $sqlquery = mysqli_query($connect,$sql);
        
                        if(mysqli_num_rows($sqlquery) > 0){
                            while($row = mysqli_fetch_assoc($sqlquery)){
                                echo '<div class="topic">
                                    <h2>'.$row['topicName'].'</h2>
                                    <p>'.$row['description'].'</p>
                                    <a href="questions.php?id='.$row['sr'].'" class="gobutton">Get Questions</a>
                                </div>';
                            }
                        }
                        else{
                            echo "<h2>No Record are found</h2>";
                        }
                    ?>
                    
                </div>
            </div>
    </div>

</body>
<script src="js/header.js"></script>
</html>