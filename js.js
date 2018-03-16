$(document).ready(function(){

  $(".form-control").change(function(){

      var val=$(this).val();
      $('.tabl1').hide();
        $('table').find('.test').each(function(){
          var ligne=$(this);
          var text= ligne.text();

            if(text==val){
              $(this).parent().show();
            }

            if(val=='Tous') {
              $('.tabl1').show();
            }
        })

    });
    /* Create new Item */
    $(".crud-submit").click(function(){

        var chantier = $("#create-item").find("input[name='chantier']").val();
        var poste = $("#create-item").find("input[name='poste']").val();
        var jan = $("#create-item").find("input[name='jan']").val();
        var fev = $("#create-item").find("input[name='fev']").val();
        var mar = $("#create-item").find("input[name='mar']").val();
        var avr = $("#create-item").find("input[name='avr']").val();
        var mai = $("#create-item").find("input[name='mai']").val();
        var juin = $("#create-item").find("input[name='juin']").val();
        var juil = $("#create-item").find("input[name='juil']").val();
        var aout = $("#create-item").find("input[name='aout']").val();
        var sept = $("#create-item").find("input[name='sept']").val();
        var oct = $("#create-item").find("input[name='oct']").val();
        var nov = $("#create-item").find("input[name='nov']").val();
        var decembre = $("#create-item").find("input[name='decembre']").val();

            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + 'create.php',
                data:{chantier:chantier, poste:poste, jan:jan, fev:fev, mar:mar, avr:avr, mai:mai, juin:juin, juil:juil, aout:aout, sept:sept, oct:oct, nov:nov, decembre:decembre}
            }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
        });



    });
    $("body").on("click",".remove-item",function(){
      var id =$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td")
      .prev("td").prev("td").prev("td").prev("td").text();

      $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + 'delete.php',
            data:{id:id}
        });
  });
});
