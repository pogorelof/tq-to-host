<header class="{{$color}} p-5 m-5 rounded-lg shadow-lg shadow-gray-500 flex justify-between items-center h-20">
    <div class="flex items-center justify-center space-x-2 md:w-2/12">
        <img src="{{$photo}}" class="{{$size}}">
        <p class="text-white font-light text-2xl">
            {{$header}}
        </p>
    </div>
    <div class="hover:scale-110 transition duration-150">
        <a href="{{route("home")}}" class="text-white font-light text-2xl hover:text-yellow-300 transition duration-150">
            Inclusi<b class="text-yellow-300">o</b>n
        </a>
    </div>
</header>
