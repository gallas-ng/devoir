@extends('devoir')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Liste Classe</h3>
	</div>
	

</div>
<div class="row mb-10">
	


    <div class="row">
	<div class="col-18">
		<table class="table table-success table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nom</th>
		      <th scope="col">Prenom</th>
		      <th scope="col">Matiere</th>
		      <th scope="col">Note</th>
		      <th scope="col">Examen</th>
		      <th scope="col">Semestre</th>
		    </tr>
		  	</thead>
		  	<tbody>
	  		@if($etudiants->count() > 0)
			  	@foreach($etudiants as $projet)
			    <tr>
			      <td>{{$loop->index + 1}}</td>
			      <td>{{$projet->nom}}</td>
			      <td>{{$projet->prenom}}</td>
			      <td>{{$projet->matiere}}</td>
			      <td>{{$projet->note}}</td>
			      <td>{{$projet->examen}}</td>
			      <td>{{$projet->semestre}}</td>
			      
			    </tr>
			    @endforeach
		    @else
		    <tr>
		      <td colspan="4">Pas d'etudiant!</td>
		    </tr>
		    @endif
		  	</tbody>
		</table>
		
	</div>
</div>
 <div class="row">
    @if($premier != null)
        <button class="btn btn-success"><h3>La Moyenne Generale de la Classe est : {{$moyenne}}</h3></button>
        <button><h3>Le Premier de la Classe est : <span style="color:chartreuse">{{$premier->prenom}} ---  {{$premier->nom}}</span> </h3></button>
    @else
        <h3>La Moyenne Generale de la Classe est : {{$moyenne}}</h3>
        <h3>Le Premier de la Classe est : --- </h3>
    @endif
 </div>    
    
</div>
@endsection