@extends ('layouts.admin')
@section ('contenido')
<!-- USER DATA-->
<div class="col-lg">
	<div class="user-data m-b-30">
		<div class="filters m-b-10">
			<nav class="navbar navbar-light">
				<form class="form-inline">
					@include('yieldChanges.search')
					Mexico
				</form>
			</nav>
		</div>
		<div style="padding: 0px; float: left; width:40%;text-align: justify; margin: 30px;">
            <div class="filters m-b-30">
		            <div>WHEAT YIELD CHANGE
		            </div>
		            <h9>-</h9>
		            <canvas id="sales-chart"></canvas>
            </div>
        </div>
		<div class="table-responsive table-data col-lg-5" style="width:auto ;height:510px;">
			<table class="table"  >
				<thead>
					<tr>
						<!--<td>Country</td>-->
						<td>YEAR</td>
						<td>SCENARIO</td>
						<!--<td>Harvest</td>-->
						<td>CHANGE</td>
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
							<td>{{ $c -> yearr}}
							</td>
							<td>{{ $c -> esc}}
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
								
								{{ $c -> changes}}
								@if($c -> changes<0)
										<i class="zmdi zmdi-long-arrow-down" ></i>
								@endif
								@if($c -> changes>=0)
										<i class="zmdi zmdi-long-arrow-up"></i>
								@endif
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