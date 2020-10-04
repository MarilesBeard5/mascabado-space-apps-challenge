@extends ('layouts.admin')
@section ('contenido')
<!-- USER DATA-->
<div class="col-lg">
	<div class="user-data m-b-30">
		<div class="filters m-b-10">
			<nav class="navbar navbar-light">
				<form class="form-inline">
					@include('ycMexicoCorn.search')
					Cultivo de Arroz en Canada
				</form>
			</nav>
		</div>
		<div class="table-responsive table-data">
			<table class="table">
				<thead>
					<tr>
						<!--<td>Country</td>-->
						<td>Year</td>
						<td>ESC</td>
						<!--<td>Harvest</td>-->
						<td>Changes</td>
					</tr>
				</thead>
				<tbody>		
					@foreach ($changes as $c)										
						<tr>
							<!--<td>
								<span>
								@if($c -> country == 1)
									<span class="role residente">
										<i class="zmdi zmdi-home"></i> Canada
									</span>
								@endif
								@if($c -> country == 2)
									<span class="role residente">
										<i class="zmdi zmdi-home"></i> México
									</span>
								@endif
								@if($c -> country == 3)
									<span class="role residente">
										<i class="zmdi zmdi-home"></i> Estados Unidos
									</span>
								@endif
								</span>
							</td>
							-->
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
							<!--
							<td>
								@if($c -> harvest == 1)
									<span class="role residente">
										<i class="zmdi zmdi-home"></i> Arroz
									</span>
								@endif
								@if($c -> harvest == 2)
									<span class="role residente">
										<i class="zmdi zmdi-home"></i> Maiz
									</span>
								@endif
								@if($c -> harvest == 3)
									<span class="role residente">
										<i class="zmdi zmdi-home"></i> Trigo
									</span>
								@endif
							</td>
						-->
							<td>
								<span>
									<i class="zmdi zmdi-home"></i> {{ $c -> changes}}
								</span>
							</td>
							
						</tr>
						@include('ycMexicoCorn.modal')
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