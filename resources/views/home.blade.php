@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>nombre</th>
								<th>email</th>
							</tr>
						</thead>
						<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
