@extends('layout.plantilla')
@section('titulo', 'Rutas')
@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <p>
            <h2 class="text-center text-justify" style="color: orangered">Enrutamiento básico</h2>
            <p><h4 class="text-justify" style="vertical-align: inherit;">La ruta más básica en Laravel únicamente acepta la URI y un Closure, ofreciendo una forma muy sencilla y expresiva de definir rutas:</h4></p> <br>
            <h3>Ruta GET básica</h3> <br> <br>
            <p style="background-color: #EDEDE6">
                Route::get('/', function() <br>
                { <br>
                    return 'Hello World'; <br>
                }); <br>
            </p>
            <h3>Ruta POST básica</h3> <br> <br>
            <p style="background-color: #EDEDE6">
                Route::post('foo/bar', function() <br>
                { <br>
                    return 'Hello World'; <br>
                }); <br>
            </p>
            <br>
            <h3>Los archivos de la ruta por defecto</h3>
            <p><h4 class="text-justify" style="vertical-align: inherit;">Todas las rutas de Laravel se definen en los archivos que se encuentran en la carpeta routes. El framework carga estos archivos de forma automática. El archivo routes/web.php define las rutas para la interfaz web. A estas rutas se les asigna el grupo de middleware web, el cual proporciona algunas características como el estado de la sesión y la protección CSRF. Las rutas en routes/api.php no tienen estado y se les asigna el grupo de middleware api.</h4></p> <br>
            <h3>Métodos de enrutamiento disponibles</h3> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">El router permite registrar rutas que respondan a cualquier verbo HTTP:</h4>
            <p style="background-color: #EDEDE6">
                Route::get($uri, $callback); <br>
                Route::post($uri, $callback); <br>
                Route::put($uri, $callback); <br>
                Route::patch($uri, $callback); <br>
                Route::delete($uri, $callback); <br>
                Route::options($uri, $callback); <br>
            </p>
            <h3>Registro de una ruta para varios verbos</h3> <br> <br>
            <p style="background-color: #EDEDE6">
                Route::match(array('GET', 'POST'), '/', function() <br>
                { <br>
                    return 'Hello World'; <br>
                }); <br>
            </p>
            <h3>Registro de una ruta que responde a cualquier verbo HTTP</h3> <br> <br>
            <p style="background-color: #EDEDE6">
                Route::any('foo', function() <br>
                { <br>
                    return 'Hello World'; <br>
                }); <br>
            </p>
            <h3>Obligación de que una ruta se sirva a través de HTTPS</h3> <br> <br>
            <p style="background-color: #EDEDE6">
                Route::get('foo', array('https', function() <br>
                { <br>
                    return 'Must be over HTTPS'; <br>
                })); <br>
            </p>
            <h3>Parámetros de ruta</h3>
            <p style="background-color: #EDEDE6">
                Route::get('user/{id}', function($id) <br>
                { <br>
                    return 'User '.$id; <br>
                }); <br>
            </p>
            <h3>Expresiones regulares</h3> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Es posible limitar el formato de los elementos dentro de los parámetros de una ruta usando el método where en una instancia de Route. El método where acepta el nombre del parámetro y la expresión regular que define como se debe limitar el parámetro:</h4> <br>
            <p style="background-color: #EDEDE6">
                Route::get('user/{name}', function ($name) { <br>
                    // <br>
                })->where('name', '[A-Za-z]+'); <br> <br>

                Route::get('user/{id}', function ($id) { <br>
                    // <br>
                })->where('id', '[0-9]+'); <br> <br>

                Route::get('user/{id}/{name}', function ($id, $name) { <br>
                    // <br>
                })->where(['id' => '[0-9]+', 'name' => '[a-z]+']); <br>
            </p>
            <h3> Nombre de rutas</h3>
            <h4 class="text-justify" style="vertical-align: inherit;">Las rutas con nombre permiten la generación de URL o redirecciones para rutas específicas. Se puede especificar el nombre de una ruta encadenando el método name a la definición de la ruta:</h4> <br>
            <p style="background-color: #EDEDE6">
                Route::get('user/profile', function () { <br>
                    // <br>
                })->name('profile'); <br>
            </p>
            <h2 class="text-center text-justify" style="color: orangered">Ejemplos de rutas en un proyecto</h2>
            <p>
                <h3> 1.- Como bien se ha mencionado la carpeta donde se trabajara sera en routes:</h3> <br>
                <h4>routes -> web.php </h4>
                <img src="{{ asset('img/rutas1.png')}}" alt="" height="500xp"> <br> <br>
                <h3> 2.- Nos aparecera una ruta por defecto que es de nuestro inicio por a si decirlo, tomando en cuenta lo anterior en esta ruta se usa el metodo get la diagonal nos indica que esta apuntando a nuetro inicio y para este tipo de ruta
                    se necesita crear su funcion donde dentro se retorna la vista, en este caso el nombre de nuestra vista se llama welcom, esta vista se encuentra en nuestra carpeta resoruces:
                </h3> <br>
                <h4> resources -> views -> welcome</h4> <br>
                <img src="{{ asset('img/rutas2.png')}}" alt="" height="500xp"> <br> <br>
                <h3>3.- las rutas se iran creando segun nuestras vistas que vayamos creando en este caso la direccion de la vista como el nombre iran cambiando, aqui se puede ver un ejemplo de varias views en una misma ruta</h3> <br>
                <img src="{{ asset('img/rutas3.png')}}" alt="" height="400xp"> <br> <br>
            </p>
            <h2 class="text-center text-justify" style="color: orangered">Algunos videos que te pueden ayudar a entender mejor:</h2> <br>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PDbOsGlCf7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9vgUe5ZkweM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/zw_JdR3gEj8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
        </p>
    </div>
</div>


@endsection
