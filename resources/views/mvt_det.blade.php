@extends('layouts.header')
@extends('layouts.link')

@section('content')

<div class="container outline-primary">
    <div class="alert alert-danger mt-2" role="alert">
      <h2>Mis a jour des Mat:</h2>
    </div> <hr>
    
    <form action="" method="" class="row g-3">
       {{csrf_field()}}
	   <h2>Detail de Mouvement :</h2>
	   <div class="row">
			<div class="col-md-4">
				<label for="inputdate_mvt" class="form-label">Date mouvement :</label>
				<input type="date" value="2021-07-23" name="date_mvt" class="form-control" id="inputdate_mvt">
			</div>
			<div class="col-md-4">
				<label for="inputtype_mvt" class="form-label">type mouvement :</label>
				<input type="text" name="type_mvt" class="form-control" id="inputtype_mvt">
			</div>
		</div>
	    <div class="row">
			<div class="col-md-4">
				<label for="inputorgane" class="form-label">Organe :</label>
				<input type="text" name="organe"  class="form-control"  id="inputorgane" >
			</div>
            
			<div class="col-md-4">
				<label for="inputlibresp" class="form-label">Responsable :</label>
				<input type="text" name="libresp" class="form-control" id="inputlibresp" >
			</div>
		</div>
		<div class="col-md-4">
		 <button type="submit" class="btn btn-success"">Save mvt</button>
		</div>			
	</form>
	<!-- end mvt-->	
    
    
</div>
@endsection