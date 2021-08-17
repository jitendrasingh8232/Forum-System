<?php
    require 'assets/config.php';
    if(isset($_GET['questionid'])){
        $questionid = $_GET['questionid'];
    }
    else{
        header("Location: questions.php");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['addSolutionBtn'])){
            $desc = $_POST['addSolutionData'];
            $desc = str_replace("<","&lt;",$desc);
            $desc = str_replace(">","&gt;",$desc);
            $sql = "INSERT INTO `solutions` (`sr`, `description`, `questionid`) VALUES (NULL, '$desc', '$questionid');";
            $sqlquery = mysqli_query($connect,$sql);

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/signupandlogin.css">
    <link rel="stylesheet" href="css/question.css">
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
            <div id="data">
                <?php
                    $sql = "SELECT * FROM `questions` WHERE sr = '$questionid'";
                    $sqlquery = mysqli_query($connect,$sql);
                    if(mysqli_num_rows($sqlquery) > 0){
                        $row = mysqli_fetch_assoc($sqlquery);
                ?>
                
                <div id="question">
                    <h2><?php
                        echo $row['title'];
                    ?></h2>
                    <p><?php
                        echo $row['description']
                    ?></p>
                </div>
                <?php
                    }
                    else{
                        echo "<h2>Sorry No Questions Found !</h2>";
                    }
                ?>
                <div id="addsolution">
                    <h2>Add Solution </h2>
                    <div>
                        <form action=<?php echo 'question.php?questionid='.$questionid ?> method="post">
                            <textarea id="addSolutionData" name="addSolutionData" required></textarea>
                            <input type="submit" id="addSolutionBtn" value = "Add Solution" name="addSolutionBtn">
                        </form>
                    </div>
                </div>
                <div id="previousSolutions">
                    <h2>Previous Solutions </h2>
                    <?php
                        $sql = "SELECT * FROM `solutions` WHERE questionid = '$questionid'";
                        $sqlquery = mysqli_query($connect,$sql);
                        if (mysqli_num_rows($sqlquery) >  0){
                            while($row = mysqli_fetch_assoc($sqlquery)){
                                echo '<div class="solution">
                                <p>'.$row['description'].'</p>
                            </div>';
                            }
                        }
                        else{
                            echo "<h2>Sorry No Solutions Found. Be the First Person to solve this problem. </h2>";
                        }
                    ?>
                </div>

            </div>
    </div>
</body>
<script src="js/header.js"></script>
</html>