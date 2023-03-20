var resultado = document.getElementById('resultado');
var boton = document.getElementById('boton');
var botonshiny = document.getElementById('botonshiny');
boton.addEventListener("click",getMyService);
botonshiny.addEventListener("click",getShiny);


(function(){
    document.getElementById('table').style.visibility = "hidden";
})();

async function getMyService (){
    var pokemon = document.getElementById('txtPokemon').value;
    const response = await fetch('https://pokeapi.co/api/v2/pokemon/'+ pokemon);
    const myJson = await response.json();
    
    resultado.innerHTML =  '<img src='+myJson.sprites.front_default+'>' + '<img src='+myJson.sprites.back_default+'>';
    document.getElementById('num').textContent = myJson.game_indices[0].game_index;
    document.getElementById('nombre').textContent = myJson.species.name;
    document.getElementById('tipo').textContent = myJson.types[0].type.name 
    if(myJson.types[1].type.name != ''){
        document.getElementById('tipo').textContent = myJson.types[0].type.name + "-" + myJson.types[1].type.name;
         
    }
    document.getElementById('mov1').textContent = myJson.moves[0].move.name;
    document.getElementById('mov2').textContent = myJson.moves[1].move.name;
    document.getElementById('mov3').textContent = myJson.moves[2].move.name;
    document.getElementById('mov4').textContent = myJson.moves[3].move.name;
    document.getElementById('table').style.visibility = "visible";

}

async function getShiny (){
    var pokemon = document.getElementById('txtPokemon').value;
    const response = await fetch('https://pokeapi.co/api/v2/pokemon/'+ pokemon);
    const myJson = await response.json();
   
    resultado.innerHTML =  '<img src='+myJson.sprites.front_shiny+'>' + '<img src='+myJson.sprites.back_shiny+'>';
    document.getElementById('num').textContent = myJson.game_indices[0].game_index;
    document.getElementById('nombre').textContent = myJson.species.name;
    document.getElementById('tipo').textContent = myJson.types[0].type.name 
    if(myJson.types[1].type.name != ''){
        document.getElementById('tipo').textContent = myJson.types[0].type.name + "-" + myJson.types[1].type.name;
         
    }
    document.getElementById('mov1').textContent = myJson.moves[0].move.name;
    document.getElementById('mov2').textContent = myJson.moves[1].move.name;
    document.getElementById('mov3').textContent = myJson.moves[2].move.name;
    document.getElementById('mov4').textContent = myJson.moves[3].move.name;
    document.getElementById('table').style.visibility = "visible";


}