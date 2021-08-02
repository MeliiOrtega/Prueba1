<x-app-layout>
    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">Crear nueva actividad</h1>
                <hr class="mt-2 mb-6">

                {!! Form::open(['route' =>'voluntary.courses.store']) !!}
                    @include('voluntary.courses.partials.form')

                {!! Form::close() !!}
            </div>
        </div>

    </div>
</x-app-layout>
