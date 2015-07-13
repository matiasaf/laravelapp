

		<ul class="nav nav-tabs" role="tablist">
		    <li ><a href="{{ url('articles') }}">Home</a></li>
		    <li ><a href="{{ url('articles/create') }}">Crear un nuevo articulo</a></li>
		    <li><a href="{{ url('about') }}">Sobre mi</a></li>
		    <li><a href="{{ url('contact') }}">Contacto</a></li>
		    <li><a href="{{ url('auth/login')  }}" >Iniciar Sesion</a></li> 
		    <li><a href="{{ url('auth/logout')  }}" >Cerrar sesion</a></li>
		    <li>Bienvenido {{  isset(\Auth::user()->username) ? \Auth::user()->username : 'Default' }}</li>

			
		 </ul>	
