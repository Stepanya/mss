$('html').overlayScrollbars()

const dir = "MSS_v2/"

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000
});

function error(text) {
	Swal.fire({
	  position: 'top-end',
	  type: 'error',
	  title: 'Please fix the errors below',
	  html: text,
	  showConfirmButton: false,
	})
}

function confirm(text) {
	return Swal.fire({
	  title: 'Are you sure?',
	  text: text,
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Confirm'
	})
}

function toastSuccess(msg) {
	Toast.fire({
	  type: 'success',
	  title: msg
	})
}

function toastError(msg) {
	Toast.fire({
	  type: 'error',
	  title: msg
	})
}

function reloadTable() {
  $('.table-spinner').toggle()
  setTimeout( function() {
    $('.table').DataTable().ajax.reload()
    $('.table-spinner').toggle()
  }, 500)
}

function initPopover() {
	$('.popover1').popover({ trigger: "hover", html: true })
}

$(document).on('click', '.paginate_button', function() {
	initPopover()
})
$(document).on('keypress', 'input[type="search"]', function() {
	initPopover()
})
$(document).on('change', 'select[aria-controls="DataTables_Table_0"], .select2', function() {
	initPopover()
})

function initTable() {
  initPopover()
  $('.select2').select2()
  $('.table-spinner').toggle()
  $('.skip').children().hide()
}