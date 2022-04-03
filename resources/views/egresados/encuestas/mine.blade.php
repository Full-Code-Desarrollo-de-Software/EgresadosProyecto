<x-app-layout>
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center leading-tight" style="color: #18396a;">
            {{ __('Mis Encuestas') }}
        </h2>
    </x-slot>

    {{-- <!-- component -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" /> --}}

    <!-- ====== Cards Section Start -->
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <section class="pt-10 lg:pt-[10px] pb-10 lg:pb-10 bg-[#F3F4F6]">
                <div class="container">
                    <div class="flex flex-wrap -mx-4">
                      @forelse ($encuestas as $encuesta)
                            @php
                                $fecha = Carbon::parse($encuesta['created_at'])->format('Y');
                            @endphp
                            <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                                <div class="bg-white rounded-lg overflow-hidden mb-10 encuesta " style="cursor: pointer">
                                    <div class="text-center" style="padding: 0px 0px 32px 0px">
                                        <div
                                            style="padding-top: 20px; padding-bottom: 10px; background-color: #18396a;">
                                            <h3>
                                                <a href="javascript:void(0)"
                                                    class=" font-semibold text-white text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block ">
                                                    Encuesta del {{ $fecha }}
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="text-base text-body-color leading-relaxed mb-7 p-4">
                                            Para poder visualizar tus respuestas de la Encuesta realizada en el
                                            {{ $fecha }} da click en el boton de abajo
                                        </p>
                                        <a href="{{ route('encuestas.show.mine', $fecha) }}"
                                            class=" button-tec inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary  hover:text-white transition">
                                            Ver Encuesta
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="overflow-hidden" style="display: flex; justify-content: center; width: 100%; margin-top: 10rem;">
                                <span class="text-2xl" style="color: #18396a">Lo sentimos no has responido ninguna
                                    encuesta todavia</span>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
            <!-- ====== Cards Section End -->
            <style>
                .button-tec:hover {
                    background-color: #18396a;
                }

            </style>
        </div>
    </div>
</x-app-layout>
<script>
    document.querySelectorAll('div.encuesta').forEach(function(el) {
        el.addEventListener('mouseenter', e => {
            el.classList.add("shadow-xl");
        });
        el.addEventListener('mouseleave', e => {
            el.classList.remove("shadow-xl");
        });
    });
</script>