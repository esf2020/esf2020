@extends('layouts.header')
@extends('layouts.link')

@section('content')

<div class="container outline-primary">
    <div class="btn btn-lg btn-warning disabled mt-2" role="alert">
      <h2>Mis a jour des Mat:</h2>
    </div> <hr>
    
    <form action="{{url('mvt')}}" method="post" >
       {{csrf_field()}}
	    <h2 >Mouvement :</h2>	   	   
	   <div class="row  mt-1">
			<div class="col-md-4  mt-1">
				<label for="inputdate_mvt" class="form-label">Date mouvement :</label>
				<input type="date" value="2021-07-23" name="date_mvt" class="form-control" id="inputdate_mvt">
			</div>		
		</div>
	    <div class="row">
			<div class="col-md-4  mt-1">
				<label for="inputorgane" class="form-label">Organe :</label>
				<input type="text" name="organe"  class="form-control"  id="inputorgane" >
			</div>
            

			<div class="col-md-4  mt-1">
				<label for="inputlibresp" class="form-label">Responsable :</label>
				<input type="text" name="libresp" class="form-control" id="inputlibresp" >
			</div>
		</div>
		<div class="col-md-4  mt-1">
		    <label for="inputlibresp" class="form-label">type mouvement :</label>
				<select class="form-select" name="type_mvt" aria-label="Default select example">
				    <option selected disabled>Choisir une type de Mouvement</option>
					<option value="Titre de prét">Titre de prét</option>
					<option value="PER">PER</option>
					<option value="REV">REV</option>
				</select>
			</div>
		<div class="col-md-4 mt-1">
		  <button type="submit" class="btn btn-success"">Save mvt</button>
		</div>			
	</form>   
</div>
@endsection