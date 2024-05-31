var apiFile = "../json/productos.json";
    const display = $q(".stock__tarjeta");

    const GetData = async () => {
        const res = await fetch(apiFile);
        const data = await res.json();
        return data
    }

    const DisplayData = async () => {

        const payload = await GetData ();

        let dataDisplay = payload.map((object) => {
            const { imagen, descripcion, precio, stock ,caracteristicas } = object;

            return `
                <div class="stock__tarjeta__contenedor">
                    <img src="${imagen}" class="stock__tarjeta__contenedor__imagen" />

                    <div class="stock__tarjeta__contenedor__descripcion">
                        <div>${descripcion}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__precio">
                        <div>${precio}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__stock">
                        <div>Stock: ${stock}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__caracteristicas">
                        <div class="stock__tarjeta__contenedor__caracteristicas">Características</div>
                        <ul>
                            ${caracteristicas[0] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[0]}</li>` : ""}
                            ${caracteristicas[1] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[1]}</li>` : ""}
                            ${caracteristicas[2] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[2]}</li>` : ""}
                            ${caracteristicas[3] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[3]}</li>` : ""}
                            ${caracteristicas[4] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[4]}</li>` : ""}
                        </ul>
                    </div>
                    <form>
                        <input type="number" placeholder="Agregar al carro" />
                        <input type="submit" placeholder="Agregar al carro" />
                    </form>
                </div>
            `
        }).join("");
        display.innerHTML = dataDisplay;
    }

    DisplayData();


const filtrosRef = $q(".stock__filtro__texto");

const MostrarFiltros = () => {
    $q("#filtro0").addEventListener("click", function() {
        filtrosRef.innerHTML = "Sin filtro";
        $q(".stock__tarjeta").innerHTML = ""

    apiFile = "../json/productos.json";

    const DisplayData = async () => {
        const payload = await GetData ();

        let dataDisplay = payload.map((object) => {
            const { imagen, descripcion, precio, stock ,caracteristicas } = object;

            return `
                <div class="stock__tarjeta__contenedor">
                    <img src="${imagen}" class="stock__tarjeta__contenedor__imagen" />

                    <div class="stock__tarjeta__contenedor__descripcion">
                        <div>${descripcion}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__precio">
                        <div>${precio}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__stock">
                        <div>Stock: ${stock}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__caracteristicas">
                        <div class="stock__tarjeta__contenedor__caracteristicas">Características</div>
                        <ul>
                            ${caracteristicas[0] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[0]}</li>` : ""}
                            ${caracteristicas[1] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[1]}</li>` : ""}
                            ${caracteristicas[2] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[2]}</li>` : ""}
                            ${caracteristicas[3] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[3]}</li>` : ""}
                            ${caracteristicas[4] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[4]}</li>` : ""}
                        </ul>
                    </div>
                    <button>Agregar al carro</button>
                </div>
            `
        }).join("");
        display.innerHTML = dataDisplay;
    }

    DisplayData();
})

    $q("#filtro1").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Alimentos";
        $q(".stock__tarjeta").innerHTML = ""

    apiFile = "../json/alimentos.json";

    const DisplayData = async () => {
        const payload = await GetData ();

        let dataDisplay = payload.map((object) => {
            const { imagen, descripcion, precio, stock ,caracteristicas } = object;

            return `
                <div class="stock__tarjeta__contenedor">
                    <img src="${imagen}" class="stock__tarjeta__contenedor__imagen" />

                    <div class="stock__tarjeta__contenedor__descripcion">
                        <div>${descripcion}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__precio">
                        <div>${precio}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__stock">
                        <div>Stock: ${stock}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__caracteristicas">
                        <div class="stock__tarjeta__contenedor__caracteristicas">Características</div>
                        <ul>
                            ${caracteristicas[0] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[0]}</li>` : ""}
                            ${caracteristicas[1] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[1]}</li>` : ""}
                            ${caracteristicas[2] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[2]}</li>` : ""}
                            ${caracteristicas[3] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[3]}</li>` : ""}
                            ${caracteristicas[4] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[4]}</li>` : ""}
                        </ul>
                    </div>
                </div>
            `
        }).join("");
        display.innerHTML = dataDisplay;
    }

    DisplayData();
})

    $q("#filtro2").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Camas";
        $q(".stock__tarjeta").innerHTML = ""

    apiFile = "../json/camas.json";

    const DisplayData = async () => {
        const payload = await GetData ();

        let dataDisplay = payload.map((object) => {
            const { imagen, descripcion, precio, stock ,caracteristicas } = object;

            return `
                <div class="stock__tarjeta__contenedor">
                    <img src="${imagen}" class="stock__tarjeta__contenedor__imagen" />

                    <div class="stock__tarjeta__contenedor__descripcion">
                        <div>${descripcion}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__precio">
                        <div>${precio}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__stock">
                        <div>Stock: ${stock}</div>
                    </div>

                    <div class="stock__tarjeta__contenedor__caracteristicas">
                        <div class="stock__tarjeta__contenedor__caracteristicas">Características</div>
                        <ul>
                            ${caracteristicas[0] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[0]}</li>` : ""}
                            ${caracteristicas[1] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[1]}</li>` : ""}
                            ${caracteristicas[2] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[2]}</li>` : ""}
                            ${caracteristicas[3] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[3]}</li>` : ""}
                            ${caracteristicas[4] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[4]}</li>` : ""}
                        </ul>
                    </div>
                </div>
            `
        }).join("");
        display.innerHTML = dataDisplay;
    }

    DisplayData();

    })

    $q("#filtro3").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Juguetes";
        $q(".stock__tarjeta").innerHTML = ""

        apiFile = "../json/juguetes.json";
        const display = $q(".stock__tarjeta");
    
        const DisplayData = async () => {
            const payload = await GetData ();
    
            let dataDisplay = payload.map((object) => {
                const { imagen, descripcion, precio, stock ,caracteristicas } = object;
    
                return `
                    <div class="stock__tarjeta__contenedor">
                        <img src="${imagen}" class="stock__tarjeta__contenedor__imagen" />
    
                        <div class="stock__tarjeta__contenedor__descripcion">
                            <div>${descripcion}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__precio">
                            <div>${precio}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__stock">
                            <div>Stock: ${stock}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__caracteristicas">
                            <div class="stock__tarjeta__contenedor__caracteristicas">Características</div>
                            <ul>
                                ${caracteristicas[0] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[0]}</li>` : ""}
                                ${caracteristicas[1] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[1]}</li>` : ""}
                                ${caracteristicas[2] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[2]}</li>` : ""}
                                ${caracteristicas[3] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[3]}</li>` : ""}
                                ${caracteristicas[4] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[4]}</li>` : ""}
                            </ul>
                        </div>
                    </div>
                `
            }).join("");
            display.innerHTML = dataDisplay;
        }
    
        DisplayData();    
    })

    $q("#filtro4").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Transportadoras";
        $q(".stock__tarjeta").innerHTML = ""

        apiFile = "../json/transportadoras.json";
        const display = $q(".stock__tarjeta");
    
        const DisplayData = async () => {
            const payload = await GetData ();
    
            let dataDisplay = payload.map((object) => {
                const { imagen, descripcion, precio, stock ,caracteristicas } = object;
    
                return `
                    <div class="stock__tarjeta__contenedor">
                        <img src="${imagen}" class="stock__tarjeta__contenedor__imagen" />
    
                        <div class="stock__tarjeta__contenedor__descripcion">
                            <div>${descripcion}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__precio">
                            <div>${precio}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__stock">
                            <div>Stock: ${stock}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__caracteristicas">
                            <div class="stock__tarjeta__contenedor__caracteristicas">Características</div>
                            <ul>
                                ${caracteristicas[0] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[0]}</li>` : ""}
                                ${caracteristicas[1] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[1]}</li>` : ""}
                                ${caracteristicas[2] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[2]}</li>` : ""}
                                ${caracteristicas[3] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[3]}</li>` : ""}
                                ${caracteristicas[4] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[4]}</li>` : ""}
                            </ul>
                        </div>
                    </div>
                `
            }).join("");
            display.innerHTML = dataDisplay;
        }
    
        DisplayData();    
    })

    $q("#filtro5").addEventListener("click", function() {
        filtrosRef.innerHTML = "Filtrar por categoria: Otros";
        $q(".stock__tarjeta").innerHTML = ""

        apiFile = "../json/otros.json";
        const display = $q(".stock__tarjeta");
    
        const DisplayData = async () => {
            const payload = await GetData ();
    
            let dataDisplay = payload.map((object) => {
                const { imagen, descripcion, precio, stock ,caracteristicas } = object;
    
                return `
                    <div class="stock__tarjeta__contenedor">
                        <img src="${imagen}" class="stock__tarjeta__contenedor__imagen" />
    
                        <div class="stock__tarjeta__contenedor__descripcion">
                            <div>${descripcion}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__precio">
                            <div>${precio}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__stock">
                            <div>Stock: ${stock}</div>
                        </div>
    
                        <div class="stock__tarjeta__contenedor__caracteristicas">
                            <div class="stock__tarjeta__contenedor__caracteristicas">Características</div>
                            <ul>
                                ${caracteristicas[0] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[0]}</li>` : ""}
                                ${caracteristicas[1] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[1]}</li>` : ""}
                                ${caracteristicas[2] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[2]}</li>` : ""}
                                ${caracteristicas[3] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[3]}</li>` : ""}
                                ${caracteristicas[4] ? `<li class="stock__tarjeta__contenedor__caracteristicas">${caracteristicas[4]}</li>` : ""}
                            </ul>
                        </div>
                    </div>
                `
            }).join("");
            display.innerHTML = dataDisplay;
        }
    
        DisplayData();    
    })
}

MostrarFiltros()