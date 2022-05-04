$("#translate").submit(function(e){

    let data1 = new FormData ($("#translate").get(0));
    e.preventDefault();
    $.ajax({
        type:'post',
        processData: false,
        dataType:false,
        contentType: false,
        url: "api.php",
        data: data1,
        success: function(result) {
            console.log("succesfull");
          $("#translation").html(result);       
         }
      });

});



