
<div class="container ">
    <div class="col-md-12 btn btn-lg btn-warning disabled mt-2" >
      <h2>MODIFICATION DES MAT:</h2>
    </div> <hr>

    <form action="" method="post" class="row g-3">
      {{csrf_field()}}
       <input type="hidden" name="_method" value="PUT">
        <div class="col-md-6">
            <label for="inputDesignation" class="form-label">Designation</label>
            <input type="text" name="designation" value="{{$mat->designation}}" id="inputDesignation" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="inputMarque" class="form-label">Marque</label>
            <input type="text" name="marque" value="{{$mat->marque}}" class="form-control" id="inputMarque">
        </div>
        <div class="col-12">
            <label for="inputQuantites" class="form-label">Quantites</label>
            <input type="number" name="quantites" value="{{$mat->quantites}}" id="inputQuantites" min="1" max="100" class="form-control" >
        </div>
        <div class="col-12">
            <label for="inputObservation" class="form-label">Observation</label>
            <input type="text" name="observation" value="{{$mat->observation}}" id="inputObservation" class="form-control"  >
        </div>
        <div class="col-12">
            <label for="categorie_id" class="form-label">Categories</label>
            <select name="categorie_id" id="categorie_id"  class="form-control">
                @foreach($categ as $categorie)
                <option value="{{$categorie->categorie_id }}" {{ $mat->categorie_id == $categorie->categorie_id ? 'selected' : '' }}>
                {{$categorie->lib_categ}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-3">
                  <button type="submit" class="btn btn-outline btn-success">Update</button>
                </div>
                <div class="col-3">
                  <a type="button" href="{{url('home')}}" class="btn btn-outline-danger">Cancel</a>
                </div>
            </div>
        </div>

    </form>
</div>


@endsection
