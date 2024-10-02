<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <script type="module" src="{{ asset('js/tablero.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Tablero</title>
</head>

<body>
        <!-- <img src="{{asset('storage/3d/piezas/TN.png')}}"> -->
    <div class="container">
        <div id="tablero">
            <!-- <div class="pieza torre"></div> -->
            <div id="partida">
                <table>
                    <!-- Fila 1 -->
                    <tr>
                        <td class="casilla" id="A1"></td>
                        <td class="casilla" id="B1"></td>
                        <td class="casilla" id="C1"></td>
                        <td class="casilla" id="D1"></td>
                        <td class="casilla" id="E1"></td>
                        <td class="casilla" id="F1"></td>
                        <td class="casilla" id="G1"></td>
                        <td class="casilla" id="H1"></td>
                    </tr>
                    <!-- Fila 2 -->
                    <tr>
                        <td class="casilla" id="A2"></td>
                        <td class="casilla" id="B2"></td>
                        <td class="casilla" id="C2"></td>
                        <td class="casilla" id="D2"></td>
                        <td class="casilla" id="E2"></td>
                        <td class="casilla" id="F2"></td>
                        <td class="casilla" id="G2"></td>
                        <td class="casilla" id="H2"></td>
                    </tr>
                    <!-- Fila 3 -->
                    <tr>
                        <td class="casilla" id="A3"></td>
                        <td class="casilla" id="B3"></td>
                        <td class="casilla" id="C3"></td>
                        <td class="casilla" id="D3"></td>
                        <td class="casilla" id="E3"></td>
                        <td class="casilla" id="F3"></td>
                        <td class="casilla" id="G3"></td>
                        <td class="casilla" id="H3"></td>
                    </tr>
                    <!-- Fila 4 -->
                    <tr>
                        <td class="casilla" id="A4"></td>
                        <td class="casilla" id="B4"></td>
                        <td class="casilla" id="C4"></td>
                        <td class="casilla" id="D4"></td>
                        <td class="casilla" id="E4"></td>
                        <td class="casilla" id="F4"></td>
                        <td class="casilla" id="G4"></td>
                        <td class="casilla" id="H4"></td>
                    </tr>
                    <!-- Fila 5 -->
                    <tr>
                        <td class="casilla" id="A5"></td>
                        <td class="casilla" id="B5"></td>
                        <td class="casilla" id="C5"></td>
                        <td class="casilla" id="D5"></td>
                        <td class="casilla" id="E5"></td>
                        <td class="casilla" id="F5"></td>
                        <td class="casilla" id="G5"></td>
                        <td class="casilla" id="H5"></td>
                    </tr>
                    <!-- Fila 6 -->
                    <tr>
                        <td class="casilla" id="A6"></td>
                        <td class="casilla" id="B6"></td>
                        <td class="casilla" id="C6"></td>
                        <td class="casilla" id="D6"></td>
                        <td class="casilla" id="E6"></td>
                        <td class="casilla" id="F6"></td>
                        <td class="casilla" id="G6"></td>
                        <td class="casilla" id="H6"></td>
                    </tr>
                    <!-- Fila 7 -->
                    <tr>
                        <td class="casilla" id="A7"></td>
                        <td class="casilla" id="B7"></td>
                        <td class="casilla" id="C7"></td>
                        <td class="casilla" id="D7"></td>
                        <td class="casilla" id="E7"></td>
                        <td class="casilla" id="F7"></td>
                        <td class="casilla" id="G7"></td>
                        <td class="casilla" id="H7"></td>
                    </tr>
                    <!-- Fila 8 -->
                    <tr>
                        <td class="casilla" id="A8"></td>
                        <td class="casilla" id="B8"></td>
                        <td class="casilla" id="C8"></td>
                        <td class="casilla" id="D8"></td>
                        <td class="casilla" id="E8"></td>
                        <td class="casilla" id="F8"></td>
                        <td class="casilla" id="G8"></td>
                        <td class="casilla" id="H8"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div id="themes">
        <label for="themeSelector">Elige un tema:</label>
        <select id="themeSelector">
            <option value="default-theme">Predeterminado</option>
            <option value="default-theme-black">Predeterminado Oscuro</option>
            <option value="theme1">Tema 1</option>
            <option value="theme2">Tema 2</option>
            <option value="wood">Wood</option>
        </select>

        <button id="start">Empezar</button>
        <button id="posiciones">Ver</button>
        <button id="clear">Limpiar</button>
    </div>

    <div id="themes">
<textarea name="png" id="png"></textarea>
<button id="pngButton">Rellenar Tablero con PNG</button>
    </div>

</body>

</html>