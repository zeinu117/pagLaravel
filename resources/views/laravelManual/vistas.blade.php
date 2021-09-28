@extends('layout.plantilla')
@section('titulo', 'Vistas')
@section('contenido')

<div class="row">
    <div class="col-sm-12">
        <p>
            <h2 class="text-center text-justify" style="color: orangered">Vistas con laravel </h2> <br>
            <p>
                <h3>Introducción</h3> <br>
                <h4 class="text-justify" style="vertical-align: inherit;" >Por supuesto, no es práctico devolver cadenas completas de documentos HTML directamente desde sus rutas y controladores. Afortunadamente, las vistas brindan una forma conveniente de colocar todo nuestro HTML en archivos separados. Las vistas separan la lógica de su controlador / aplicación de su lógica de presentación y se almacenan en el resources/viewsdirectorio. Una vista simple podría verse así:</h4><br>
                <p style="background-color: ">
                    <img src="{{ asset('img/vistas1.png')}}" alt="" height="200xp">
                </p> <br>
                <h4>Dado que esta vista está almacenada en resources/views/greeting.blade.php, podemos devolverla usando el view ayudante global así:</h4><br>
                <p style="background-color: #EDEDE6">
                    Route::get('/', function () { <br>
                        return view('greeting', ['name' => 'James']); <br>
                    }); <br>
                </p> <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Como se puede observar, el primer argumento pasado al helper view corresponde al nombre del archivo ubicado en el directorio resources/views. El segundo parámetro es un array de datos que debe estar presente en la vista. En este caso, se le está pasando la variable name, la cual se muestra en la vista utilizando la sintaxis Blade.</h4> <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Por su puesto, las vistas pueden estar anidadas dentro de cualquier sub-directorio de la carpeta resources/views. La notación de "puntos" o "dot notation" se utiliza para hacer referencia a vistas anidadas. Por ejemplo, si una vista está almacenada en resources/views/admin/profile.blade.php, se puede hacer referencia a ella de la siguiente manera:</h4> <br>
                <p style="background-color: #EDEDE6">
                    return view('admin.profile', $data); <br>
                </p> <br>
                <h3>Determinar si existe una vista</h3> <br>
                <h4>Para determinar si una vista existe, se puede utilizar la facade View. El método exists retornará true si la vista existe:</h4> <br>
                <p style="background-color: #EDEDE6">
                    use Illuminate\Support\Facades\View; <br>
                    if (View::exists('emails.customer')) { <br>
                        // <br>
                    } <br>
                </p> <br>
                <h3>Crear la primera vista disponible</h3>
                <h4 class="text-justify" style="vertical-align: inherit;">Utilizando el método first se puede crear la primera vista que se encuentre en un array de vistas. Es útil si una aplicación o paquete permite personalizar o sobrescribir las vistas:</h4> <br>
                <p style="background-color: #EDEDE6">
                    return view()->first(['custom.admin', 'admin'], $data);
                </p> <br>
                <h4>Por supuesto, también se puede llamar a este método a través de la facade View:</h4><br>
                <p style="background-color: #EDEDE6">
                    use Illuminate\Support\Facades\View; <br>
                    return View::first(['custom.admin', 'admin'], $data); <br>
                </p> <br>
                <h3>Pasar datos a las vistas</h3> <br>
                <h4>Como se ha visto en ejemplos anteriores, se puede pasar un array de datos a las vistas:</h4> <br>
                <p style="background-color: #EDEDE6">
                    class="text-justify" style="vertical-align: inherit;"
                </p> <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Al pasar información de esta forma, los datos deben ser un array con pares de clave/valor. Dentro de la vista, se pueden acceder a estos valores utilizando su clave correspondiente, tal como  < ?php echo $key; ? >. Como alternativa a pasar un array de datos al helper view, se pueden pasar piezas individuales de datos a la vista utilizando el método with:</h4> <br>
                <p style="background-color: #EDEDE6">
                    return view('greeting')->with('name', 'Victoria'); <br>
                </p> <br>
                <h3>Composers de vistas (compositores)</h3>
                <h4 class="text-justify" style="vertical-align: inherit;">Los view composers son callbacks o métodos de una clase que son llamados cuando una vista es renderizada. Si hay datos susceptibles de ser vinculados a una vista cada vez que esta es renderizada, un view composer ayudará a organizar esta lógica en una única ubicación.</h4> <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Para este ejemplo se registrarán los view composer en un service provider. Se utilizará la facade View para acceder a la implementación subyacente del contrato Illuminate\Contracts\View\Factory. Laravel no incluye un directorio predeterminado para los view composer. Así que se deja a libertad el programador de organizarlos como desee. Por ejemplo, se podría crear un directorio app/Http/ViewComposers:</h4> <br>
                <p style="background-color: #EDEDE6">
                    namespace App\Providers; <br>
                    use Illuminate\Support\Facades\View; <br>
                    use Illuminate\Support\ServiceProvider; <br>
                    class ViewServiceProvider extends ServiceProvider <br>
                    { <br>
                        /** <br>
                        * Register any application services. <br>
                        * <br>
                        * @return void<br>
                        */<br>
                        public function register() <br>
                        { <br>
                            // <br>
                        } <br>
                        /** <br>
                        * Bootstrap any application services. <br>
                        * <br>
                        * @return void <br>
                        */ <br>
                        public function boot() <br>
                        { <br>
                            // Using class based composers... <br>
                            View::composer( <br>
                                'profile', 'App\Http\View\Composers\ProfileComposer' <br>
                            ); <br>
                            // Using Closure based composers... <br>
                            View::composer('dashboard', function ($view) { <br>
                                // <br>
                            }); <br>
                        } <br>
                </p> <br>
            </p>
            <h4 class="text-justify" style="vertical-align: inherit;">Si se crea un nuevo service provider que almacene los registros de view composers, será necesario añadirlo al array de providers en el archivo de configuración config/app.php.</h4> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Luego de registrar el composer, el método ProfileComposer@compose se ejecutara cada vez que la vista profile esté renderizada. Por lo tanto, se define la clase del composer:</h4> <br>
            <p style="background-color: #EDEDE6">
                namespace App\Http\View\Composers; <br>
                use App\Repositories\UserRepository; <br>
                use Illuminate\View\View; <br>
                class ProfileComposer <br>
                { <br>
                    /** <br>
                    * The user repository implementation. <br>
                    * <br>
                    * @var UserRepository <br>
                    */<br>
                    protected $users; <br>
                    /** <br>
                    * Create a new profile composer. <br>
                    * <br>
                    * @param  UserRepository  $users <br>
                    * @return void <br>
                    */ <br>
                    public function __construct(UserRepository $users) <br>
                    { <br>
                        // Dependencies automatically resolved by service container... <br>
                        $this->users = $users; <br>
                    } <br>
                    /** <br>
                    * Bind data to the view. <br>
                    * <br>
                    * @param  View  $view <br>
                    * @return void <br>
                    */ <br>
                    public function compose(View $view) <br>
                    { <br>
                        $view->with('count', $this->users->count()); <br>
                    } <br>
                } <br>
            </p> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Justo antes de que la vista sea renderizada, los composers del metodo compose se llaman desde la instancia Illuminate\Contracts\View\View. Se puede utilizar el método with para enlazar datos con la vista</h4> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Todos los view composers se resuelven a través del service container, así que se pueden añadir tantas dependencias como se necesiten en el constructor del composer.</h4> <br>
            <h2 class="text-center text-justify" style="color: orangered">Creacion de vista </h2> <br>
            <h3>1.- las vistas como ya habiamos visto se crean en la carpeta view</h3> <br>
            <h4> resources -> views</h4><br>
            <img src="{{ asset('img/vistas2.png')}}" alt="" height="300xp"> <br> <br>
            <h3>2.- dandole clic derecho nos salen opciones de tanto crear una nueva carpeta o crear un nuevo archivo lo ideal es crear carpetas donde contengas las vistas especificas para tener un poco mas de orden </h3> <br>
            <img src="{{ asset('img/vistas3.png')}}" alt="" height="300xp"> <br> <br>
            <h2 class="text-center text-justify" style="color: orangered">Para mas informacion pueden checar los videos </h2> <br>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/aywwITxNxyw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JJQ8rBh3nAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
        </p>
    </div>
</div>

@endsection
