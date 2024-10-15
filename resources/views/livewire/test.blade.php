<div x-data="{ test1: false,
 test2: false,
  }">
    <div class="flex justify-center">
        <ul class="flex p-52 space-x-2 flex-col">
            <li class="flex space-x-2"><a href="/">home</a></li>
            <li class="flex space-x-2"><a href="#">contact</a></li>
            <li class="flex space-x-2"><a href="#">artisan</a></li>
        </ul>
        <button
            class="bg-red-800"
            x-on:click="test1 = true"
        >hello
        </button>
        <button
            class="bg-purple-700"
            x-on:click="test2 = true"
        >hello
        </button>
        <x-modal trigger="test2" class="bg-purple-700">
            <p class="text-purple-700 bg-gray-900 text-5xl font-extrabold text-center">
                you got that !!!!!
            </p>
        </x-modal>
        <x-modal trigger="test1" class="bg-red-700">
            <p class="text-red-700 bg-gray-900 text-5xl font-extrabold text-center">
                you got that !!!!!
            </p>
        </x-modal>
    </div>
    <div>
        <ul>
            <li>hi</li>
            <li>dude</li>
            <li>sup</li>
            <li>!!</li>
        </ul>
    </div>
</div>
