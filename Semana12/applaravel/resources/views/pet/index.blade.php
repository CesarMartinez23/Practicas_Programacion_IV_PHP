<h1>Listado de Mascotas</h1>
<a href="{{ url('pet/create') }}">Nuevo Registro</a>

<table>
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->age }}</td>

                <form action="{{ url('/pet/'.$pet->id) }}" method="POST">
                    @csrf
                    <!-- Define el metodo que se necesita para eliminar -->
                    {{ method_field('DELETE') }} 
                    <td>
                        <a href="{{ route('pet.edit', $pet->id) }}">Edit</a>
                        <input type="submit" value="Delete" onclick="return confirm('Desea eliminar el registro ?')">
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>