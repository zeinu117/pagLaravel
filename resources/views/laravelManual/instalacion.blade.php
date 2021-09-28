@extends('layout.plantilla')
@section('titulo', 'Instalacion')
@section('contenido')

<div class="row">
    <div class="col-sm-12">
        <h2 class="text-center text-justify" style="color: orangered">En esta seccion veremos como instalar laravel en tu computador.</h2>
        <br>
        <p>
            <p>
                <h2>Instalación a través de Composer</h2>
                <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Si su computadora ya tiene PHP y Composer instalados, puede crear un nuevo proyecto de Laravel usando Composer directamente. Una vez creada la aplicación, puede iniciar el servidor de desarrollo local de Laravel utilizando el serve comando de Artisan CLI :</h4>
                <br>
                <p class="" style="background-color: #EDEDE6">
                    composer create-project laravel/laravel example-app <br> <br>
                    cd example-app <br> <br>
                    php artisan serve <br> <br>
                </p>
            </p>
            <p>
                <h3>Aqui les dejo algunos videos si aun no han instalado php p composer: </h3>
                <br>
                <iframe width="460" height="255" src="https://www.youtube.com/embed/ZHjchGyYt2I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="460" height="255" src="https://www.youtube.com/embed/BwAv5EtJ9fs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
            <p>
                <h4 class="text-justify" style="vertical-align: inherit;"> continuando con la instalacion a travéz de composer la segunda forma seria: </h4>
                <br>
                <h4 class="text-justify" style="vertical-align: inherit;">O puede instalar el instalador de Laravel como una dependencia global de Composer:</h4>
                <br>
                <p style="background-color: #EDEDE6">
                    composer global require laravel/installer <br> <br>
                    laravel new example-app <br> <br>
                    cd example-app <br> <br>
                    php artisan serve
                </p>
                <br>
                <p>
                    <h4>Asegúrese de colocar el directorio bin del proveedor de todo el sistema de Composer en su $PATH para que laravel su sistema pueda localizar el ejecutable. Este directorio existe en diferentes ubicaciones según su sistema operativo; sin embargo, algunas ubicaciones comunes incluyen:</h4>
                </p>
                <p style="background-color: #EDEDE6">
                    Mac OS: $HOME/.composer/vendor/bin <br> <br>
                    Ventanas: %USERPROFILE%\AppData\Roaming\Composer\vendor\bin <br> <br>
                    Distribuciones GNU / Linux: $HOME/.config/composer/vendor/bino$HOME/.composer/vendor/bin <br> <br>
                </p>
                <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Para mayor comodidad, el instalador de Laravel también puede crear un repositorio de Git para su nuevo proyecto. Para indicar que desea que se cree un repositorio de Git, pase la --git marca al crear un nuevo proyecto:</h4>
                <br>
                <p style="background-color: #EDEDE6">
                    <br>
                    laravel new example-app --git
                </p>
                <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Este comando inicializará un nuevo repositorio de Git para su proyecto y automáticamente confirmará el esqueleto base de Laravel. La git bandera asume que ha instalado y configurado correctamente Git. También puede usar la --branch bandera para establecer el nombre de la rama inicial:</h4>
                <br>
                <p style="background-color: #EDEDE6">
                    <br>
                    laravel new example-app --git --branch="main"
                </p>
                <br>
                <h4 class="text-justify" style="vertical-align: inherit;">En lugar de usar la --git bandera, también puede usar la --github bandera para crear un repositorio de Git y también crear un repositorio privado correspondiente en GitHub:</h4>
                <p style="background-color: #EDEDE6">
                    <br>
                    laravel new example-app --github
                </p>
                <br>
                <p>
                    <h4>El repositorio creado estará disponible en <br>
                        https://github.com/<your-account>/example-app. La github bandera asume que ha instalado correctamente la <a href="https://cli.github.com/" style="color: orangered"> CLI de GitHub </a> y está autenticado con GitHub. Además, debería haberlo gitinstalado y configurado correctamente. Si es necesario, puede pasar indicadores adicionales compatibles con la CLI de GitHub:</h4>
                </p>
                <p style="background-color: #EDEDE6">
                    <br>
                    laravel new example-app --github="--public"
                </p>
                <br>
                <h4 class="text-justify" style="vertical-align: inherit;">Puede usar la --organization bandera para crear el repositorio en una organización de GitHub específica:</h4>
                <br>
                <p style="background-color: #EDEDE6">
                    <br>
                    laravel new example-app --github="--public" --organization="laravel"
                </p>
                <br>
                <p>
                    <h3> Aqui se podra ver con más exactitud la creacion de un proyecto con composer:</h3>
                    <br>
                </p>
                <br>
                <p>
                    <h4>1. Primero en la carpeta de nuestro servidor en este caso seria htdoc ya que trabajaremos con el servidor de XAMPP <br>
                        La ruta seria: dico local C: -> xampp -> htdocs <br>
                        <img src="{{ asset('img/insta2.png')}}" alt="" height="500xp">
                    </h4>
                    <br>
                    <h4>2. Lo siguiente seria crear tu carpeta base donde contendra tus proyectos  se puede  llamar como uno quiera<br>
                        teniendo eso, usaremos una consola de comando para ir a nuestra ruta donde creamos la carpeta para alojar a tus proyectos <br> <br>
                        <img src="{{ asset('img/insta3.png')}}" alt="" height="500xp">
                    </h4>
                    <br>
                    <h4>2. Usaremos los comandos anteriores de composer para crear nuestro proyecto<br>
                        composer create-project laravel/laravel "nombre del proyecto"<br>
                        y se creara tu nueva carpeta donde contendra los recursos de laravel <br> <br>
                        <img src="{{ asset('img/insta4.png')}}" alt="" height="100xp"> <br> <br>
                        se mostraran varios procesos indicando la creacion del proyecto como se puede a continuacion: <br> <br>
                        <img src="{{ asset('img/insta5.png')}}" alt="" height="500xp"> <br> <br>
                        una vez construido nuestra carpeta en la misma consola de comando ingresamos a ella para poder ejecutar el comando que nos permitira levantar el proyecto. <br> <br>
                        <img src="{{ asset('img/insta6.png')}}" alt="" height="200xp"> <br> <br>
                        como pueden ver nos dara una direccion donde podremos ver a nuestro proyecto: <br> <br>
                        <img src="{{ asset('img/insta7.png')}}" alt="" height="500xp"> <br> <br>
                    </h4>
                    <h4 class="text-justify" style="vertical-align: inherit;">Con esto estariamos listo para comenzar a trabajar en nuestro proyecto, pero por si aun queda duda les dejare un video tutorial para un mejor  entendimiento:</h4> <br>
                </p>
                <p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/IOiq9wGTA_4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </p>
        </p>
    </div>
</div>

@endsection
