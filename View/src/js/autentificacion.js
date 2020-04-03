var paso = 5;

$(document).ready(function()
{

  autentificar();
});

function autentificar()
{
  // console.log('sbn');
  $('#autentificacionLogin').submit(function(e)
{
  e.preventDefault();
  var datos=$('#autentificacionLogin').serialize();
  $.ajax({
    // la URL es del login y fijamos la ruta para ingresar
    'url':'../Controller/autentificacionControlador.php?opc=autentificar',
    'data': datos,
    'method':'POST'
  }).done(function(info)
  {
    if (info == 0)
    {
       // esta dirección es desde el login hasta donde queramos llegar si son validos los datos
      window.location.href = "tablero.php";
    }
    else
    {
      paso--;
      if(paso==0){
        window.location.href = "algo.php";
      }

    }
  })
});
}
