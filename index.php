<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="message"></div>
    <div class="message" style="background:red;"></div>
    <div id="signupform">
        <div>
            <h2>Signup Now</h2>
            <h3 id="signupcross">&times;</h3>
        </div>
        <form method="post">
            <div>
                <input type="text" id="firstname" placeholder="First Name" require>
                <input type="text" id="lastname" placeholder="Last Name" require>
            </div>
            <input type="email" id="email" placeholder="Email" require>
            <input type="password" id="password" placeholder="Password" require>
            <input type="password" id="cpassword" placeholder="Confirm Password" require>
            <button type="button" id="signupformsubmitBtn">Create Account</button>
        </form>
    </div>
    
    <div class="container">
            <div id="hamburgurmenudiv">
                <div id="canclebtn">
                    <div></div>
                    <div></div>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Questions</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <header>
                <h2>LOGO</h2>
                <div>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Questions</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div id="hamburgermenu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div>
                        <button id="signup">SignUp</button>
                        <button id="login">Login</button>
                    </div>
                </div>
            </header>
        
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
                                    <button class="gobutton">Read More</button>
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
<script src="js/index.js"></script>
</html>