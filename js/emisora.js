
function cargarContenido(dx){

    var contenido = document.getElementById('playlist');

    var xhr = new XMLHttpRequest();

    //lee un archivo html para cargarlo
    xhr.open("GET", "./playlist.php?u=" + dx.id, true);
    
    xhr.onreadystatechange = function (){

        if(xhr.readyState == 4 && xhr.status == 200){
            
            //sube el contenido al contenedor con el id
            var contenido = document.getElementById('playlist');

            //código del nuevo contenido
            contenido.innerHTML = xhr.responseText;

            //cambia el titulo de la playlist en reproduccion
            var playlist_name = document.getElementById('playlist-name');
            playlist_name.innerText = dx.innerHTML;

            //cambia la imagen de la playlist en reproduccion
            var playlist_img = document.getElementById('playlist-img');
            //toma el numero que esta en el nombre de la carpeta y lo relaciona con la imagen
            playlist_img.innerHTML = "<br><img src='/images/emisora/"+ dx.id.substr(11, 1) +".jpg'  height='150px' style=' border-radius: 10px;'>";
        }
    }
    xhr.send();
}


function reproducir(dx){

    //obtiene el objeto para subir el nuevo contenido
    var contenido = document.getElementById('contenid');

    //código del nuevo contenido
    contenido.innerHTML = " <audio src='"+dx.id +"' controls autoplay> <p>Tu navegador no implementa el elemento audio</p></audio>";


    //cambia el nombre de la pista seleccionada
    var playlist_img = document.getElementById('podcast-name');
    //toma el nombre del podcast de la variable dx
    playlist_img.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;" + dx.id.substr(42);

}

