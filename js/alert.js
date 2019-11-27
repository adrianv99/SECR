function validarSector() {
    var sector = document.getElementById("sector").value;
    if (sector === ""){
        alert("Por favor elija un sector.");
        return false;
    }
}