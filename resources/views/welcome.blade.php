<x-app-layout>
    <!-- Portada -->
    <section class ="bg-cover bg-no-repeat bg-center w-auto y-auto" style="background-image: url({{asset('img/Home/Curso.jpg')}})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-4xl">
                        Bienvenid@ a Moment!
                    </h1>
                    <p class ="text-white text-lg mt-2 mb-4">Encontraras actividades dirigidas especialmente para ti, porque tú eres importante para nosotros</p>

               <!-- BARRA DE BUSQUEDA -->
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class=" w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Buscar">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-400 text-white font-bold py-2 px-4  rounded absolute right-0 top-0 mt-2">
                            Buscar
                          </button>

                    </div>
                </div>
            </div>
    </section>
<!-- CONTENIDO DE LAS ACTIVIDADES-->
    <section class="mt-24 justify-center">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Categoria de Actividades</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-3 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class ="rounded-md h-36 w-full object-cover"src="{{asset('img/actividades/fisico.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Fisicos</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, ducimus officiis commodi quaerat.</p>
            </article>

            <article>
                <figure>
                    <img class ="rounded-md h-36 w-full object-cover"src="{{asset('img/actividades/mentales.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Mentales</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, ducimus officiis commodi quaerat.</p>
            </article>

            <article>
                <figure>
                    <img class ="rounded-md h-36 w-full object-cover"src="{{asset('img/actividades/manualidad.jpeg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Manualidades</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, ducimus officiis commodi quaerat.</p>
            </header>
            </article>
        </div>
    </section>
<!--SECCION PARA VER TODAS LAS ACTIVIDADES-->
    <section class="mt-24 bg-yellow-500 py-12">
        <h1 class="text-center text-white text-3xl">¿Quieres ver todas las actividades?</h1>
        <div class="flex justify-center mt-4">
            <a href = "{{route('courses.index')}}"class="bg-indigo-600 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
                Categoria de Actividades
              </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">Últimas actividades</h1>
        <!--LISTA DE ACTIVIDADES-->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                <x-course-card :course="$course"></x-course-card>
            @endforeach

        </div>
    </section>
</x-app-layout>

