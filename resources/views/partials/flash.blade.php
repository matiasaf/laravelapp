@if( Session::has('mensaje_flash'))
    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times; </button>
        {{ Session::get('mensaje_flash')  }}

    </div>
@endif