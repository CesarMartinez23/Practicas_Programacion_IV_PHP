<h1>Nuevo registro de Mascota</h1>

<form action="{{ url('/pet') }}" method="POST">
    @csrf

    @include('pet.form')
</form>