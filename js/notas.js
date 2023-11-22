//Modal de anotação
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("myModal");
    const btn = document.querySelector(".modal-btn");
    const closeBtn = document.querySelector(".fechar");

    btn.addEventListener("click", () => {
        modal.classList.add("show");
    });

    if (closeBtn) {
        // O elemento com a classe "close" foi encontrado no DOM
        console.log("Elemento com a classe 'close' encontrado no DOM.");
        // Adicione seu event listener aqui
        closeBtn.addEventListener("click", () => {
            modal.classList.remove("show");
        });
    } else {
        // O elemento com a classe "close" não foi encontrado no DOM
        console.log("Elemento com a classe 'close' não encontrado no DOM.");
    }

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
