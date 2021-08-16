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
    <div id="loginform">
        <div>
            <h2>Login Now</h2>
            <h3 id="logincross">&times;</h3>
        </div>
        <form method="post">
            <input type="email" id="emailforLogin" placeholder="Email" require>
            <input type="password" id="passwordforLogin" placeholder="Password" require>
            <button type="button" id="loginformsubmitBtn">Login</button>
        </form>
    </div>