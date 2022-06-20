$('#btnSend').click(function () {
  var category = document.getElementById('category').value;
  var antiquity = document.getElementById('antiquity').value;

  var path = 'cat=' + category + '&ant=' + antiquity;

  console.log(path);

  $.ajax({
    url: 'calculator.php',
    type: 'POST',
    data: path,
  })
    .done(function (res) {
      $('#results').html(res);
    })
    .fail(function () {
      console.log('error');
    })
    .always(function () {
      console.log('complete');
    });
});
