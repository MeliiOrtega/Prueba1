<x-app-layout>
    <!-- Portada -->
    <section class ="bg-cover bg-no-repeat bg-center w-auto y-auto h-screen " style="background-image: url({{asset('img/Home/Curso.jpg')}})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-4xl">
                        Bienvenid@ a Moment!
                    </h1>
                    <p class ="text-white font-bold text-lg mt-2 mb-4">Encontraras actividades dirigidas especialmente para ti, porque tú eres importante para nosotros</p>

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
<!--CATEGORIas-->
@livewire('navigation-category')
   {{--  <div class=" py-4 mb-16 bg-indigo-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-around  ">
            <!--CATEGORIAS-->
            @foreach ($categories as $category)
            <a class="font-bold text-3xl text-indigo-600 hover:text-red-700" href="{{route('course.category',$category)}}">{{$category->name}}</a>
            @endforeach
            </div>
    </div> --}}

    <section class="my-24">
        <!--LISTA DE ACTIVIDADES-->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                <x-course-card :course="$course"></x-course-card>
            @endforeach

        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
            {{$courses->links()}}
        </div>
    </section>
</x-app-layout>


