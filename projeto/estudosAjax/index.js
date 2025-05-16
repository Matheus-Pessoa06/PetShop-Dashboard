$(document).ready(function(){
    $("#textType").on('input',function(){
        console.log($(this).val())
    })

    getAllPokemon()
})

function getAllPokemon(){
    $.ajax({
        url: "https://pokeapi.co/api/v2/pokemon?limit=150",
        success: function(res){
            res.results.forEach(pokemons =>{
                $.ajax({
                    url: pokemons.url,
                    success: function(res){
                        const nome = res.name
                        const frente = res.sprites.front_default
                        const costas = res.sprites.back_default
                        $('#pokemons').append(`
                            <div style="display:inline-block; margin:10px; text-align:center;">
                                <img src="${frente}" alt="${nome}">
                                <img src="${costas}" alt="${nome}">
                                <p>${nome}</p>
                            </div>
                        `);
                    }
                })
            })
        }
    })
}

$("#textType").on('input', function(){
    const valor = $(this).val()
    $.ajax({
        url: `https://pokeapi.co/api/v2/pokemon/${valor}`,
        success: function(res){
            $('#pokemons').html(`
            <div style="display:inline-block; margin:10px; text-align:center;">
                <img src="${res.sprites.front_default}" alt="${res.sprites.front_default}">
                <img src="${res.sprites.back_default}" alt="${res.sprites.back_default}">
                <p>${res.name}</p>
            </div>
            `)
       }
    })
})