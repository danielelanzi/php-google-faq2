$(document).ready(
  function () {
    $.ajax({
      url: 'http://localhost:8888/php-google-faq2/server.php',
      method: 'GET',
      success: function (data) {
        console.log(data);
        for (var i = 0; i < data.length; i++) {
          $(".db").append(data[i].title)
          // console.log(data[i].question);
          // console.log(data[i].answer);
        }
      },
      error: function () {
        alert('errore')
      }
    });
  }
);
