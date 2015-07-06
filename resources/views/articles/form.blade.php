	
		<div class="form-group">
			
			{!! Form::label('title', 'Titulo:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		
		</div>


		<div class="form-group">
			
			{!! Form::label('body', 'Contenido:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
			
		</div>


		<div class="form-group">
			
			{!! Form::label('published_at', 'Publicado :') !!}

			{!! Form::input( 'date' , 'published_at', date('Y-m-d'), ['class' => 'form-control'] ) !!}

		
		</div>



		<div class="form-group">
			
				{!! Form::submit($botonSubmit, ['class' => 'btn btn-primary form-control'])   !!}

		</div>