<h1>Formulario en Laravel</h1>
<form action="{{ action('PeliculaController@recibir') }}" method="post">
    {{ csrf_field() }}

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="">

    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="">

    <br>

    <input type="submit" value="Enviar">

</form>