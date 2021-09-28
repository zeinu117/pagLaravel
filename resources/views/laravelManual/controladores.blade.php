@extends('layout.plantilla')
@section('titulo', 'Controladores')
@section('contenido')

<div class="row">
    <div class="col-sm-12">
        <p>
            <h2 class="text-center text-justify" style="color: orangered">Controladores </h2> <br>
            <p>
                <h3>Introducción</h3> <br>
                <h4 class="text-justify" style="vertical-align: inherit;">En lugar de definir toda la lógica para la gestión de una petición dentro de Closures o funciones anónimas en los archivos de rutas, se puede organizar este comportamiento en unas clases llamadas Controladores (controllers). Los controladores pueden agrupar la lógica de gestión de peticiones relacionadas en una única clase. Estos controladores se encuentran normalmente en el directorio app/Http/Controllers.</h4> <br>
                <h3>Controlladores básicos</h3> <br>
                <h4 class="text-justify" style="vertical-align: inherit;">A continuación se muestra un ejemplo de una clase de controlador básico. Tenga en cuenta que el controlador hereda de la clase de controlador base incluida con Laravel. La clase base provee de una serie de métodos útiles como el método middleware, que se puede usar para adjuntar un middleware a las acciones del controlador</h4> <br>
                <p style="background-color: #EDEDE6">
                    namespace App\Http\Controllers; <br>

                    use App\Http\Controllers\Controller; <br>
                    use App\Models\User; <br>

                    class UserController extends Controller <br>
                    { <br>
                        /** <br>
                         * Show the profile for the given user. <br>
                         * <br>
                         * @param  int  $id <br>
                         * @return \Illuminate\View\View <br>
                         */ <br>
                        public function show($id) <br>
                        { <br>
                            return view('user.profile', ['user' => User::findOrFail($id)]); <br>
                        } <br>
                </p>
                <h4>Puedes definir una ruta para esta acción del controlador así:</h4> <br>
                <p style="background-color: #EDEDE6">
                    use App\Http\Controllers\UserController; <br>
                    Route::get('user/{id}', [UserController::class, 'show']); <br>
                </p>
                <h4> Ahora, cuando una petición concuerda con la URI de la ruta, se ejecutará el método show de la clase UserController. Por supuesto, los parámetros de la ruta se pasarán también a este método.
                    Los controladores no requieren heredar la clase base. Sin embargo, no se tendrá acceso a las características como los métodos middleware, validate, y dispatch.</h4> <br>
            </p>
            <h3>Controlladores de acción simple</h3> <br>
            <h4>Si desea definir un controlador que sólo maneje una única acción, puede colocar un único método __invoke en el controlador:</h4> <br>
            <p style="background-color: #EDEDE6">
                namespace App\Http\Controllers; <br>
                use App\Http\Controllers\Controller; <br>
                use App\Models\User; <br>
                class ShowProfile extends Controller <br>
                { <br>
                    /** <br>
                    * Show the profile for the given user. <br>
                    * <br>
                    * @param  int  $id <br>
                    * @return \Illuminate\View\View <br>
                    */ <br>
                    public function __invoke($id) <br>
                    { <br>
                        return view('user.profile', ['user' => User::findOrFail($id)]); <br>
                    } <br>
                } <br>
            </p>
            <br>
            <h4>Cuando se registran las rutas para los controladores de acción única, no es necesario especificar un método:</h4> <br>
            <p style="background-color: #EDEDE6">
                use App\Http\Controllers\ShowProfile; <br>
                Route::get('user/{id}', ShowProfile::class); <br>
            </p>
            <br>
            <h4>Puedes generar un controlador invocable usando la opción --invokable del comando Artisan make:controller:</h4><br>
            <p style="background-color: #EDEDE6">
                <br>
                Route::get('profile', [UserController::class, 'show'])->middleware('auth'); <br>
            </p> <br>
            <h4>Sin embargo, es más conveniente especificar el middleware en el constructor del controlador. Utilizando el método middleware desde el constructor del controlador, se puede asignar un middleware a las acciones del controlador. Incluso se puede restringir el middleware a únicamente ciertos métodos:</h4><br>
            <p style="background-color: #EDEDE6">
                <br>
                class UserController extends Controller <br>
                { <br>
                    /** <br>
                    * Instantiate a new controller instance. <br>
                    * <br>
                    * @return void <br>
                    */ <br>
                    public function __construct() <br>
                    { <br>
                        $this->middleware('auth'); <br>

                        $this->middleware('log')->only('index'); <br>

                        $this->middleware('subscribed')->except('store'); <br>
                    } <br>
                } <br>
            </p> <br>
            <h3>Rutas de recursos parciales</h3> <br>
            <h4>Al declarar una ruta de recursos, puede especificar un subconjunto de acciones que el controlador debe manejar en lugar del conjunto completo de acciones predeterminadas:</h4> <br>
            <p style="background-color: #EDEDE6">
                <br>
                Route::resource('photos', PhotoController::class)->only([ <br>
                    'index', 'show' <br>
                ]); <br>
                Route::resource('photos', PhotoController::class)->except([ <br>
                    'create', 'store', 'update', 'destroy' <br>
                ]); <br>
                } <br>
            </p> <br>
            <h3>Rutas de Recursos de la API</h3> <br>
            <h4>Al declarar las rutas de recursos que serán consumidas por las API, comúnmente querrá excluir las rutas que presenten plantillas HTML, como las de create y edit. Para mayor comodidad, puede utilizar el método apiResource para excluir automáticamente estas dos rutas:</h4> <br>
            <p style="background-color: #EDEDE6">
                <br>
                Route::apiResource('photos', PhotoController::class); <br>
            </p> <br>
            <h4>Puede registrar muchos controladores de recursos de la API a la vez pasando una matriz al método apiResources:</h4><br>
            <p style="background-color: #EDEDE6">
                <br>
                Route::apiResources([ <br>
                    'photos' => PhotoController::class, <br>
                    'posts' => PostController::class, <br>
                ]); <br>
            </p> <br>
            <h2 class="text-center text-justify" style="color: orangered">Creacion de controladores y sus rutas ejemplo: </h2> <br>
            <p>
                <h3>1.- Abrimos nuestra terminal de comando en el directorio correspondiente de nuestro proyecto</h3> <br>
                <img src="{{ asset('img/controladores1.png')}}" alt="" height="100xp"> <br> <br>
                <h3>2.- Con el siguiente comando crearemos nuestro controladores, tener en cuenta que nuestros controladores van segun nuestas vistas o plantillas que tengamos</h3> <br>
                <img src="{{ asset('img/controladores2.png')}}" alt="" height="60xp"> <br> <br>
                <img src="{{ asset('img/controladores3.png')}}" alt="" height="80xp"> <br> <br>
                <h3>3.- Los controladores se crean en la carpeta controllers</h3><br>
                <h4>app -> Http -> Controllers</h4> <br>
                <img src="{{ asset('img/controladores4.png')}}" alt="" height="300xp"> <br> <br>
                <h3>4.- Dentro de los controladores se pueden crear varias funciones que nos pueden llevar a diferentes rutas, a si evitamos que cuando agreguemos rutas al archivo web.php se vea sobre cargado</h3><br>
                <img src="{{ asset('img/controladores5.png')}}" alt="" height="300xp"> <br> <br>
                <h3>5.- Para ocupar estas rutas en el archivo de web.php las mandamos a llamar:</h3>
                <img src="{{ asset('img/controladores6.png')}}" alt="" height="70xp"> <br> <br>
                <h3>Con esta forma hacemos referencia a nuestro controlador que creamos llamado laravelManualController y por medio de class llamamos a la funcion</h3>
            </p>
            <h2 class="text-center text-justify" style="color: orangered">Por si aun te quedan dudas aqui podras ver mas informacion </h2> <br>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0YxgCH2R2bE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2ZaXOoX0A2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/eotFbLghHrM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
        </p>
    </div>
</div>

@endsection
