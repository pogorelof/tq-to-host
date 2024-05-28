@extends('layouts.base')
@section('title', 'Инватакси')

@section("main")
    <x-header header="Ten Qogam"
              photo="img/TQ.png"
              size="w-24"
              color="bg-emerald-500"
    />

    <main>
        <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="">
                    <p class="text-2xl text-emerald-700 font-medium">
                        Кто мы
                    </p>
                    <div class="text-lg text-stone-800 font-light">
                        <p>Работа центра направленна на сферу организации занятости
                            взрослого населения с инвалидностью, на основе
                            повышения их профессиональных и социальных навыков и
                            адаптации этих лиц в общества.</p>
                        <p class="text-emerald-700 font-medium">Что мы предлагаем </p>
                    </div>
                    <ol class="list-disc">
                        <li>Бесплатные курсы: компьютерной грамотности, языкам и так далее</li>
                        <li>Бесплатные консультации с юристом и психологом</li>
                        <li>Тренинги</li>
                        <li>Помощь в трудоустройстве</li>
                    </ol>

                </div>
                <div>
                    <img width="700px" class="hover:scale-90 transition duration-700" src="{{asset("img/TQ-2.jpg")}}">
                </div>
            </div>
        </div>

        <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
            <div class="flex flex-col md:flex-row items-center justify-center md:space-x-10">
                <div>
                    <img class="hover:scale-110 transition duration-700" src="{{asset("img/TQ-3.jpg")}}">
                </div>
                <div class="space-y-3">
                    <p class="text-2xl text-emerald-700 font-medium">
                        Наша история
                    </p>
                    <div class="text-lg text-stone-800 font-light">
                        <p>История открытия такого центра в Казахстане берет свое начало еще с 2007года. В 2020году проект по поддержке занятности и центров социальной поддержки осуществлялся "Ассоциацией женщин с инвалидностью "Шырак"", при поддержке управления социального благосостояния г.Алматы. Данный проект показал хорошие результаты и был принят к реализации в других регионах.</p>
                    </div>
                    <p class="text-2xl text-emerald-700 font-medium">
                        Наши ценности
                    </p>
                        <div class="text-lg text-stone-800 font-light">
                            <p>Защита прав и интересов лиц с инвалидностью, содействие широкому участию лиц с инвалидностью в общественно-политической, спортивной и культурной жизни, приобщение их к посильному труду, содействие в решении проблем, а также в устранении ограничений в их жизнедеятельности
                            </p>
                        </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500 space-y-4 md:w-1/2 md:mx-auto">
            <p class="text-2xl text-emerald-700 font-medium text-center">
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
                    <button type="submit" class="p-2 bg-emerald-700 text-white font-bold rounded hover:bg-emerald-800">Отправить</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="bg-emerald-500 text-green-900 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
        <div class="flex flex-col md:flex-row items-center justify-center md:space-x-20">
            <p class=" font-extralight text-2xl ">
                Ten Qogam
            </p>
            <div class="flex flex-col">
                <p class=" font-extralight">
                    <b>Адрес</b>: г.Алматы, ул.Талдырал, д.13
                </p>
                <p class=" font-extralight">
                    <b>Номер</b>: +7 (771) 333 80 80
                </p>
                <p class=" font-extralight">
                    <b>Email</b>: tq_alatau@gmail.com
                </p>
            </div>
        </div>
    </footer>
@endsection
