@extends('layout.default', ['title'=>'Modification'])

@section('content')


		<div class="row">
			<div class="container">
				<div class="col-md-12">

					<div class="container">

						@if($errors->any())

						<div class="alert alert-danger">
							<p>Attention!!! Une erreur est survenue lors de la modification de l'article, corrigez-la et réssayez svp!</p>

							<ul>
								@foreach($errors->all() as $error)

								<li>{{$error}}</li>

								@endforeach
							</ul>
						</div>


						@endif

					</div>


					<h3>Modification d'un article</h3>
					
					<form action="{{route('articles.update', $article->id)}}" class="form" method="post">
						@csrf
						@method('PUT')

						<div class="form-group">
							<label for="titre"><strong>Titre:</strong></label>
							<input type="text" name="titre" class="form-control" value="{{$article->titre}}" placeholder="Entrer le nouveau titre de l'article">
						</div>

						<div class="form-group">
							<label for="description"><strong>Description:</strong></label>
							<textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$article->description}}</textarea>
						</div>

						<button type="submit" class="btn btn-sm btn-warning"><span class="fa fa-check"></span> Valider Modifications</button>
						
					</form>


				</div>
			</div>
		</div>



@endsection