@extends('layout.plantilla')
@section('titulo', 'Vistas con Blade')
@section('contenido')

<div class="row">
    <div class="col-sm-12">
        <p>
            <h2 class="text-center text-justify" style="color: orangered">Vistas con Blade (Plantillas) </h2><br>
            <p>
                <h3>Introducción</h3> <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Blade es un simple pero poderoso motor de plantillas incluido con Laravel. A diferencia de otros populares motores de plantillas para PHP, Blade no limita el uso de código PHP simple en las vistas. Las vistas en Blade se compilan a código PHP y se cachean hasta que son modificadas, básicamente esto se traduce en que Blade añade sobrecarga cero a las aplicaciones. Las vistas en Blade usan la extensión .blade.php y normalmente se almacenan en el directorio resources/views.</h4> <br>
                <h3>Herencia de plantillas</h3>
                <h4 class="text-justify" style="vertical-align: inherit;">Dos de los principales beneficios de usar Blade son la herencia de la plantilla y las secciones. Para empezar, echemos un vistazo a un simple ejemplo. Primero, examinaremos un diseño de página "maestro". Dado que la mayoría de las aplicaciones web mantienen la misma disposición general en varias páginas, es conveniente definir esta disposición como una sola vista de Blade:</h4> <br>
                <p style="background-color: #EDEDE6">
                    <! -- Stored in resources/views/layouts/app.blade.php --> <br>
                    < html> <br>
                        < head> <br>
                            < title>App Name - @ yield('title')< /title> <br>
                        < /head> <br>
                        < body> <br>
                            @ section('sidebar') <br>
                                This is the master sidebar. <br>
                            @ show <br>
                            < div class="container"> <br>
                                @ yield('content') <br>
                            < /div> <br>
                        < /body> <br>
                    < /html> <br>
                </p> <br>
            </p>
            <h4 class="text-justify" style="vertical-align: inherit;"> Como puedes ver, este archivo contiene el típico marcado HTML. Sin embargo, toma nota de las directivas @ section y @ yield. La directiva @ section, como su nombre indica, define una sección de contenido, mientras que la directiva @ yield se utiliza para mostrar el contenido de una sección determinada.</h4> <br>
            <h3>Extender una plantilla</h3> <br>
            <br>
            <h4 class="text-justify" style="vertical-align: inherit;"> Cuando defina una vista infantil, utilice la directiva Blade @ extends para especificar qué diseño debe "heredar" la vista infantil. Las vistas que extienden un diseño Blade pueden inyectar contenido en las secciones del diseño utilizando las directivas @ section. Recuerde que, como se ve en el ejemplo anterior, el contenido de estas secciones se mostrará en la maqueta utilizando @ yield:</h4> <br>
            <p style="background-color: #EDEDE6">
                <!-- Stored in resources/views/child.blade.php -->
                @ extends('layouts.app') <br>
                @ section('title', 'Page Title') <br>
                @ section('sidebar') <br>
                    @ parent <br>
                    < p>This is appended to the master sidebar.< /p> <br>
                @ endsection <br>
                @ section('content') <br>
                    < p>This is my body content.< /p> <br>
                @ endsection <br>
            </p> <br>
            <h4 class="text-justify" style="vertical-align: inherit;"> En este ejemplo, la sección sidebar utiliza la directiva @ parent dpara añadir (en lugar de sobrescribir) contenido a la barra lateral del diseño. La directiva @ parent será reemplazada por el contenido de la presentación cuando se renderice la vista.</h4> <br>
            <h4 class="text-justify" style="vertical-align: inherit;"> Al contrario que el ejemplo anterior, esta sección del sidebar termina con @ endsection en lugar de @ show. La directiva @ endsection sólo definirá una sección, mientras que @ show definirá e inmediatamente dará la sección.</h4> <br>
            <h4 class="text-justify" style="vertical-align: inherit;"> La directiva @ yield también acepta un valor por defecto como segundo parámetro. Este valor se renderizará si la sección que se está rindiendo no está definida:</h4> <br>
            <p style="background-color: #EDEDE6">
                @ yield('content', View::make('view.name'))
            </p> <br>
            <h4>Las vistas de las cuchillas pueden ser devueltas de las rutas usando el helper global view:</h4> <br>
            <p style="background-color: #EDEDE6">
                Route::get('blade', function () { <br>
                    return view('child'); <br>
                }); <br>
            </p> <br>
            <h2 class="text-center text-justify" style="color: orangered">Creacion de vista blade</h2> <br>
            <h3>1.- al igual que la vista esta se crea en la seccion views y con la extension blade.php que es la que nos ayuda a usar controlladores y demas.</h3> <br>
            <img src="{{ asset('img/vistas3.png')}}" alt="" height="300xp"> <br> <br>
            <h2 class="text-center text-justify" style="color: orangered">Para mas informacion pueden checar los videos </h2> <br>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/1v0_jJ6unDw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FaHL5rNnqTY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9eNW8CdJDjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
        </p>
    </div>
</div>

@endsection
