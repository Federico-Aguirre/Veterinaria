let fecha = new Date();
let diaActual = fecha.getDate()
let mesActual = fecha.getMonth() + 1
let añoActual = fecha.getUTCFullYear()

if(diaActual < 10) {
    diaActual = '0' + diaActual
}

if(mesActual < 10) {
    mesActual = '0' + mesActual
}

let minDate = añoActual + "-" + mesActual + "-" + diaActual + " " + "00:00"

$q(".turnos__formulario__fecha").setAttribute('min', minDate)

console.log(minDate)