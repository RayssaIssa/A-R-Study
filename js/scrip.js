let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});

// Dark Mode
const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");

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