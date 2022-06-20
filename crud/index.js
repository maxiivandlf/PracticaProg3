$('#btn-listar').click(function () {
  $.ajax({
    url: 'consultaAlumnos.php',
    type: 'POST',
  })
    .done(function (res) {
      $('#resultado').html(res);
    })
    .fail(function () {
      console.log('error');
    })
    .always(function () {
      console.log('complete');
    });
});

$('#btn-consulta').click(function () {
  var materia = document.getElementById('materia').value;
  var alumno = document.getElementById('alumno').value;

  var path = 'materia=' + materia + '&alumno=' + alumno;

  $.ajax({
    url: 'consultaNotas.php',
    type: 'POST',
    data: path,
  })
    .done(function (res) {
      $('#notas_respon').html(res);
    })
    .fail(function () {
      console.log('error');
    })
    .always(function () {
      console.log('complete');
    });
});
