<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center leading-tight" style="color: #18396a;">
            {{ __('Realizar Encuesta') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('encuestas.store') }}" method="POST">
                @csrf
                @foreach ($categorias as $categoria)
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 mb-4 ">
                        <div style="background-color: #18396a; padding: 1rem 0rem 1rem 1rem" class="text-justify" >
                            <h2 class="font-bold font-weight-bold text-xl leading-tight text-white">
                                {{ 'Categoria - ' . $categoria->id . ': ' . $categoria->categoria }} <br></h2>
                        </div>
                        <div style="padding: 0rem 1rem 1rem 1rem">
                            @foreach ($categoria->preguntas as $pregunta)
                                <div class="mt-3  text-lg text-gray-700"
                                    style="padding-left:{{ $pregunta['parent_id'] == null ? '0px' : '55px' }};">
                                    {{ $pregunta['parent_id'] == null? $categoria->id . '.' . ($loop->index + 1) . ' - ' . $pregunta['pregunta']: $pregunta['pregunta'] }}
                                </div>
                                @foreach ($pregunta['respuestas'] as $respuesta)
                                    <div style="padding-left:{{ $pregunta['parent_id'] == null ? '40px' : '55px' }};">

                                        <input class="form-radio h-5 w-5 text-gray-600 " type="radio" required
                                            name="pregunta{{ $pregunta['id'] }}"
                                            id="flexRadioDefault{{ $respuesta['id'] }}"
                                            value="{{ $respuesta['id'] }}">
                                        <label class="text-gray-700" for="flexRadioDefault{{ $respuesta['id'] }}">
                                            {{ $respuesta['respuesta'] }}
                                        </label>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <div style=" display: flex; justify-content: center;">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                        style="background-color: #18396a">
                        Enviar Encuesta
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>