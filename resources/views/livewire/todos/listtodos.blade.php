<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Todos') }}
            </h2>
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

                                <h1 class="tex-gray-600">Task List</h1>

                                <div class="flex mt-4 justify-between">

                                    <div class="flex-1 mr-4">
                                        <input
                                            wire:model.live="title"
                                            class="shadow appearance-none rounded w-full py-2 px-3 mr-4 text-grey-darker border-2 border-grey-100 @error('title') border-red-500 @enderror placeholder-gray-400 leading-tight focus:outline-none focus:shadow-outline"
                                            placeholder="Add Todo"
                                        >
                                        @error('title')
                                            <div class="text-red-500 text-xs mt-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="flex-1 mr-4">
                                        <input
                                            wire:model.live="description"
                                            class="shadow appearance-none rounded w-full py-2 px-3 mr-4 text-grey-darker border-2 border-grey-100 @error('title') border-red-500 @enderror placeholder-gray-400 leading-tight focus:outline-none focus:shadow-outline"
                                            placeholder="Add Description"
                                        >
                                        @error('description')
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
                                        class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
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

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
