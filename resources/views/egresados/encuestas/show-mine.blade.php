<x-app-layout>
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center leading-tight" style="color: #18396a;">
            {{ __('Encuesta Realizada') }}
        </h2>
    </x-slot>

    {{-- <!-- component -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" /> --}}

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <link
                href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
                rel="stylesheet">
            <div class="flex items-center justify-center min-h-screen ">
                <div class="">
                    @foreach ($categorias as $categoria)
                        <div class="rounded-lg ">
                            <table class="table text-gray-400 border-separate space-y-6 text-sm m-0 p-0 w-5">
                                <thead class=" text-white rounded-lg shadow-lg" style="background-color: #18396a;">
                                    <tr>
                                        <th colspan="2" class="p-3">{{ $categoria->categoria }}</th>
                                    </tr>
                                </thead>
                                @if ($categoria->preguntas)
                                    <thead class=" text-white shadow-lg" style="background-color: #9e9e9e;">
                                        <tr>
                                            <td class="p-3">Pregunta</td>
                                            <td class="p-3 text-left rounded-r-lg">Respuesta</td>
                                        </tr>
                                    </thead>
                                @else
                                    <thead class=" text-white shadow-lg" style="background-color: #9e9e9e;">
                                        <tr>
                                            <td class="p-3 text-center">Lo sentimos no hay respuestas a esta Categoria
                                            </td>
                                        </tr>
                                    </thead>
                                @endif
                                <tbody>
                                    @foreach ($categoria->preguntas as $pregunta)
                                        <tr class="bg-white text-gray-500 shadow-lg">
                                            <td class="p-3 ">
                                                <div class="flex align-items-center">
                                                    {{ $pregunta['pregunta'] }}
                                                </div>
                                            </td>
                                            <td class="p-3 rounded-r-lg">
                                                {{ $pregunta['respuesta'] }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
            <style>
                .table {
                    border-spacing: 0 15px;
                    width: 100%;
                }

                i {
                    font-size: 1rem !important;
                }

                .table tr {
                    border-radius: 20px;
                }

                tr td:nth-child(n+5) {
                    border-radius: 0 .625rem .625rem .625rem;
                }

                tr th:nth-child(n+5) {
                    border-radius: .625rem;
                }

                tr td:nth-child(1) {
                    border-radius: .625rem 0 0 .625rem;
                }

                tr th:nth-child(1) {
                    border-radius: .625rem;
                }

            </style>
        </div>
    </div>
</x-app-layout>