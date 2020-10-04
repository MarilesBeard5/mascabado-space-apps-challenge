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
		            <canvas id="mexicoWheat-chart"></canvas>
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
							<td>{{ $c -> yearr}}
							</td>
							<td>{{ $c -> esc}}
							</td>
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