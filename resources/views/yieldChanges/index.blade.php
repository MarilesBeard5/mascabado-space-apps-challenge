@extends ('layouts.admin')
@section ('contenido')
<!-- USER DATA-->
<div class="col-lg">
	<div class="user-data m-b-30">
		<div class="filters m-b-10">
			<nav class="navbar navbar-light">
				<form class="form-inline">
					@include('yieldChanges.search');
				</form>
			</nav>
		</div>
		<div class="table-responsive table-data">
			<table class="table">
				<thead>
					<tr>
						<td>Country</td>
						<td>Year</td>
						<td>ESC</td>
						<td>Harvest</td>
						<td>Changes</td>
						<td>Options</td>
					</tr>
				</thead>
				<tbody>		
					@foreach ($changes as $c)										
						<tr>
							<td>
								<span>
									<i class="zmdi zmdi-home"></i> {{ $c -> country}}
								</span>
							</td>
							<td>
								<span>
									<i class="zmdi zmdi-home"></i> {{ $c -> yearr}}
								</span>
							</td>
							<td>
								<span>
									<i class="zmdi zmdi-home"></i> {{ $c -> esc}}
								</span>
							</td>
							<td>
								<span>
									<i class="zmdi zmdi-home"></i> {{ $c -> harvest}}
								</span>
							</td>
							<td>
								<span>
									<i class="zmdi zmdi-home"></i> {{ $c -> changes}}
								</span>
							</td>
							<td>
								<button class= "btn btn-primary" type="button">
									<i class="zmdi zmdi-delete"></i> Borrar
								</button>
								<a href="" >
									<button class= "btn btn-primary"  role="button">
										<i class="zmdi zmdi-edit"></i> Editar
									</button>
								</a>
							</td>
						</tr>
						@include('yieldChanges.modal')
					@endforeach

				</tbody>
			</table>
			{{$changes->render()}}
		</div>
		<div class="user-data__footer"></div>
		</div>
			<!-- END USER DATA-->
	</div>
</div>
@endsection