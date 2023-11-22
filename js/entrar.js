const pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

// Tema Escuro

const darkLight = document.querySelector("#darkLight");
const body = document.querySelector("body");

// Verifique se há uma preferência de tema no localStorage e aplique-a
if (localStorage.getItem("theme") === "dark") {
    body.classList.add("dark");
    darkLight.classList.replace("bx-sun", "bx-moon");
}

darkLight.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
        darkLight.classList.replace("bx-sun", "bx-moon");
    } else {
        localStorage.setItem("theme", "light");
        darkLight.classList.replace("bx-moon", "bx-sun");
    }
});
