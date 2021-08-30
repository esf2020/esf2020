@extends('layouts.header')
@extends('layouts.link')



@section('content')
<style>
   .alert{
     margin-top:10px;
     padding-bottom: 20px;
     padding-top: 20px;
     -webkit-box-shadow: -2px 16px 29px 14px rgba(0,0,0,0.66); 
     box-shadow: -2px 16px 29px 14px rgba(0,0,0,0.66); }
</style>
    <div class="row">
        <div class="container col-md-8">
            <div class="alert alert-dark mt-1 " role="alert">
                <h1>Listes des Mouvemenrts :</h1> 
            </div>
                <hr>
                <a type="button" href="insertmvt" class="btn btn-warning">Ajouter un Mouvement</a>

                <table class="table mt-2">
                    <thead>
                        <tr class="table-info">
                        <th scope="col">Mvt_id</th>
                        <th scope="col">Date_mvt</th>
                        <th scope="col">type_mvt</th>
                        <th scope="col">Organe</th>
                        <th scope="col">LibResponsable</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                @foreach($mvt_v as  $mvt)
                        <tr>
                        <th scope="row">{{ $mvt->mvt_id }}</th>
                        <td>{{ $mvt->date_mvt }}</td>
                        <td>{{ $mvt->type_mvt }}</td>
                        <td>{{ $mvt->organe }}</td>
                        <td>{{ $mvt->libresp }}</td>
                        <td>{{ $mvt->created_at }}</td>
                        <td>
                            <a type="button" href="{{url('/mvt/'.$mvt->mvt_id.'/edit')}}" class="btn rounded-pill btn-success">Editer</a>
                            <a type="button" class="btn rounded-pill btn-danger">Supprimer</a>
                            <a type="button" class="btn rounded-pill btn-warning">Dtails</a>
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