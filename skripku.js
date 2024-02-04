const notifikasi = $('.info-data').data('infodata');
		if(notifikasi == "Disimpan"){
			swal("Good job!", "You clicked the button!", "success");
		}else if(notifikasi == "gagal"){

		}else if(notifikasi == "kosong"){

		}


$('delete-data').on('click', function(e){
	e.preventDefault();\
	var getLink = $(this).attr('href');
	Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = getLink;
        }
      }); 
});