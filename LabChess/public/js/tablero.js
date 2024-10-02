// Archivo: js/script.js
import Partida from "../js/partida.js";

document.addEventListener("DOMContentLoaded", function () {
    const themeSelector = document.getElementById('themeSelector');
    const tablero = document.getElementById('tablero');
    const body = document.body;

    const partida = new Partida();

    partida.colocarPiezasComienzo();

    console.table(partida);
    console.log(partida.Posicines);

    let startButton = document.getElementById("start");

    startButton.addEventListener('click', (e) => {
        partida.colocarPiezasComienzo();
        partida.colocarPiezas();
        startButton.disabled = true;
    });

    document.getElementById("clear").addEventListener('click', (e) => {
        partida.eliminarPiezas();
        startButton.disabled = false;
    });

    document.getElementById("posiciones").addEventListener('click', (e) => {
        partida.verPosiciones();
    });

    document.getElementById("pngButton").addEventListener('click', (e) => {
        const PNG = document.getElementById("png").value;
        console.log(PNG)
        partida.cargarDesdeASCII(PNG);
        partida.colocarPiezas()
    });

    let casillas = document.getElementsByClassName("casilla");

    for (let casilla of casillas) {
        casilla.addEventListener('click', function (e) {
            clickEnCasilla(e, partida);
        });
        casilla.addEventListener('dragover', dragOver);
        casilla.addEventListener('drop', function (e) {
            drop(e, partida);
        });
    };

    const themes = {
        'default-theme': '3d',
        'default-theme-black': 'paint',
        'theme1': 'theme1',
        'theme2': 'theme1',
        'wood': 'metal'
    };

    function changeTheme(theme) {
        Object.keys(themes).forEach(t => {
            body.classList.remove(t);
            tablero.classList.remove(t);
        });

        body.classList.add(theme);
        tablero.classList.add(theme);

        // partida.Tema = `/proyecto/tableroAjedrez/img/${themes[theme]}/piezas`; hay veces que no funciona la ruta de las imagenes de las piezas

        partida.Tema = `storage/${themes[theme]}/piezas`;
    }

    const savedTheme = localStorage.getItem('selectedTheme');
    if (savedTheme) {
        themeSelector.value = savedTheme;
        changeTheme(savedTheme);
    } else {
        changeTheme('default-theme');
    }

    themeSelector.addEventListener('change', function () {
        const selectedTheme = themeSelector.value;
        changeTheme(selectedTheme);
        localStorage.setItem('selectedTheme', selectedTheme);
    });
});

function clickEnCasilla(e, partida) {
    let casillaId = e.target.id;
    partida.buscarEnCasilla(casillaId);
}

function dragOver(e) {
    e.preventDefault();
}

function drop(e, partida) {
    e.preventDefault();
    const data = e.dataTransfer.getData("text");
    const [piezaId, origenId] = data.split(',');
    const pieza = document.getElementById(piezaId);

    //continuar con la casilla de destino
    const casillaDestino = e.target.closest('.casilla');
    console.log(casillaDestino)

    if (e.target.classList.contains("casilla")) {
        console.log("pieza sin comer")
        const [letraOrigen, numeroOrigen] = origenId.split(/(\d+)/).filter(Boolean);
        const [letraDestino, numeroDestino] = e.target.id.split(/(\d+)/).filter(Boolean);
        console.log(letraDestino, numeroDestino)

        if (partida.verificarMovimiento(letraOrigen, numeroOrigen, letraDestino, numeroDestino)) {
            e.target.appendChild(pieza);
            partida.actualizarPosicion(letraOrigen, numeroOrigen, letraDestino, numeroDestino, false);
        } else {
            console.log(`Movimiento inválido para la pieza ${pieza.id}`);
        }
    } else {
        console.log("pieza comer")
        const [letraOrigen, numeroOrigen] = origenId.split(/(\d+)/).filter(Boolean);
        const [letraDestino, numeroDestino] = casillaDestino.id.split(/(\d+)/).filter(Boolean);
        // console.log(letraOrigen, numeroOrigen, letraDestino, numeroDestino)
        if (partida.comerOtraPieza(letraOrigen, numeroOrigen, letraDestino, numeroDestino)) {
            partida.actualizarPosicion(letraOrigen, numeroOrigen, letraDestino, numeroDestino, true);

        } else {
            console.log("no actualizo")
        }
    }
}

document.addEventListener('dragstart', function (e) {
    if (e.target.classList.contains('pieza')) {
        const origenId = e.target.parentElement.id;
        e.dataTransfer.setData("text", `${e.target.id},${origenId}`);
    }
});

function reload() {
    window.location.reload();
}
