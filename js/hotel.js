function fazGet(url){
    let request = new XMLHttpRequest()
    request.open("GET", url, false)
    request.send()
    return request.responseText;
}

function getHotel(){ 
    let data = fazGet("http://localhost:3333/hotels");
    let apiHoteis = JSON.parse(data);
   
    apiHoteis.forEach(element => {
        let linha = criaLinha(element);
        cardHotel.appendChild(linha);
        
    })
    console.log(apiHoteis)
    return cardHotel;    
}

function criaLinha(hotel){
    divRow = document.createElement("div");
    divCard = document.createElement("div");
    imgQuarto = document.createElement("img");
    nomeHotel = document.createElement("h2");
    pEstrelas = document.createElement("p");
    btDetalhes = document.createElement("button");

    imgQuarto.innerHTML = hotel.image
    nomeHotel.innerHTML = hotel.name
    pEstrelas.innerHTML = hotel.stars

    divRow.appendChild(divCard);
    divCard.appendChild(imgQuarto);
    divCard.appendChild(nomeHotel);
    divCard.appendChild(pEstrelas);
    divCard.appendChild(btDetalhes);
    
    return divRow;
  }

getHotel();