let hamburgermenu = document.getElementById('hamburgermenu');
hamburgermenu.addEventListener("click",()=>{
    let hamburgurmenudiv = document.getElementById("hamburgurmenudiv");
    hamburgurmenudiv.style.transform = "scale(1)";
});

let canclebtn = document.getElementById("canclebtn");
canclebtn.addEventListener("click",()=>{
    let hamburgurmenudiv = document.getElementById("hamburgurmenudiv");
    hamburgurmenudiv.style.transform = "scale(0)";
});

let signup = document.getElementById("signup");
signup.addEventListener("click",()=>{
    let signupform = document.getElementById("signupform");
    signupform.style.display = "block";

    let container = document.getElementsByClassName("container")[0];
    container.classList.add("active");
});

function removesignupform(){
    let signupform = document.getElementById("signupform");
    signupform.style.display = "none";

    let container = document.getElementsByClassName("container")[0];
    container.classList.remove("active");
}

let signupcross = document.getElementById("signupcross");
signupcross.addEventListener("click",removesignupform);


let signupformsubmitBtn = document.getElementById("signupformsubmitBtn");
signupformsubmitBtn.addEventListener("click",()=>{
    console.log("clicked")
    let firstname = document.getElementById("firstname");
    let lastname = document.getElementById("lastname");
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let cpassword = document.getElementById("cpassword");

    let data = {
        "firstname":firstname.value,
        "lastname":lastname.value,
        "email":email.value,
        "password":password.value,
        "cpassword":cpassword.value
    }
    console.log(data)

    data = JSON.stringify(data)

    fetch("assets/signup.php",{
        method:"post",
        body:data
    }).then((response)=>{
        return response.text();
    }).then((data1)=>{
        data1 = JSON.parse(data1);
        console.log(data1['result']);

        if(data1['isfail'] == 'success'){
            console.log("This is an success");
            removesignupform();
            let message = document.getElementsByClassName("message")[0];
            message.innerHTML = `<p><strong>Success ! </strong>${data1['result']}</p><h2 class="removeMessage" onclick="removeMessageBox(this)">&times;</h2>`;
            message.style.top = "0px";
            setTimeout(()=>{
                message.style.top = "-50px";
            },3000);
        }
        else{
            console.log("This is an fail");
            removesignupform();
            let message = document.getElementsByClassName("message")[1];
            message.innerHTML = `<p><strong>Error ! </strong>${data1['result']}</p><h2 class="removeMessage" onclick="removeMessageBox(this)">&times;</h2>`;
            message.style.top = "0px";
            setTimeout(()=>{
                message.style.top = "-50px";
            },5000);
        }
    });
});


function removeMessageBox(elem){
    elem.parentElement.style.top = "-50px";
}