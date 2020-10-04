@extends ('layouts.admin')
@section ('contenido')
<!-- USER DATA-->
<div class="col-lg">
	<div class="user-data m-b-30">
		<div class="filters m-b-10">
			<nav class="navbar navbar-light">
				<form class="form-inline h8">
					Scenario families
				</form>
			</nav>
		</div>
		<div class="table-responsive table-data" style="width:auto ;height:700px;">
			<table class="table"  >
				<thead>
					<tr>
						<td>A1</td>
						<td>A2</td>
						<td>B1</td>
						<td>B2</td>
					</tr>
				</thead>
				<tbody>		
												
						<tr>
							<td>The A1 scenarios are of a more integrated world.<br> The A1 family of scenarios is characterized by:<br>

							Rapid economic growth.<br>
							A global population that reaches 9 billion in 2050 and then gradually declines.<br>
							The quick spread of new and efficient technologies.<br>
							A convergent world - income and way of life converge between regions. Extensive social and cultural interactions worldwide.<br>
							</td>

							<td>The A2 scenarios are of a more divided world. <br>The A2 family of scenarios is characterized by:

							A world of independently operating, self-reliant nations.<br>
							Continuously increasing population.<br>
							Regionally oriented economic development.<br>
							High emissions<br>
							</td>

							<td>The B1 scenarios are of a world more integrated, and more ecologically friendly.<br>The B1 scenarios are characterized by:<br>

							Rapid economic growth as in A1, but with rapid changes towards a service and information economy.<br>
							Population rising to 9 billion in 2050 and then declining as in A1.<br>
							Reductions in material intensity and the introduction of clean and resource efficient technologies.<br>
							An emphasis on global solutions to economic, social and environmental stability.<br>
							</td>
							<td>The B2 scenarios are of a world more divided, but more ecologically friendly. <br>The B2 scenarios are characterized by:<br>

							Continuously increasing population, but at a slower rate than in A2.<br>
							Emphasis on local rather than global solutions to economic, social and environmental stability.<br>
							Intermediate levels of economic development.<br>
							Less rapid and more fragmented technological change than in A1 and B1.<br>
							</td>
							
						</tr>
				</tbody>
			</table>
		</div>
		
		<div class="user-data__footer"></div>
		</div>
			<!-- END USER DATA-->
	</div>
</div>
@endsection