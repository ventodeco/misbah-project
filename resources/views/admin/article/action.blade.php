<a href="{{ route('admin.article.edit', $model) }}" class="btn btn-warning" >Edit</a>

<button href="{{ route('admin.article.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script >
	$('button#delete').on('click', function(e) {
		e.preventDefault();

		var href = $(this).attr('href');


		Swal.fire({
		  title: 'Apakah kamu yakin hapus produk ini?',
		  text: "Data yang dihapus tidak bisa dikembalikan!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, Hapus saja!'
		}).then((result) => {
		  if (result.value) {
		  	document.getElementById('deleteForm').action = href;
			document.getElementById('deleteForm').submit();
		    Swal.fire(

		      'Terhapus!',
		      'Data produk berhasil dihapus.',
		      'success'
		    )
		  }
		})

	})
</script>
