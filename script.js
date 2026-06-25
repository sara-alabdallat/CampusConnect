document.getElementById("registerForm").addEventListener("submit", function(e){

    let name = document.getElementById("name").value;
    let id = document.getElementById("id").value;
    let email = document.getElementById("email").value;

    if(name === "" || id === "" || email === ""){

        alert("Please fill all fields");

        e.preventDefault();
    }

    else if(!email.includes("@")){

        alert("Please enter a valid email");

        e.preventDefault();
    }

    else{

        alert("Registration Successful!");

    }

});

