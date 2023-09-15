<table border=1>
    <tr>
        <td>categoria</td>
        <td>libros</td>
    </tr>
    @foreach($categorias as $categoria)
    <tr>
    <td>{{$categoria->nombre}}</td>
    <td>
        <table border=1>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                </tr>
            </thead>
            <tbody>
        @foreach($categoria->libros as $libro)
            <tr>
                <td>{{$libro->id}}
                <td>{{$libro->titulo}}
            </td>
        @endforeach
            </tbody>
        </table>
    </td>

    </tr>
    @endforeach
</table>