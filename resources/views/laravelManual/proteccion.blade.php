@extends('layout.plantilla')
@section('titulo', 'Protección CSRF')
@section('contenido')

<div class="row">
    <div class="col-sm-12">
        <p>
            <h2 class="text-center text-justify" style="color: orangered">Protección CSRF </h2><br>
            <h3>Introducción</h3> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Las falsificaciones de solicitudes entre sitios son un tipo de exploit malicioso mediante el cual se ejecutan comandos no autorizados en nombre de un usuario autenticado. Afortunadamente, Laravel facilita la protección de su aplicación contra ataques de falsificación de solicitudes entre sitios (CSRF).</h4> <br>
            <h3>Una explicación de la vulnerabilidad</h3> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">En caso de que no esté familiarizado con las falsificaciones de solicitudes entre sitios, analicemos un ejemplo de cómo se puede aprovechar esta vulnerabilidad. Imagine que su aplicación tiene una /user/email ruta que acepta una POST solicitud para cambiar la dirección de correo electrónico del usuario autenticado. Lo más probable es que esta ruta espere que un email campo de entrada contenga la dirección de correo electrónico que el usuario quisiera comenzar a usar.</h4> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Sin la protección CSRF, un sitio web malintencionado podría crear un formulario HTML que apunte a la /user/email ruta de su aplicación y envíe la dirección de correo electrónico del usuario malintencionado:</h4> <br>
            <br>
            <p style="background-color: #EDEDE6">
                < form action="https://your-application.com/user/email" method="POST"> <br>
                    < input type="email" value="malicious-email@example.com"> <br>
                < /form> <br>
                < script> <br>
                    document.forms[0].submit(); <br>
                < /script> <br>
            </p> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Si el sitio web malicioso envía automáticamente el formulario cuando se carga la página, el usuario malicioso solo necesita atraer a un usuario desprevenido de su aplicación para que visite su sitio web y su dirección de correo electrónico se cambiará en su aplicación.</h4> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Para evitar esta vulnerabilidad, es necesario inspeccionar cada entrante POST, PUT, PATCH, o DELETE solicitud de un valor sesión secreta que la aplicación maliciosa es incapaz de acceso.</h4> <br>
            <h3>Prevención de solicitudes CSRF</h3> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Laravel genera automáticamente un "token" CSRF para cada sesión de usuario activa administrada por la aplicación. Este token se utiliza para verificar que el usuario autenticado es la persona que realmente realiza las solicitudes a la aplicación. Dado que este token se almacena en la sesión del usuario y cambia cada vez que se regenera la sesión, una aplicación maliciosa no puede acceder a él.</h4> <br>
            <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Se puede acceder al token CSRF de la sesión actual a través de la sesión de la solicitud o mediante la csrf_token función auxiliar:</h4> <br>
            <p style="background-color: #EDEDE6">
                use Illuminate\Http\Request; <br>
                Route::get('/token', function (Request $request) { <br>
                    $token = $request->session()->token(); <br>
                    $token = csrf_token(); <br>
                    // ... <br>
                }); <br>
            </p> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Siempre que defina un formulario HTML "POST", "PUT", "PATCH" o "DELETE" en su aplicación, debe incluir un _tokencampo CSRF oculto en el formulario para que el middleware de protección CSRF pueda validar la solicitud. Para su comodidad, puede utilizar la @ csrfdirectiva Blade para generar el campo de entrada del token oculto:</h4> <br>
            <p style="background-color: #EDEDE6">
                < form method="POST" action="/profile"> <br>
                    @ csrf <br>
                    <!-- Equivalent to... -->
                    < input type="hidden" name="_token" value="{{ csrf_token() }}" /> <br>
                < /form>
            </p> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">El App\Http\Middleware\VerifyCsrfToken middleware , que se incluye en el web grupo de middleware de forma predeterminada, verificará automáticamente que el token en la entrada de la solicitud coincide con el token almacenado en la sesión. Cuando estos dos tokens coinciden, sabemos que el usuario autenticado es el que inicia la solicitud.</h4> <br>
            <h3>Tokens CSRF y SPA</h3> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Si está creando un SPA que utiliza Laravel como backend de API, debe consultar la documentación de Laravel Sanctum para obtener información sobre cómo autenticarse con su API y protegerse contra vulnerabilidades CSRF.</h4> <br>
            <br>
            <h3>Excluir URI de la protección CSRF</h3> <br>
            <h4 class="text-justify" style="vertical-align: inherit;">A veces, es posible que desee excluir un conjunto de URI de la protección CSRF. Por ejemplo, si está utilizando Stripe para procesar pagos y está utilizando su sistema de webhook, deberá excluir la ruta del controlador de webhook de Stripe de la protección CSRF, ya que Stripe no sabrá qué token CSRF enviar a sus rutas.</h4> <br>
            <br>
            <h4 class="text-justify" style="vertical-align: inherit;">Por lo general, debe colocar este tipo de rutas fuera del web grupo de middleware que se App\Providers\RouteServiceProvider aplica a todas las rutas del routes/web.php archivo. Sin embargo, también puede excluir las rutas agregando sus URI a la $except propiedad del VerifyCsrfToken middleware:</h4> <br>
            <p style="background-color: #EDEDE6">
                namespace App\Http\Middleware; <br>
                use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware; <br>
                class VerifyCsrfToken extends Middleware <br>
                { <br>
                    /** <br>
                    * The URIs that should be excluded from CSRF verification. <br>
                    * <br>
                    * @ var array <br>
                    */ <br>
                    protected $except = [ <br>
                        'stripe/*', <br>
                        'http://example.com/foo/bar', <br>
                        'http://example.com/foo/*', <br>
                    ]; <br>
                } <br>
            </p> <br>
            <h2 class="text-center text-justify" style="color: orangered">Te intereso ? aqui puedes aprender mas: </h2> <br>
            <p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bgzJU54niYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uC7KkSYoxWA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8mQ_6scO3-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
        </p>
    </div>
</div>
@endsection
