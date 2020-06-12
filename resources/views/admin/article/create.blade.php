@extends('admin.templates.default')

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Tambah Data Product</h3>
		</div>	

		<div class="box-body">
			<form action="{{ route('admin.article.store') }}" method="POST">
				@csrf

				<div class="form-group @error('title') has-error @enderror">
					<label for="">Nama Product</label>
					<input type="text" name="title" class="form-control" placeholder="Masukkan Nama Product" value="{{ old('title') }}">
					@error('title')
						<span class="help-block">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group @error('content') has-error @enderror">
					<label for="">Deskripsi Product</label>
					<textarea name="content" placeholder="Masukkan deskripsi produk">{{ old('content') }}</textarea>
					@error('content')
						<span class="help-block">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group @error('cover') has-error @enderror">
					<label for="">Gambar Produk</label>
					<input type="text" name="cover" class="form-control" value="{{ old('cover') }}">
					@error('cover')
						<span class="help-block">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group @error('price') has-error @enderror">
					<label for="">Harga Product</label>
					<input type="text" name="price" class="form-control" placeholder="Masukkan Harga" value="{{ old('price') }}">
					@error('price')
						<span class="help-block">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<input type="submit" name="submit" value="Tambah" class="btn btn-primary">
				</div>


			</form>
		</div>
	</div>

@endsection

@push('select2css')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}"> 
@endpush

@push('scripts')
	<script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

	<script>
		$('.select2').select2();
	</script>
@endpush