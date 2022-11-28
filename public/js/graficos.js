function libros(){
    var fecha = [];
    var caldas = [];
    var antioquia = [];
    var bogota = [];

    fetch('https://www.datos.gov.co/resource/8835-5baf.json')

    //then necesita una promesa y esa promesa se resuelve con una respuesta
    .then(respuesta_exitosa => respuesta_exitosa.json())
    .then(function(datos_obtenidos){
        datos_obtenidos.forEach(elemento => {
            if (elemento.fecha != undefined && elemento.caldas !=undefined &&
                elemento.antioquia != undefined && elemento.bogota != undefined) {
                    caldas.push(elemento.caldas);
                    antioquia.push(elemento.antioquia);
                    bogota.push(elemento.bogota);
                    fecha.push(elemento.fecha);
                }
        });

        
        //variables para las graficas
        var graff1 = {
            mode:'markers',
            y: caldas,
            x: fecha,
            name: 'Caldas',
            type: 'scatter'
        };

        var graff2 = {
            mode:'markers',
            y: antioquia,
            x: fecha,
            name: 'Antioquia',
            type: 'scatter'
        };

        var graff3 = {
            mode:'markers',
            y: bogota,
            x: fecha,
            name: 'Bogota',
            type: 'scatter'
        };

        var datosGraficas2 = [graff1, graff2, graff3];

        var layout3 = {
            title: {
                text: 'Scatter plot',
            },
        };

        Plotly.newPlot('grafico',[graff1],layout3)
        Plotly.newPlot('grafico2',datosGraficas2,layout3);;
    });
}

libros();
console.log(depto)


