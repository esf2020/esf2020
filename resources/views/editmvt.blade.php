@extends('layouts.header')
@extends('layouts.link')

@section('content')

<div class="container col-md-12 outline-primary">
    <div class="btn btn-lg btn-warning disabled mt-2" role="alert">
      <h2>Mis a jour des Mat:</h2>
    </div> <hr>    
    <form action="" method="" >
       {{csrf_field()}}
	    <div class="row col-md-12  mt-1">
			<div class="col-md-4  mt-1">
				<label for="inputdate_mvt" class="form-label">Date mouvement :</label>
				<input type="date" value="{{ $mvt->date_mvt }}" name="date_mvt" class="form-control" id="inputdate_mvt">
			</div>
			<div class="col-md-4  mt-1">
		     <label for="inputlibresp" class="form-label">type mouvement :</label>
				<select class="form-select" name="type_mvt"  aria-label="Default select example">
					<option value="{{$mvt->type_mvt}}" selected disabled >{{$mvt->type_mvt}}</option>
				</select>
		    </div>

		</div>

	    <div class="row">
			<div class="col-md-4  mt-1">
				<label for="inputorgane" class="form-label">Organe :</label>
				<input type="text" name="organe" value="{{ $mvt->organe}}" class="form-control"  id="inputorgane" >
			</div>
			<div class="col-md-4  mt-1">
				<label for="inputlibresp" class="form-label">Responsable :</label>
				<input type="text" name="libresp" value="{{$mvt->libresp}}" class="form-control" id="inputlibresp" >
			</div>
		</div>
		
		<div class="col-md-4 mt-1">
		  <button type="submit" class="btn btn-success"">Save mvt</button>
		</div>			
    </form>   
</div>
<div class="container">


</div>

@endsection