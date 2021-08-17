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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Questions</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div id="hamburgermenu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div id="loginandsignbutton">
                        <?php
                            session_start();
                            if(isset($_SESSION['loggedin'])){
                                echo '<h3 id="username">'.$_SESSION['username'].'</h3>';
                                echo '<div class="logout">LogOut</div>';
                            }
                            else{
                                echo '<button id="signup">SignUp</button>
                                <button id="login">Login</button>';
                            }
                        ?>

                    </div>
                </div>
            </header>