const filtrosRef = $q(".acercaDeNosotros__filtro__texto");

const MostrarFiltros = () => {
    $q("#filtro0").addEventListener("click", function() {
        filtrosRef.innerHTML = "Sin filtro";
        apiFile = "../alimentos.json";
    })

    $q("#filtro1").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Alimentos";
    })

    $q("#filtro2").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Camas";
    })

    $q("#filtro3").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Juguetes";
    })

    $q("#filtro4").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Transportadoras";
    })

    $q("#filtro5").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Otros";
    })
}

MostrarFiltros()