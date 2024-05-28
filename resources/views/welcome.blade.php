<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inclusion</title>
</head>
<body class="bg-stone-800 transition duration-700">
    <header class="m-0 p-0">
        <div class="w-6/12 md:w-3/12 mx-auto">
            <img src="{{asset('img/inclusion.png')}}" class="">
        </div>
    </header>

    <main>
       <div class="mx-auto w-3/4 md:w-1/2 mb-10 ">
           <p class="text-2xl text-yellow-100">
               Наша цель
           </p>
           <p class="text-white text-lg font-thin">
               Защита прав и интересов людей с инвалидностью, содействие
               широкому участию людей с инвалидностью в спортивной и
               культурной жизни, приобщение их к посильному труду,
               содействие в решении социальных и бытовых проблем,
               а также в устранении ограничений в их жизнедеятельности.
           </p>
       </div>
{{--        Проекты--}}
        <div class="space-y-5 m-5">
            <p class="text-4xl text-yellow-100">
                Наши проекты
            </p>
            <div class="grid grid-rows-3 md:grid-rows-1 md:grid-cols-3 h-1/4 gap-20 px-10">

                <a href="{{route("kolyaski.index")}}" id="card" class="mycard outline outline-4 outline-blue-200 rounded hover:outline-8 hover:cursor-pointer md:h-full">
                    <div id="bg-card" class="bg-gradient-to-l from-blue-200 to-blue-400 p-5 opacity-75 rounded h-full flex items-center justify-center transition duration-700 ">
                        <div class="overflow-hidden mx-auto">
                            <img src="{{asset("img/IK.png")}}" class="">
                        </div>
                    </div>

                    <div id="text" class="p-5 opacity-0 transition-opacity duration-700">
                        <p class="text-gray-300 text-lg font-light">
                            Мастерская по ремонту инвалидных колясок и других средств технической реабилитации.
                        </p>
                    </div>
                </a>

                <a href="{{route("invataxi.index")}}" id="card" class="mycard outline outline-4 outline-green-200 rounded hover:outline-8 hover:cursor-pointer ">
                    <div id="bg-card" class="h-full bg-gradient-to-l from-green-400 to-green-300 p-5 opacity-75 rounded flex items-center justify-center transition duration-700">
                        <div class="overflow-hidden mx-auto">
                            <img src="{{asset("img/IT.png")}}" class="">
                        </div>
                    </div>

                    <div id="text" class="p-5 opacity-0 transition-opacity duration-700">
                        <p class="text-gray-300 text-lg font-light">
                            Обучающий центр для лиц с инвалидностью
                        </p>
                    </div>
                </a>

                <a href="{{route("tenqogam.index")}}" id="card" class="mycard outline outline-4 outline-green-400 rounded hover:outline-8 hover:cursor-pointer">
                    <div id="bg-card" class="bg-gradient-to-l from-blue-200 to-green-400 p-5 opacity-75 rounded h-full flex items-center justify-center transition duration-700">
                        <div class="overflow-hidden mx-auto">
                            <img src="{{asset("img/TQ.png")}}" class="">
                        </div>
                    </div>

                    <div id="text" class="p-5 opacity-0 transition-opacity duration-700">
                        <p class="text-gray-300 text-lg font-light">
                            Специальное такси для людей с инвалидностью
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </main>
</body>

<script>
    const body = document.body;
    const cards = document.querySelectorAll('.mycard');
    cards.forEach(card => {
        const bgCard = card.querySelector('#bg-card');
        const text = card.querySelector('#text');

        card.addEventListener('mouseenter', function (){
            bgCard.classList.add('opacity-100')
            body.classList.add("bg-stone-900")
            text.classList.remove("opacity-0")
        });
        card.addEventListener('mouseleave', function (){
            bgCard.classList.remove('opacity-100')
            body.classList.remove("bg-stone-900")
            text.classList.add("opacity-0")
        });
    });
</script>

</html>
