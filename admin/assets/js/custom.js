$(document).ready(function(){

  $('.delete_product_btn').click(function(e){
    e.preventDefault();

    var id  =$(this).val();
    // alert(id);
    swal({  //sweet Alert 'Using promises'. it's link is- "https://sweetalert.js.org/guides/"
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          method: "POST",
          url: "code.php",
          data: {
            'product_id':id,
            'delete_product_btn': true
          },
          success: function (response) {
            // console.log(response);
            if(response == 200)
            {
              swal("Success!", "Product deleted Successfully!", "success");   //swal("heading","msg","icon");
              $("#products_table").load(location.href + " #products_table");   // the space of " #products_table" must be needed.
            
            }
            else if(response == 500)
            {
              swal("Error!", "Something went wrong!", "error");
            }
          }
        });
      }
    });   
  });
});

