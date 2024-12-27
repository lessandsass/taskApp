<div class="flex mb-4 items-center bg-gray-100 p-2 rounded-lg shadow-gray-200 shadow-lg">

    <td class="p-2">
        <input type="checkbox" class="h-4 w-4 rounded border-2 mr-2" value="id-1" @click="toggleCheckbox($el, 2890.66)" />
    </td>

    <p
        class="w-full text-green-500"
    >
        {{ $todo->title }}
    </p>

    <button
            type="submit"
            class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        >
            Edit
        </button>

    <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
        Remove
    </button>

</div>
