@extends('layouts.header')
@extends('layouts.link')

@section('content')
<style>
   .container{
     margin-top:10px;
     padding-bottom: 20px;
     padding-top: 20px;
     -webkit-box-shadow: inset -1px 3px 8px 5px #1F87FF, 2px 5px 16px 0px #0B325E, 16px 2px 14px -1px rgba(0,0,0,0.44); 
     box-shadow: inset -1px 3px 8px 5px #1F87FF, 2px 5px 16px 0px #0B325E, 16px 2px 14px -1px rgba(0,0,0,0.44);
   }
</style>
<div class="container ">
    <div class="col-md-12 btn btn-lg btn-warning disabled mt-2" >
     <h2>Insertion des Mat:</h2>
    </div> <hr>
    
    <form action="{{ url('home') }}" method="post" class="row g-3">
       {{csrf_field()}}
        <div class="col-md-6">
            <label for="inputDesignation" class="form-label">Designation</label>
            <input type="text" name="designation" class="form-control" id="inputDesignation" placeholder="Designation de materiel">
        </div>
        <div class="col-md-6">
            <label for="inputMarque" class="form-label">Marque</label>
            <input type="text" name="marque" class="form-control" required id="inputMarque" placeholder="Marque de materiel">
        </div>
        <div class="col-6">
            <label for="inputQuantites" class="form-label">Quantites</label>
            <input type="number" name="quantites" min="1" max="100" required class="form-control" placeholder="Qte de materiel" id="inputQuantites" >
        </div>
        <div class="col-6">
            <label for="inputObservation" class="form-label">Observation</label>
            <input type="text" name="observation" class="form-control" required id="inputObservation" placeholder="Observation sur le materiel ">
        </div>
        <div class="col-12">
            <label for="inputcategoerie" class="form-label">categorie</label>
            <select class="form-select" name="id_categorie" required aria-label="Default select example " id="inputcategoerie">
            <option selected disabled>choisir une Categorie </option>
            @foreach ($cat_v as $cat )    
                <option value="{{$cat->categorie_id }}">{{$cat->lib_categ }}</option> 
            @endforeach              
            </select>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-3">
                  <button type="submit" class="btn btn-outline-success btn-lg">Sauvgarder</button>
                  
                </div>
                <div class="col-3">
                  <a type="button" href="{{url('home')}}" class="btn btn-outline-danger btn-lg">Cancel</a> 
                </div>
            </div>        
        </div>
    
    </form>
</div>
    

@endsection