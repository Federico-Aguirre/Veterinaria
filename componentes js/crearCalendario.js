const calendario = document.querySelector(".turnos__calendario")

//this is the calendario
const startPieces = [
    "Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom", 
    "1",   "2",   "3",   "4",   "5",   "6",   "7",
    "8",   "9",   "10",  "11",  "12",  "13",  "14",
    "15",  "16",  "17",  "18",  "19",  "20",  "21",
    "22",  "23",  "24",  "25",  "26",  "27",  "28",
    "29",  "30",  "31",  "  ",  "  ",  "  ",  "  ",
]

function crearCalendario() {
    startPieces.forEach((startPiece, i) => {
        const square = document.createElement('div')
        square.classList.add('square')
        square.innerHTML = startPiece
        square.setAttribute('square-id', i -6)

        calendario.append(square)
    })
}

crearCalendario()