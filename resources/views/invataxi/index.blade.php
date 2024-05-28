@extends('layouts.base')
@section('title', 'Инватакси')

@section("main")
    <x-header header="ИНВАТАКСИ"
              photo=""
              size=""
              color="bg-green-700"
    />

    <main>
        <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="">
                    <p class="text-2xl text-green-700 font-medium">
                        Кто мы
                    </p>
                    <div class="text-lg text-stone-800 font-light">
                        <p>Инватакси – транспорт для людей с особыми физическими потребностями. Проект позволяет детям и взрослым с инвалидностью быть полноценными членами общества, посещать объекты социальной инфраструктуры, необходимые для социализации, что в свою очередь повышает их уровень жизни, открывая возможности получения дополнительных услуг, способствующих укреплению их здоровья и уровня образования.</p>
                        <p class="text-green-700 font-medium">Что мы предлагаем </p>
                    </div>
                    <ol class="list-disc">
                        <li>Наш автопарк состоит из автомобилей, оснащенных всем необходимым для перевозки пассажиров в инвалидных колясках: подъемниками, пандусами, креплениями и просторными салонами</li>
                        <li>Наши водители проходят специальное обучение по оказанию помощи людям с ограниченными возможностями, обладают навыками общения и чуткостью</li>
                        <li>Мы учитываем потребности каждого пассажира, помогаем с посадкой и высадкой, сопровождаем до места назначения</li>
                        <li>Доступ в позднее время</li>
                    </ol>

                </div>
                <div>
                    <img class="hover:scale-90 transition duration-700" src="{{asset("img/IT-2.png")}}">
                </div>
            </div>
        </div>

        <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
            <div class="flex flex-col md:flex-row items-center justify-center md:space-x-10">
                <div>
                    <img class="hover:scale-90 transition duration-700" src="{{asset("img/IT-3.png")}}">
                </div>
                <div class="space-y-3">
                    <p class="text-2xl text-green-700 font-medium">
                        Наши особенности
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="grid grid-rows-2 gap-5">
                            <p class="bg-green-700 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                                Мы уделяем особое внимание безопасности пассажиров, регулярно проверяем техническое состояние автомобилей и обучаем водителей
                            </p>
                            <p class="bg-green-700 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                                Мы стремимся создать максимально комфортные условия для передвижения, учитывая индивидуальные потребности каждого пассажира
                            </p>
                        </div>
                        <div class="grid grid-rows-2 gap-5">
                            <p class="bg-green-700 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                                Мы гарантируем своевременную подачу автомобиля и доставку пассажиров до места назначения
                            </p>
                            <p class="bg-green-700 font-light p-2 rounded-lg text-center text-white flex items-center justify-center">
                                Мы активно участвуем в социальных проектах, направленных на поддержку людей с ограниченными возможностями
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-gray-100 p-5 m-5 rounded-lg shadow-lg shadow-gray-500 space-y-4 md:w-1/2 md:mx-auto">
            <p class="text-2xl text-green-700 font-medium text-center">
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
                    <button type="submit" class="p-2 bg-green-700 text-white font-bold rounded hover:bg-green-400">Отправить</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="bg-green-700 text-green-200 p-5 m-5 rounded-lg shadow-lg shadow-gray-500">
        <div class="flex flex-col md:flex-row items-center justify-center md:space-x-20">
            <p class=" font-extralight text-2xl ">
                ИНВАТАКСИ
            </p>
            <div class="flex flex-col">
                <p class=" font-extralight">
                    <b>Адрес</b>: мк-р Айгерим ул.Азаттык 43
                </p>
                <p class=" font-extralight">
                    <b>Номер</b>: 87055202788, 87081015971
                </p>
                <p class=" font-extralight">
                    <b>Instagram</b>: @invakolyaski.kz
                </p>
            </div>
        </div>
    </footer>
@endsection
