$(document).ready(function() {
  var table = $('.usertable').DataTable({
    "paging": true,
    "bLengthChange": true,
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    "ordering": true,
    "info": true,
    "language": {
      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
    }
  });

  $('.delete').click(function(event) {
    var data = table.row($(this).parents('tr')).data();
    var id = data[0];   
    swal({
      title: "Bent u zeker?",
      text: "U zal de gegevens nooit meer terug krijgen!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }) .then((willDelete) => {
      if (willDelete) {
        swal("Verwijdert!", "De gegevens zijn verwijdert!", "success", {
          icon: "success",
        });  
        $.ajax({
          url: 'inc/delete_marker.php',
          type: 'POST',
          data: {
            id: id
          },
          success: function() {
            setTimeout(function() {
              $('.content').load('usertable.php');
            }, 10);
          }
        });
      } else {
        swal("Geanuleerd!", "De gegevens zijn niet verwijderd!", "success");
      }

    });
  });


  // Klant info in Modal
  $('.update').click(function(event) {
    var data = table.row($(this).parents('tr')).data();
    var id = data[0];
    $.ajax({
      url: 'inc/fetch_marker.php',
      type: 'POST',
      dataType: "json",
      data: {
        id: id
      },
      success: function(data) {
       $('.id').val(data.id);
       $('.naam').val(data.naam);
       $('.adres').val(data.adres);
       $('.over').val(data.over_woning);
       $('.latitude').val(data.latitude);
       $('.longtitude').val(data.longtitude);
       $('.status').val(data.huurstatus);
       $('.prijs').val(data.huurprijs);
       $('.periode').val(data.huurperiode);
       $('.image-tn').attr('src',"../"+data.photo_path);
       $('#update_data_Modal').modal('show');
     }
   });
  });

  
});