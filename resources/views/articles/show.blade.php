@extends('layout.default')

@section('content')



		<div class="row">
			
			<div class="col-md-12">
				
				<div class="col-md-6">
					<div class="card mb-4 shadow-sm">

						<div class="cart-title">
							<h3>{{$article->titre}}</h3>
						</div>

						<div class="card-body">
							<p class="card-text">{{$article->description}}</p>
							<p><a href=""><span class="fa fa-share"></span> Partager...</a></p>
						</div>

					</div>
				</div>


				
			</div>

		</div>

		<div class="container">
			<div class="list-group">
				<p class="list-group-item">1er commentaire</p>
				<p class="list-group-item">2ème commentaire</p>
				
			</div>
			
		</div>

		<div class="container">
					<h3>Commenter l'article ?</h3>

					<form action="">

						<div class="form-group">

							<textarea name="content" class="form-control" cols="30" rows="10"></textarea>
							
						</div>
						
						<button type="submit" class="btn btn-sm btn-warning"><span class="fa fa-save"></span> Poster</button>
					</form>
				</div>




@endsection