const formulario = document.getElementById('formulario');
const registro = document.getElementById('registro');
const exito = document.getElementById('exito');

formulario.addEventListener('submit', async (e) => {
    e.preventDefault();

    /////CONECTTO LA API PARA PODER INGRESAR DATOS EN LA BASE DE DATOS LA API ES SHEET.BEST


    ////ESCRIBIR FILAS
    try {
        const respuesta = await fetch('https://api.sheetbest.com/sheets/3c526e27-bd70-4d42-a2b9-c69d0bdadbed', {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                "Nombre": formulario.nombre.value,
                "Correo": formulario.correo.value,
                "Telefono": formulario.telefono.value
            })
        });

        const contenido = await respuesta.json();
        console.log(contenido);

    } catch (error) {
        console.log(error);
    }



    //////LEER FILAS
    ///try{
    /// const respuesta = await fetch('https://api.sheetbest.com/sheets/3c526e27-bd70-4d42-a2b9-c69d0bdadbed');

    ///const contenido = await respuesta.json();
    ///console.log(contenido);

    ///} catch(error){
    ///console.log(error);
    /////}




    ///registro.classList.remove('activo');
    ///exito.classList.add('activo');


    ////ELIMINAR FILAS
    ///try {
    /// const respuesta = await fetch('https://api.sheetbest.com/sheets/3c526e27-bd70-4d42-a2b9-c69d0bdadbed/0', {
    ////  method: 'DELETE',

    ////});

    ///const contenido = await respuesta.json();
    ///console.log(contenido);

    /////} catch (error) {
    ///console.log(error);
    ///}



    ///////ACTUALIZAR FILAS

    ///try {
    /// const respuesta = await fetch('https://api.sheetbest.com/sheets/3c526e27-bd70-4d42-a2b9-c69d0bdadbed/3', {
    ///  method: 'PATCH',
    ///mode: 'cors',
    //// headers: {
    ////   'Content-Type': 'application/json'
    //// },
    ///body: JSON.stringify({
    ///
    /// "Telefono": "000 000 000"
    ///})
    ///});

    ///const contenido = await respuesta.json();
    ///console.log(contenido);

    ///} catch (error) {
    /// console.log(error);
    ///}

});