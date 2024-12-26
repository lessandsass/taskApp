<div class="flex mb-4 items-center">

    <p
        class="w-full text-green-500"
    >
        {{ $todo->title }}
    </p>

    <button
        class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-gray-900 text-green border-green hover:bg-green"
    >
        edit
    </button>

    <button
        class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-gray-900 text-green border-green hover:bg-green"
    >
        Done
    </button>

    <button
        class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-gray-900 hover:bg-red"
    >
        Remove
    </button>

</div>
