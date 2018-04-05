{!! Form::open(array('url'=>'/','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
	<div class="form-group">
		<div class="input-group">
			<input type="text"  style="width:350px" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
			<button type="submit" class="btn btn-primary">Buscar</button>

		</div>
	</div>
{{Form::close()}}