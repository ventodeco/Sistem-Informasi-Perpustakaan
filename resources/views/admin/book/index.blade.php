@extends('admin.templates.default')

@section('content')



<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Buku</h3>
		<a href="{{ route('admin.book.create') }}" class="btn btn-primary">Tambah Buku</a>
	</div>
	<div class="box-body">
		
		<table id="dataTable" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Penulis</th>
					<th>Sampul</th>
					<th>Aksi</th>
				</tr>
			</thead>

		</table>
	</div>
</div>

<form action="" id="deleteForm" method="post">
	@csrf
	@method("DELETE")
	<input type="submit" value="Hapus" style="display: none">
</form>


@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('scripts')
	<!-- datatable -->
	<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
	@include('admin.templates.partials.alerts')
	<script>
		$(function(){
			$('#dataTable').DataTable({
				processing: true,
				serverSide: true,
				ajax: '{{ route('admin.book.data') }}',
				columns: [
					{ data: 'DT_RowIndex', orderable: false, searchable: false },
					{ data: 'title' },
					{ data: 'description' },
					{ data: 'author' },
					{ data: 'cover' },
					{ data: 'action' },
				]
			});
		});
	</script>
@endpush