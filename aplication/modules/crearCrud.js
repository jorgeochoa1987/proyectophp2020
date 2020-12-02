$(document).ready(function(){
    $(document).on('click', '#crearCartera', function(){

        // Capturo los id de  los inputs y los paso a la variables para que procese
      var name = $('#feFirstName').val();
      var lastname = $('#feLastName').val();
      var email = $('#feEmailAddress').val();
      var phone = $('#fePhone').val();
      var city = $('#feInputCity').val();
      var number = $('#feNumber').val();
      var address = $('#feInputAddress').val();
      var valIni = $('#feValIni').val();
      var notes = $('#fenotas').val();
      $.ajax({
        url: 'modules/Creacion.php',
        type: 'POST',
        data: {
          'save': 1,
          'name': name,
          'lastname':lastname,
          'email':email,
          'phone':phone,
          'city':city,
          'number':number,
          'address':address,
          'valIni':valIni,
          'notes': notes,
        },
        success: function(response){
          $('#feFirstName').val('');
          $('#feLastName').val('');
          $('#feNumber').val('');
          $('#feValIni').val('');
          $("#Respuesta").html(response);
          
        }
      });
    });

    //crear cliente
    $(document).on('click', '#crearCliente', function(){
      // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');
    var name = $('#feFirstName').val();
    var lastname = $('#feLastName').val();
    var email = $('#feEmailAddress').val();
    var phone = $('#fephone').val();
    var city = $('#feInputCity').val();
    var number = $('#fenumber').val();
    var address = $('#feInputAddress').val();
    var notes = $('#fenotes').val();
    var category1= $('#category1').val();
    var category2= $('#category2').val();
    var category3= $('#category3').val();
    var category4= $('#category4').val();
    var category5= $('#category5').val();
    var category6= $('#category6').val();
    var category7= $('#category7').val();
    $.ajax({
      url: 'modules/CreacionCliente.php',
      type: 'POST',
      data: {
        'save': 1,
        'name': name,
        'lastname':lastname,
        'address':address,
        'email':email,
        'phone':phone,
        'city':city,
        'number':number,
        'notes': notes,
        'category1':category1,
        'category2':category2,
        'category3':category3,
        'category4':category4,
        'category5':category5,
        'category6':category6,
        'category7':category7,
      },
      success: function(response){
        $('#feFirstName').val('');
        $('#feLastName').val('');
        $('#feNumber').val('');
        $('#feValIni').val('');
        $("#Respuesta").html(response);
        alert('Acción realizada '+ response);
        
      }
    });
  });

//crear prestamo

$(document).on('click', '#crearPrestamo', function(){
  // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');

var cartera = $('#fecartera').val();
var value = $('#feValue').val();
var interes = $('#feInteres').val();
var date = $('#feDate').val();
var notas = $('#feDescription').val();
var cliente = $('#fecliente').val();
var category1= $('#category1').val();
var category2= $('#category2').val();
var category3= $('#category3').val();
var category4= $('#category4').val();
var category5= $('#category5').val();
var category6= $('#category6').val();
var category7= $('#category7').val();
$.ajax({
  url: 'modules/CreacionPrestamo.php',
  type: 'POST',
  data: {
    'save': 1,
    'cartera':cartera,
    'value': value,
    'interes':interes,
    'cliente':cliente,
    'date':date,
    'notas':notas,
    'cliente':cliente,
    'category1':category1,
    'category2':category2,
    'category3':category3,
    'category4':category4,
    'category5':category5,
    'category6':category6,
    'category7':category7,
  },
  success: function(response){
    alert('Acción realizada '+ response);

    $('#feValue').val('');
    $('#feInteres').val('');
    $('#fecartera').val('');
    $('#feDate').val('');
    $("#Respuesta").html(response);
    
  }
});
});
 
});