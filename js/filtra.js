function fazGet(url){
    let request = new XMLHttpRequest()
    request.open("GET", url, false)
    request.send()
    return request.responseText;
}

function filtrar(filtro){ 
    let data = fazGet("http://localhost:3333/suggestions");
    let apiLocais = JSON.parse(data);
    
    let listaLocais = apiLocais.filter((apiLocal) => {
        if(apiLocal.name.match(filtro)){
            return apiLocal
        }
    })    

    listaLocais.forEach(element => {
        let linha = criaLinha(element);
        suggestions.appendChild(linha);
    })
    return suggestions;
}

(function () {
    "use strict";
    let inputField = document.getElementById('input');
    let ulField = document.getElementById('suggestions');
    inputField.addEventListener('input', changeAutoComplete);
    ulField.addEventListener('click', selectItem);
  
    function changeAutoComplete({ target }) {
      let filtro = target.value;
      ulField.innerHTML = ``;
      if (filtro.length) {
        let autoCompleteValues = filtrar(filtro);
      }
    } 

    function selectItem({ target }) {
      if (target.tagName === 'LI') {
        inputField.value = target.textContent;
        ulField.innerHTML = ``;
      }
    }
  })();

  function criaLinha(local){
    ulLinha = document.createElement("ul");
    liNome = document.createElement("li");
    pRegiao = document.createElement("p");

    liNome.innerHTML = local.name
    pRegiao.innerHTML = local.region

    ulLinha.appendChild(liNome);
    ulLinha.appendChild(pRegiao);
    return ulLinha;
  }

  