@extends('layouts.header')
@extends('layouts.link')



@section('content')
<style>
   .alert {
     margin-top:10px;
     -webkit-box-shadow: -2px 16px 29px 14px rgba(0,0,0,0.66); 
     box-shadow: -2px 16px 29px 14px rgba(0,0,0,0.66); 
   }
</style>
  <div class="row">
    <div class="container col-md-8">
      <div class="alert alert-dark mt-1 " role="alert">
        <h1>Listes des Materiels</h1> 
      </div>
          <hr>
          <a type="button" href="{{ url('insert') }}" class="btn btn-warning">Ajouter un materiel</a>

          <table class="table mt-2">
              <thead>
                <tr class="table-info">
                  <th scope="col">Mat_id</th>
                  <th scope="col">Designation</th>
                  <th scope="col">Marque</th>
                  <th scope="col">Quantites</th>
                  <th scope="col">Observation</th>
                  <th scope="col">Categorie</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($mat_v as $mat )
                <tr>
                    <th scope="row">{{ $mat->materiel_id }}</th>
                    <td>{{ $mat->designation }}</td>
                    <td>{{ $mat->marque }}</td>
                    <td>{{ $mat->quantites }}</td>
                    <td>{{ $mat->observation }}</td>
                    <td>{{ $mat->categorie_id }}</td>
                    <td>
                        <form action="{{'home/'.$mat->materiel_id}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <a href="{{ url('/home/'.$mat->materiel_id.'/edit')}}" class="btn rounded-pill btn-success">Editer</a>
                           <button type="submit" class="btn rounded-pill btn-danger">Supprimer</button> 
                           <a href="" class="btn rounded-pill btn-warning">Dtails</a>
                       </form>
                    </td>
                </tr>
            @endforeach
              </tbody>
          </table>
      </div>   
  </div>    
</body>
</html>
@endsection