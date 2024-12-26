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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">



                <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">

                        <div class="mb-4">

                            <h1 class="text-grey-darkest">Todo List</h1>

                            <div class="flex mt-4">
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker"
                                    placeholder="Add Todo"
                                >
                                <button class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-gray-700 hover:bg-teal">Add</button>
                            </div>

                        </div>

                        <div>



                            @foreach ($todos as $todo)

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
