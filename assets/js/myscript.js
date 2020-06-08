const flashData = $('.flash-data').data("flashdata");

if (flashData) {
	Swal.fire({
		title: 'Successfull',
		text: 'Complate' + flashdata,
		icon: 'success'
	});
}

$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});

$('.delete-button').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are You Sure',
		text: 'delete this data?',
		icon: 'warning',
		showCancelButton: true,
		cancelButtonColor: '#d33',
		confirmButtonColor: '#34aab3',
		confirmButtonText: 'Yes, Delete!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

