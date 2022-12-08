
var signUp = document.getElementById("signUpForm") ;
var signIn = document.getElementById("signInForm") ;
var isSignedIn = document.getElementById("isSignedIn") ;
var displaySignUp = document.getElementById("displaySignUp") ;


// console.log(displaySignUp) ;

isSignedIn.addEventListener("click", ()=>{
    console.log("click 1") ;
    // signIn.style.visibility = "visible" ;
    // signUp.style.visibility = "hidden" ;
})

displaySignUp.addEventListener("click", ()=>{
    console.log("click 2") ;
    // signUp.style.visibilty = "hidden" ;
})


