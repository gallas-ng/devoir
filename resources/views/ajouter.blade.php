@extends('devoir')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Ajouter Etudiant</h3>
	</div>
	
</div>
@if($errors->any())
<div class="row">
	<div class="col-12">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Some error occured!</strong>
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  <ul>
		  	@foreach($errors->all() as $error)
		  	<li>{{$error}}</li>
		  	@endforeach
		  </ul>
		</div>
	</div>
</div>
@endif
<div class="row mb-10">
	<div class="col-12">
		<form style="color:chartreuse"method="POST" action="{{route('etudiants.store')}}">
			@csrf
			<div class="mb-3">
			    <label for="nom" class="form-label">Nom</label>
			    <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
		  	</div>
		  	<div class="mb-3">
			    <label for="Description" class="form-label">Prenom</label>
			    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
		  	</div>
		  	<div class="mb-3">
			    <label for="Matiere" class="form-label">Matiere</label>
                <select name="matiere" id="matiere">
                    @foreach($matiere as $mat)
                        <option value="{{$mat}}"> {{$mat }}</option>
                    @endforeach
                </select>
		  	</div>
            
		  	<div class="mb-3">
			    <label for="" class="form-label">Note</label>
			    <input type="number" class="form-control" id="note" name="note" placeholder="note"></textarea>
		  	</div>
		  	<div class="mb-3">
			    <label for="" class="form-label">Examen</label>
			    <input type="number" class="form-control" id="examen" name="examen" placeholder="examen"></textarea>
		  	</div>
		  	<div class="mb-3">
			    <label for="semestre" class="form-label">Semestre</label>
                <select name="semestre" id="semestre">
                    @foreach($semestre as $sem)
                        <option value="{{$sem}}"> {{$sem }}</option>
                    @endforeach
                </select>
		  	</div>
		  	<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</div>
@endsection