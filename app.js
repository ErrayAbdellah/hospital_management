
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
var birthDate = document.querySelector('input[name="birthDate"]') ;
var pwd = document.querySelector('input[name="pwd"]') ;
var cPwd = document.querySelector('input[name="cPwd"]') ;
var icon = document.getElementsByClassName("fa-sharp") ;



function showEroor(input, message) {
    const formControl = input.parentElement ;
    const icon = formControl.querySelector(".fa-sharp") ;
    const small = formControl.querySelector("small") ;
    small.innerText = message ;
    icon.style.visibility = "visible" ;
}


signUp.addEventListener("submit", (e)=>{
    if(fullName.value == ""){
        e.preventDefault() ;
        showEroor(fullName, "UserName is required!!  ") ; 
    }
    if(email.value == ""){
        e.preventDefault() ;
        showEroor(email, "Email is required") ;
    }
    if(adresse.value == ""){
        e.preventDefault() ;
        showEroor(adresse, "Adresse is required") ;
    }
    if(CIN.value == "" ){
        e.preventDefault() ;
        showEroor(CIN, "CIN is  required !!") ;
    }
    if(pwd.value == "" || pwd.length < 8){
        e.preventDefault() ;
        showEroor(pwd, "Pwd is defeintely required and must be greater than 8 characters") ;
    }
    if(birthDate.value == ""){
        e.preventDefault() ;
        showEroor(birthDate, "Please enter your birthdate !!")
    }
    
    
})




// ========================================>

// isSignedIn.addEventListener("click", () => {
//     console.log("click 1");
//     // signIn.style.visibility = "visible" ;
//     // signUp.style.visibility = "hidden" ;
// })

// displaySignUp.addEventListener("click", () => {
//     console.log("click 2");
//     // signUp.style.visibilty = "hidden" ;
// })

// ==============================================>

