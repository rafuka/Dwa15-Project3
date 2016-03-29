$(document).ready(function() {
  $('#color-form').submit(function(e) {
    e.preventDefault();
    $.get('/colorgen', function(jsondata, status) {
      if (status !== 'success') {
        console.log('fail');
      }
      else {

        var data = JSON.parse(jsondata);

        $('#colors-wrapper').empty();

        for (var key in data) {
          $('#colors-wrapper').append('<div style="background-color: #' +
                                      data[key] +  ';" class="color"><p>#' + data[key] + '</p></div>');

        }

      }
    });
  });
});
