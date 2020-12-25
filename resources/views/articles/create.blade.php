@extends('layout.default')


@section('content')

  <div class="container">

  	@if($errors->any())

  	<div class="alert alert-danger">
  		<p><strong>Attention! Une erreur est survenue lors de la publication de votre article! Corrigez-la et réessayez svp!</strong></p>

  		<ul>
  			@foreach($errors->all() as $error)

  			<li>{{$error}}</li>

  			@endforeach
  			
  		</ul>

  	</div>

  	@endif
  </div>


   <div class="row">
   	
   	<div class="col-md-12">
   		
   		<div class="container">

   			<h3>Publication d'un nouvel article </h3>

   			<form action="{{route('articles.store')}}" class="form" method="post">
   				@csrf

   				@method('post')
   				
   				<div class="form-group">
   					<label for="titre"><strong>Titre:</strong></label>
   					<input type="text" name="titre" placeholder="Entrer le titre ici..." class="form-control" id="titre">
   				</div>

   				<div class="form-group">
   					<label for="description"><strong>Description:</strong></label>
   					<textarea name="description" class="form-control" cols="30" rows="10"></textarea>
   				</div>

   				<button type="submit" class="btn btn-success"><span class="fa fa-save"></span>  Publier </button>

   			</form>
   			
   		</div>

   	</div>

   </div>



@endsection