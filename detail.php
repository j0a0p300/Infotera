<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/detail.css" rel="stylesheet">
    <title>Infotera</title>
</head>
<body>
    <div id="cabec">
        <div id="logo">
            Infotera
        </div>
        <div id="menu">
            <a href="index.html">Página Inicial</a> <a href="#">&rightarrow;] Iniciar Sessão</a>
        </div>
    </div>

    <div id="filtro">
        <div id="Destino">
            <svg id="imgDestino" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.1509 6.72727C14.1509 11.1818 7.57546 15 7.57546 15C7.57546 15 1 11.1818 1 6.72727C1 5.2083 1.69277 3.75155 2.92591 2.67748C4.15905 1.60341 5.83154 1 7.57546 1C9.31939 1 10.9919 1.60341 12.225 2.67748C13.4582 3.75155 14.1509 5.2083 14.1509 6.72727Z" stroke="#0080FF" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.57546 8.63636C8.78597 8.63636 9.76729 7.78163 9.76729 6.72727C9.76729 5.67291 8.78597 4.81818 7.57546 4.81818C6.36495 4.81818 5.38364 5.67291 5.38364 6.72727C5.38364 7.78163 6.36495 8.63636 7.57546 8.63636Z" stroke="#0080FF" stroke-linecap="round" stroke-linejoin="round"/>
            </svg><label for="input" id="nomeDestino">Destino</label>
            <input placeholder="Digite o Destino" id="input" />
            <ul id="suggestions"></ul>
        </div>
        <div id="Entrada">
            <svg id="imgEntrada" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6602 0.999985V3.79998M4.81539 0.999985V3.79998M1.16235 6.59998H14.3133M2.62357 2.39998H12.8521C13.6591 2.39998 14.3133 3.02679 14.3133 3.79998V13.6C14.3133 14.3732 13.6591 15 12.8521 15H2.62357C1.81656 15 1.16235 14.3732 1.16235 13.6V3.79998C1.16235 3.02679 1.81656 2.39998 2.62357 2.39998Z" stroke="#0080FF" stroke-linecap="round" stroke-linejoin="round"/>
            </svg><label for="dtEntrada" id="nomeEntrada">Entrada</label>
            <input type="date" placeholder="dd/mm/aaaa" id="dtEntrada"></input>
        </div>
        <div id="Saida">
            <svg id="imgSaida" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6602 0.999985V3.79998M4.81539 0.999985V3.79998M1.16235 6.59998H14.3133M2.62357 2.39998H12.8521C13.6591 2.39998 14.3133 3.02679 14.3133 3.79998V13.6C14.3133 14.3732 13.6591 15 12.8521 15H2.62357C1.81656 15 1.16235 14.3732 1.16235 13.6V3.79998C1.16235 3.02679 1.81656 2.39998 2.62357 2.39998Z" stroke="#0080FF" stroke-linecap="round" stroke-linejoin="round"/>
            </svg><label for="dtSaida" id="nomeSaida">Saída</label>
            <input type="date" placeholder="dd/mm/aaaa" id="dtSaida"></input>
        </div>
        <div id="Hospedes">
            <svg id="imgHospedes" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.4509 15V13.4444C11.4509 12.6193 11.1796 11.828 10.6967 11.2446C10.2138 10.6611 9.55883 10.3333 8.8759 10.3333H3.72589C3.04295 10.3333 2.38799 10.6611 1.90508 11.2446C1.42217 11.828 1.15088 12.6193 1.15088 13.4444V15M15.3134 15V13.4444C15.313 12.7551 15.1231 12.0855 14.7735 11.5407C14.424 10.9959 13.9346 10.6068 13.3822 10.4344M10.8072 1.10111C11.3611 1.27246 11.852 1.66166 12.2026 2.20735C12.5532 2.75305 12.7435 3.4242 12.7435 4.115C12.7435 4.8058 12.5532 5.47695 12.2026 6.02265C11.852 6.56834 11.3611 6.95754 10.8072 7.12889M8.8759 4.11111C8.8759 5.82933 7.72303 7.22222 6.30089 7.22222C4.87876 7.22222 3.72589 5.82933 3.72589 4.11111C3.72589 2.39289 4.87876 1 6.30089 1C7.72303 1 8.8759 2.39289 8.8759 4.11111Z" stroke="#0080FF" stroke-linecap="round" stroke-linejoin="round"/>
            </svg><label for="qntHospede" id="nomeHospede">Hóspedes</label>
            <input placeholder="2 adultos, 0 crianças" id="qntHospede" />
        </div>
        <div>
            <button id="botaoPesquisa">
                <a href="search.html">
                Pesquisar
                </a>
            </button>
        </div>
    </div>

    <div id="infos">
        <img id="imgDetails" src="img/quarto.png" alt=""><span id="nomeQuarto">Nome do Quarto</span>
    </div>

<script src="js/filtra.js"></script>

</body>
</html>