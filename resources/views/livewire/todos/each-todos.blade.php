<div class="flex mb-4 items-center bg-gray-100 p-2 rounded-lg shadow-gray-200 shadow-lg">

    <td class="p-2">
        <input
            wire:change="changeCompleted({{ $todo->id }})"
            @if ($todo->completed) checked @endif
            type="checkbox"
            class="h-4 w-4 rounded border-2 m-2"
        />
    </td>

    <div
        class="w-full text-gray-700 select-none"
    >
        {{ $todo->title }}
    </div>
    {{-- Modal --}}
    <div x-data="{ open: @entangle('modelOpened') }">
        <!-- Trigger Button -->
        <button
            @click="open = true"
            class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        >
            Edit
        </button>

        <!-- Modal -->
        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <!-- Modal Header -->
                <div class="text-lg font-semibold mb-4">Edit Task</div>

                <form>
                    <!-- Modal Content -->
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Title</label>
                        <input
                            type="text"
                            wire:model="title"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                        />
                        @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </form>

                <!-- Modal Footer -->
                <div class="flex justify-end">
                    <button @click="open = false" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">
                        Cancel
                    </button>
                    <button
                        wire:click="update"
                        class="bg-blue-500 text-white px-4 py-2 rounded"
                        @click="open = false"
                    >
                        Save
                    </button>
                </div>
            </div>
        </div>



    </div>

    <button
        wire:click="delete({{ $todo->id }})"
        type="button"
        class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
    >
        Remove
    </button>


</div



</div>
