const filtroInput = document.getElementById("filtro");
const filas = document.querySelectorAll("table tbody tr");
filtroInput.addEventListener("input", function () {
    const filtro = filtroInput.value.trim().toLowerCase();
    filas.forEach(function (fila) {
        const textoFila = fila.textContent.toLowerCase();
        if (textoFila.includes(filtro)) {
            fila.style.display = "";
        } else {
            fila.style.display = "none";
        }
    });
});
