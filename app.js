
var signUp = document.getElementById("signUpForm") ;
var signIn = document.getElementById("signInForm") ;
var isSignedIn = document.getElementById("isSignedIn") ;
var displaySignUp = document.getElementById("displaySignUp") ;

// ===================================================>
// Validation 
var submitData = document.getElementById("submitData") ;
var fullName = document.querySelector('input[name="fullName"]') ;
var adresse = document.querySelector('input[name="adresse"]') ;
var email = document.querySelector('input[name="email"]') ;
var CIN = document.querySelector('input[name="CIN"]') ;
var pwd = document.querySelector('input[name="pwd"]') ;
var cPwd = document.querySelector('input[name="cPwd"]') ;


function showEroor(input, message) {
    const formControl = input.parentElement ;
    const small = formControl.querySelector("small") ;
    small.innerText = message ;
}


// signUp.addEventListener("submit", (e)=>{
//     // e.preventDefault() ;
//     if(fullName.value = ""){
//         console.log("gi") ;
//         e.preventDefault() ;
//         showEroor(fullName, "userName is required!!") ;
//     }
    
// })




// ========================================>
isSignedIn.addEventListener("click", () => {
    console.log("click 1");
    // signIn.style.visibility = "visible" ;
    // signUp.style.visibility = "hidden" ;
})

displaySignUp.addEventListener("click", () => {
    console.log("click 2");
    // signUp.style.visibilty = "hidden" ;
})
// ==============================================>

