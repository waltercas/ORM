@extends('layout')
@section('content')
		<h3>LISTADO DE ARTíCULOS</h3><br>    
		@include('search')
			<div>
				<table class="table table-bordered">
					<thead>
						<th>Id</th>
						<th>Artículo</th>
						<th>Precio</th>
						<th>Categoría</th>
					</thead>
			              	@foreach ($articulos as $art)
								<tr>
									<td>{{ $art->id}}</td>
									<td>{{ $art->articulo}}</td>
									<td>{{ $art->precio}}</td>
									<td>{{ $art->Categoria}}</td>
								</tr>
							@endforeach
				</table>
			</div>
			{{$articulos->render()}}
@endsection