@extends('layout.plantilla')
@section('titulo', 'Laravel')
@section('contenido')
<div class="row">
    <div class="col">
        <h1 class="text-center display-2" style="color: orangered;"> <strong>Bienvenidos a mundo Laravel 8</strong>
        </h1>
        <p>
        <p>
        <h2>¿Qué es Laravel ?</h2>
        </p>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Si eres nuevo en PHP o frameworks web o tienes años de
            experiencia,
            Laravel es un framework que puede crecer contigo. Le ayudaremos a dar sus primeros pasos como
            desarrollador web o le daremos un impulso a medida que lleva su experiencia al siguiente nivel. No
            podemos esperar a ver lo que construyes.</h4>
        </p>
        <br>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Laravel se esfuerza por proporcionar una experiencia
            de desarrollador increíble al
            tiempo que proporciona funciones poderosas como la inyección de dependencias exhaustiva, una capa de
            abstracción de base de datos expresiva, colas y trabajos programados, pruebas de integración y unidad, y
            más.</h4>
        </p>
        <br>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Si eres nuevo en PHP o frameworks web o tienes años de
            experiencia, Laravel es un
            framework que puede crecer contigo. Le ayudaremos a dar sus primeros pasos como desarrollador web o le
            daremos un impulso a medida que lleva su experiencia al siguiente nivel. No podemos esperar a ver lo que
            construyes.</h4>
        </p>
        <br>
        <p>
        <h2>¿Por qué Laravel?</h2>
        </p>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Hay una variedad de herramientas y marcos disponibles
            para usted cuando crea una aplicación web. Sin embargo, creemos que Laravel es la mejor opción para crear
            aplicaciones web modernas y completas.
        </h4>
        </p>
        <br>
        <p>
        <h3>Un marco progresivo</h3>
        </p>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Nos gusta llamar a Laravel un marco "progresivo". Con
            eso, queremos decir que Laravel crece contigo. Si recién está dando sus primeros pasos en el desarrollo web,
            la amplia biblioteca de documentación, guías y <a href="https://laracasts.com/" style="color:orangered">
                tutoriales en video de Laravel</a> lo ayudará a aprender a
            manejar sin sentirse abrumado.
        </h4>
        <br>
        <h4 class="text-justify" style="vertical-align: inherit;">
            Si es un desarrollador senior, Laravel le brinda herramientas sólidas para la inyección de dependencias ,
            pruebas unitarias , colas , eventos en tiempo real y más. Laravel está optimizado para crear aplicaciones
            web profesionales y está listo para manejar cargas de trabajo empresariales.
        </h4>
        </p>
        <br>
        <p>
        <h3>Un marco escalable</h3>
        </p>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Laravel es increíblemente escalable. Gracias a la
            naturaleza amigable con el escalado de PHP y al soporte integrado de Laravel para sistemas de caché
            distribuidos y rápidos como Redis, el escalado horizontal con Laravel es muy sencillo. De hecho, las
            aplicaciones de Laravel se han escalado fácilmente para manejar cientos de millones de solicitudes por mes.
        </h4>
        <br>
        <h4 class="text-justify" style="vertical-align: inherit;"> ¿Necesitas un escalado extremo? Plataformas como
            <a href="https://vapor.laravel.com/" style="color:orangered">
                Laravel Vapor le</a>
            permiten ejecutar su aplicación Laravel a una escala casi ilimitada en la última tecnología
            sin servidor de AWS.
        </h4>
        </p>
        <br>
        <p>
        <h3>Un marco comunitario</h3>
        </p>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Laravel combina los mejores paquetes del ecosistema
            PHP para ofrecer el marco más robusto y amigable para el desarrollador disponible. Además, miles de
            desarrolladores talentosos de todo el mundo han <a href="https://github.com/laravel/framework"
                style="color:orangered"> contribuido al marco</a> . Quién sabe, tal vez incluso te
            conviertas en colaborador de Laravel.
        </h4>
        </p>
        <br>
        <p>
        <h2>Tu primer proyecto Laravel</h2>
        </p>
        <p>
        <h4 class="text-justify" style="vertical-align: inherit;">Queremos que sea lo más fácil posible comenzar con
            Laravel. Hay una variedad de opciones para desarrollar y ejecutar un proyecto de Laravel en su propia
            computadora. Si bien es posible que desee explorar estas opciones más adelante, Laravel proporciona <a
                href="https://laravel.com/docs/8.x/sail" style="color:orangered"> Sail</a> ,
            una solución incorporada para ejecutar su proyecto de Laravel usando <a href="https://www.docker.com/"
                style="color:orangered"> Docker </a> .
        </h4>
        <br>
        <h4 class="text-justify" style="vertical-align: inherit;">Docker es una herramienta para ejecutar aplicaciones y
            servicios en "contenedores" pequeños y livianos que no interfieren con el software o la configuración
            instalados en su computadora local. Esto significa que no tiene que preocuparse por configurar o configurar
            herramientas de desarrollo complicadas como servidores web y bases de datos en su computadora personal. Para
            comenzar, solo necesita instalar <a href="https://www.docker.com/products/docker-desktop"
                style="color:orangered">Docker Desktop </a> .
        </h4>
        <br>
        <h4 class="text-justify" style="vertical-align: inherit;">Laravel Sail es una interfaz de línea de comandos
            liviana para interactuar con la configuración predeterminada de Docker de Laravel. Sail proporciona un
            excelente punto de partida para construir una aplicación Laravel usando PHP, MySQL y Redis sin requerir
            experiencia previa en Docker.
        </h4>
        </p>
        </p>
        <br>
        <p>
        <h3>Algunos cursos que puede interesar de laravel para iniciar tu aprendizaje:</h3>
        </p>
        <br>
        <p>
        <h3>Curso 1.</h3>
        </p>
        <p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/A-BL8Ir7puE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </p>
        <p>
        <h3>Curso 2.</h3>
        </p>
        <p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tQb05Q_9kiE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </p>
        <h3>Curso 3.</h3>
        </p>
        <p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/j53_H693-2A"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </p>
    </div>
</div>
@endsection
