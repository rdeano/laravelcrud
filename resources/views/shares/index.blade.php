@extends ('layout')

@section('content')
<style>
	.uper {
		margin-top: 40px;
	}
</style>

<div class="uper">
	@if(session()->get('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div> <br />
	@endif

	<a class="btn btn-primary" href="{{ route('shares.create') }}">Add Shares</a>

	<hr />
	<table class="table table-striped">
		<thead>
			<tr>
				<td>ID</td>
				<td>Stock Name</td>
				<td>Stock Price</td>
				<td>Stock Quantity</td>
				<td colspan="3">Action</td>
			</tr>
		</thead>

		<tbody>
			@foreach($shares as $share)	
				<tr>
					<td>{{$share->id}}</td>
					<td>{{$share->share_name}}</td>
					<td>{{$share->share_price}}</td>
					<td>{{$share->share_qty}}</td>
					<td>
						<a href="{{ route('shares.edit', $share->id) }}" class="btn btn-primary">Edit</a>
						<form action="{{ route('shares.destroy', ['id' => $share->id] ) }}" method="POST" style="display:inline-block;">
							{{method_field('DELETE')}}
   							{!! csrf_field() !!}
							<input type="submit" value="Delete" class="btn btn-danger" />
							
						</form>
						</p>
					</td>

<!-- 					<form action="{{ route('shares.destroy', $share->id) }}" method="POST">
						{{ csrf_field() }}
						@method('DELETE')	
						<button class="btn btn-danger" type="submit"></button>
					</form> -->

				</tr>
			@endforeach
		</tbody>

	</table>


</div>

@endsection