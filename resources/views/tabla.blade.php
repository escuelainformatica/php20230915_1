<table border=1>
    <tr>
    <td>nombre libro</td>
    <td>categoria</td>
    </tr>
    @foreach($libros as $libro)
    <tr>
    <td>{{$libro->titulo}}</td>
    <td>{{$libro->categoria->nombre}}</td>
    </tr>
    @endforeach
</table>