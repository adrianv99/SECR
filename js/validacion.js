function validarSector() {
    var sector = document.getElementById("sector").value;
    var fecha = document.getElementById("fecha").value;

    if (sector === ""){
        alert("Por favor elija un sector.");
        return false;
    }
}