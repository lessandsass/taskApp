<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Todos') }}
            </h2>

            <button
                type="submit"
                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            >
                Add Task
            </button>
        </div>
    </x-slot>

    <div class="py-12 relative">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">



                <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class="bg-white rounded shadow p-6 m-4 lg:w-9/12">

                        <form
                            wire:submit.prevent="add"
                        >

                            @if (session()->has('message'))
                                <div
                                    wire:ignore
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition:enter="transition ease-out duration-500"
                                    x-transition:enter-start="opacity-0 transform scale-90"
                                    x-transition:enter-end="opacity-100 transform scale-100"
                                    x-transition:leave="transition ease-in duration-500"
                                    x-transition:leave-start="opacity-100 transform scale-100"
                                    x-transition:leave-end="opacity-0 transform scale-90"
                                    x-init="setTimeout(() => show = false, 3000)"
                                    class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md absolute top-0 right-0 mt-4 mr-4"
                                    style="display: none;"
                                >
                                    <div class="flex">
                                        <div>
                                            <p class="text-sm">
                                                {{ session('message') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-4">

                                <h1 class="text-grey-darkest">Todo List</h1>

                                <div class="flex mt-4 justify-between">

                                    <div class="flex-1 mr-4">
                                        <input
                                            wire:model.live="title"
                                            class="shadow appearance-none rounded w-full py-2 px-3 mr-4 text-grey-darker border-2 @error('title') border-red-500 @enderror placeholder-gray-400 leading-tight focus:outline-none focus:shadow-outline"
                                            placeholder="Add Todo"
                                        >
                                        @error('title')
                                            <div class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button
                                        type="submit"
                                        wire:loading.attr="disabled"
                                        wire:target="add"
                                        wire:loading.class="opacity-50 cursor-wait"
                                        @submit.prevent="add"
                                        @click="show = 'true'"
                                        class="flex p-2 border-2 rounded text-teal border-gray-600 hover:text-gray-700 hover:bg-teal"
                                    >
                                        Add
                                    </button>
                                </div>

                            </div>

                        </form>

                        <div>





                            @foreach ($todos as $todo)

                                <livewire:todos.each-todos :todo="$todo" :wire:key="'each-todo-'.$todo->id" />

                            @endforeach



                            <div class="flex mb-4 items-center">

                                <p
                                    class="w-full text-grey-darkest"
                                >
                                    Add another component to Tailwind Components
                                </p>

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

                            <div class="flex mb-4 items-center">
                                <p class="w-full line-through text-green">Submit Todo App Component to Tailwind Components</p>

                                <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-gray-900 text-grey border-grey hover:bg-grey">Not Done</button>

                                <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-gray-900 hover:bg-red">Remove</button>

                            </div>

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
