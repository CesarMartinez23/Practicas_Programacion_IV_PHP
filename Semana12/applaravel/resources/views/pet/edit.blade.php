<h1>Editar Registro de Mascota</h1>

<form action="{{ url('/pet/'.$pet->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('pet.form')
</form>