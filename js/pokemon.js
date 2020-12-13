function pokemon() {
    var pokemon = document.getElementById('poke-input').value;
    // $('#poke-input').val();
    let url = 'https://pokeapi.co/api/v2/pokemon/'+pokemon
    // alert(url);
    fetch(url)
    .then(response => response.json() )
    .then(data => {
    let element = document.getElementById('poke');
    element.innerHTML = `
        <h4>TU POKEMON ES: </h4>
        <h1>${data.name}</h1>
        <img id='pokemon' src='${data.sprites.front_default}'/>
    `;

    console.log(data);
    })
    .catch(err=>console.log(err))
}