@extends('layouts.guest')

@section('content')
    <section class="flex flex-col">
        <div class="lg:mt-10 2xl:mt-20 relative order-2 lg:order1">
            <hero-slider></hero-slider>
        </div>
        <div class="max-w-7xl mx-auto px-4 py-6 lg:py-12 relative z-10 order-1 lg:order-2">
            <div class="lg:w-2/3 flex flex-col gap-1.5">
                <h1 class="text-4xl lg:text-7xl font-serif text-black dark:text-white">TATRÓS VISELKEDÉSVÁLTOZÁS
                    ELNDÍTÁSA <span class="text-blue-600 dark:text-green-400">10 NAP</span> ALATT</h1>
                <div class="w-20 h-1 lg:h-2 bg-blue-600 dark:bg-green-500"></div>
                <p class="lg:text-lg leading-relaxed max-w-2xl text-gray-800 dark:text-gray-300 font-semibold">Ha
                    szeretnél megszabadulni egy káros szokásodtól, vagy szeretnél elsajátítani egy új életformát,
                    jelentkezz a csütörtöki ingyenes webináriumunkra, ahol bemutatom azt a 10 lépést, ami szükséges
                    szokásaink megváltoztatásához.</p>
                <div>
                    <landing-button class="" href="/register">Regisztálok</landing-button>
                </div>
            </div>
        </div>
    </section>


    <section class="dark:text-white  mt-6 lg:mt-20">
        <div class="max-w-7xl mx-auto py-12 lg:py-24">
            <div class="max-w-2xl mx-auto pb-12 lg:pb-20">
                <h2 class="text-center text-2xl lg:text-4xl font-bold">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Delectus earum id ipsum?</h2>
            </div>

            <div class="w-full relative">
                <div class="
               h-[700px]
               lg:h-auto
               bg-red-600
               after:content-['']
               after:w-full
               after:absolute
               after:top-0
               after:bottom-0
               after:right-0
               after:bg-gradient-to-t
               lg:after:bg-gradient-to-l
               after:from-white
               dark:after:from-black
               after:from-15%
               after:to-transparent
               after:to-50%">
                    <div class="p-6 absolute bottom-0 w-full lg:h-full lg:w-60  right-0 z-10 flex flex-col justify-center items-center">
                        <span class="text-4xl font-serif">Dudits <br> Dénes</span>
                        <div class="w-12 h-1 lg:h-1 bg-blue-600 dark:bg-green-500 mt-4 mb-2"></div>
                        <span class="text-center text-sm">Terápiás programigazgató</span>
                        <video-component></video-component>
                    </div>

                    <img class="w-full h-full object-cover" src="{{asset('/img/video-cover.jpg')}}" alt="Dudits Dénes">
                </div>
            </div>
        </div>


    </section>

@endsection
