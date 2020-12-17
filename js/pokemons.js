function pokemon() {
    var pokemon = document.getElementById('poke-input').value;
    // $('#poke-input').val();
    let url = 'https://pokeapi.co/api/v2/pokemon/'+pokemon
    // alert(url);
    fetch(url)
    .then(response => response.json() )
    .then(data => {
    let element = document.getElementById('poke');
    let element2 = document.getElementById('poke-habilidades');

    element.innerHTML = `
        <h4>TU POKEMON ES: </h4>
        <h1>${data.name}</h1>
        <img id='pokemon' src='${data.sprites.front_default}'/>
    `;

    element2.innerHTML = `<br>
    <h3><b>HABILIDADES: </b></h3>
    <p><b>-${data.abilities[0].ability.name} <br>
        -${data.abilities[1].ability.name}<br>
        -${data.abilities[2].ability.name}</b></p>
    `;

    console.log(data);
    })
    .catch(err=>console.log(err))
}