// VIEW DETAILS

let detailsButtons = document.querySelectorAll(".details-btn");

detailsButtons.forEach(function(button){

    button.addEventListener("click", function(){

        let details =
        this.parentElement.querySelector(".details");

        if(details.style.display === "block"){

            details.style.display = "none";
        }

        else{

            details.style.display = "block";
        }

    });

});



// LIKE BUTTON

let likeButtons = document.querySelectorAll(".like-btn");

likeButtons.forEach(function(button){

    button.addEventListener("click", function(){

        button.classList.toggle("like-active");

    });

});




// SEARCH FILTER

let searchBar = document.getElementById("searchBar");

searchBar.addEventListener("keyup", function(){

    let searchValue = searchBar.value.toLowerCase();

    let events = document.querySelectorAll(".event-card");

    events.forEach(function(event){

        let text = event.textContent.toLowerCase();

        if(text.includes(searchValue)){

            event.style.display = "block";
        }

        else{

            event.style.display = "none";
        }

    });

});