@extends('layout.default')

@section('content')


{{-- Affichage de tous les articles de la BDD--}}

{{-- Affihage dans des card :
	structure :

	card[type] , card-title(h1 ou h2...), card-body( avec card_text dans un p ou...)

	--}}
  <div class="row">

  	<div class="col-md-12">

  		<div class="container">

  			@if($message = Session::get('success'))
  			<div class="alert alert-success">

  				<p>{{$message}}</p>
 				
  			</div>

  			@endif
  		</div>

  	<div class="container-fluid">
  		
  		<div class="panel panel-default">

  			<div class="panel panel-heading">Rechercher un article...</div>
  			<div class="panel panel-body">

  				<form action="" class="form-inline float-right" >


  					<div class="form-group">
  						<input type="text" placeholder="Taper le titre de l'article ici..." class="form-control">
  					</div>&nbsp;&nbsp;&nbsp;

  					<button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Rechercher</button> &nbsp;&nbsp;&nbsp;&nbsp;

  					<a href="{{route('articles.create')}}" class="btn btn-success"><span class="fa fa-plus"></span>  Publier un Article</a>

  					
  				</form>
  			</div>

  		</div>

  	</div> 
					
				
  		@foreach($articles as $article)

  		 <div class="col-md-6">
  		 	
  		 	<div class="card mb-4 shadow-sm card-section">

  		 		
  		 		<div class="card-title">
  		 			<h3>{{$article->titre}}</h3>
  		 		</div>

  		 		<div class="card-body">
  		 		
  		 			<p class="card-text">{{$article->description}}</p>

  		 			<p><small class="text-muted">Publié à : {{$article->created_at}}</small> &nbsp; &nbsp; &nbsp;<a href=""><span class="fa fa-share"></span>Partager l'article...</a></p> 
  		 			

  		 			<div class="btn-group">

  		 				 <div class="d-inline-flex p-2 bd-highlight">
  		 				
  		 				<a href="{{route('articles.show', $article->id)}}" class="btn btn-info">Lire</a>&nbsp;&nbsp;&nbsp;

  		 				<a href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary">Modifier</a>&nbsp;&nbsp;&nbsp;

							<form action="{{route('articles.destroy', $article->id)}}" method="post">
  		 					   @csrf

  		 					   @method('DELETE')

  		 					   <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet article?');" class="btn btn-danger">Supprimer</button>

  		 					
  		 				   </form>

  		 		         &nbsp;&nbsp;&nbsp;

  		 				<a href="{{route('add_like', $article->id)}}" class="btn btn-outline-warning"><span class="fa fa-thumbs-up"></span>J'aime <span>{{$article->nbre_jaime}}</span></a>&nbsp;&nbsp;&nbsp;

  		 				<a href="{{route('add_dislike', $article->id)}}" class="btn btn-outline-danger"><span class="fa fa-thumbs-down"></span>Je n'aime pas <span>{{$article->nbre_jaime_pas}}</span></a>

  		 				</div>


  		 			</div>



  		 		</div>

  		 	</div>

  		 </div>


  		@endforeach
  		
  	</div>
  	{{$articles->links()}}

  </div>


@endsection