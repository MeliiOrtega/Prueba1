<div>
    <x-slot name="course">
        {{$course->slug}}
    </x-slot>

    <h1 class="text-2xl font-bold">CONTENIDO DE LA ACTIVIDAD</h1>

    <hr class="mt-2 mb-6">

    {{$section}}
    @foreach ($course->sections as $item)
        
        <article class="card mb-6">
            <div class="card-body bg-indigo-100 ">
                @if ($section->id == $item->id)
                    <form action="">
                        <input class="form-control w-full mb-2" type="text" placeholder="Ingrese el nombre de la sección">
                    </form>
                @endif
                <header class="flex justify-between items-center">
                    <h1 class="cursos-pointer"><strong>Titulo: </strong>{{$item->name}}</h1>
                    <div>
                        <i class="fas fa-edit text-blue-500" wire:click="edit({{$item}})"></i>
                        <i class="fas fa-eraser text-red-500"></i>
                    </div>
                </header>
                

            </div>
        </article>
    @endforeach
</div>
