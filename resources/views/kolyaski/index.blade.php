@extends('layouts.base')
@section('title', 'Инваколяски')

@section("main")
<x-header header="ИнваКоляски"
          photo="img/IK.png"
          size="w-8"
          color="bg-blue-400"
/>

<main>
    <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
        <div class="flex flex-col md:flex-row items-center justify-center">
            <div class="">
                <p class="text-2xl text-blue-900 font-medium">
                    Кто мы
                </p>
                <div class="text-lg text-stone-800 font-light">
                    <p>Наша организация предоставляет широкий спектр бесплатных услуг по ремонту и обслуживанию технических средств реабилитации для лиц с инвалидностью.</p>
                    <p class="text-blue-900 font-medium">Чем мы занимаемся </p>
                </div>
                <ol>
                    <li>Техническое обслуживание инвалидной техники</li>
                    <li>Ремонт инвалидной техники</li>
                    <li>Проведение целого комплекса мероприятий, включающих в себя ремонт, техобслуживание, прокат кресло-колясок и прочих вспомогательных приспособлений</li>
                </ol>
            </div>
            <div>
                <img class="scale-110 hover:scale-125 transition duration-700" src="{{asset("img/IK-2.png")}}">
            </div>
        </div>
    </div>

    <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
        <div class="flex flex-col md:flex-row items-center justify-center md:space-x-10">
            <div>
                <img class="scale-110 hover:scale-125 transition duration-700" src="{{asset("img/IK-3.png")}}">
            </div>
            <div class="space-y-3">
                <p class="text-2xl text-blue-900 font-medium">
                    Мы предлагаем
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="grid grid-rows-2 gap-5">
                        <p class="bg-blue-500 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                            Выезд на дом, по предварительной записи
                        </p>
                        <p class="bg-blue-500 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                            Действует курьерская доставка
                        </p>
                    </div>
                    <div class="grid grid-rows-2 gap-5">
                        <p class="bg-blue-500 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                            Обучение по подбору, уходу и маневренной езде на активных колясках
                        </p>
                        <p class="bg-blue-500 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                            Сдаём в аренду инвалидные коляски нуждающимся
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500 space-y-4 md:w-1/2 md:mx-auto">
        <p class="text-2xl text-blue-900 font-medium text-center">
            Оставить заявку
        </p>
        <form class="space-y-4">
            <p class="flex flex-col space-y-1">
                <label class="text-lg font-light">Имя</label>
                <input class="rounded-lg outline-8 outline-blue-500 border border-blue-100 h-8">
            </p>
            <p class="flex flex-col space-y-1">
                <label class="text-lg font-light">Номер телефона</label>
                <input class="rounded-lg outline-8 outline-blue-500 border border-blue-100 h-8">
            </p>
            <p class="flex flex-col space-y-1">
                <label class="text-lg font-light">Электронная почта</label>
                <input type="email" class="rounded-lg outline-8 outline-blue-500 border border-blue-100 h-8">
            </p>
            <p class="flex flex-col space-y-1">
                <label class="text-lg font-light">Сообщение</label>
                <textarea type="email" class="rounded-lg outline-8 outline-blue-500 border border-blue-100 h-24 resize-none"></textarea>
            </p>
            <div class="text-center">
                <button type="submit" class="p-2 bg-blue-600 text-white font-bold rounded hover:bg-blue-400">Отправить</button>
            </div>
        </form>
    </div>
</main>

<footer class="bg-blue-300 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
    <div class="flex flex-col md:flex-row items-center justify-center md:space-x-20">
        <p class="text-blue-900 font-extralight text-2xl ">
            ИнваКоляски
        </p>
        <div class="flex flex-col">
            <p class="text-blue-900 font-extralight">
                <b>Адрес</b>: мк-р Айгерим ул.Азаттык 43
            </p>
            <p class="text-blue-900 font-extralight">
                <b>Номер</b>: 87055202788, 87081015971
            </p>
            <p class="text-blue-900 font-extralight">
                <b>Instagram</b>: @invakolyaski.kz
            </p>
        </div>
    </div>
</footer>
@endsection
