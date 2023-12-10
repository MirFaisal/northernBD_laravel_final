<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Project
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form
                        action="{{ route('UPDATE::PROJECT', $project->id) }}"
                        method="post"
                        enctype="multipart/form-data"
                        class=""
                    >
                        @csrf

                        <div class="">
                            <!-- project name and client name -->
                            <div class="flex w-full">
                                <div class="w-full mr-2">
                                    <label
                                        for="public_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Project Name</label
                                    >
                                    <input
                                        name="project_name"
                                        type="text"
                                        id="project_name"
                                        value="{{$project->project_name}}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required
                                    />
                                </div>
                                <div class="w-full">
                                    <label
                                        for="client_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Client Name</label
                                    >
                                    <input
                                        name="client_name"
                                        type="text"
                                        value="{{$project->client_name}}"
                                        id="client_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required
                                    />
                                </div>
                            </div>
                            <!-- description -->
                            <div class="w-full mt-3">
                                <label
                                    for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Your message</label
                                >
                                <textarea
                                    name="description"
                                    id="message"
                                    rows="4"
                                    value="{{$project->description}}"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your thoughts here..."
                                >
                                {{$project->description}}
                            </textarea
                                >
                            </div>
                            <!-- category and other -->
                            <div class="flex justify-between w-full mt-3">
                                <div class="w-full mr-2">
                                    <label
                                        for="category_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Select an option</label
                                    >
                                    <select
                                        name="category_id"
                                        id="countries"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    >
                                        <option
                                            value="{{$project->category_id}}"
                                            selected
                                        >
                                            {{$project->category_name($project->category_id)}}
                                        </option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$project->category_name($category->id)}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="w-full mr-2">
                                    <label
                                        for="site_size"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Site Size</label
                                    >
                                    <input
                                        name="site_size"
                                        type="text"
                                        value="{{$project->site_size}}"
                                        id="site_size"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="1200 sqf"
                                        required
                                    />
                                </div>

                                <div class="w-full mr-2">
                                    <label
                                        for="planning_approved"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Planning Approved Date</label
                                    >
                                    <input
                                        type="date"
                                        name="planning_approved"
                                        value="{{$project->planning_approved}}"
                                        id="planning_approved"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="7"
                                        required
                                    />
                                </div>

                                <div class="w-full">
                                    <label
                                        for="number_of_homes"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        >Number Of Homes</label
                                    >
                                    <input
                                        type="text"
                                        name="number_of_homes"
                                        value="{{$project->number_of_homes}}"
                                        id="number_of_homes"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="John"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="flex justify-between mt-3">
                                <div class="w-full mr-3">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="feature_image"
                                        >Feature Image</label
                                    >
                                    <input
                                        name="feature_image"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="feature_image"
                                        type="file"
                                    />
                                </div>
                                <div class="w-full mr-3">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="project_image_1"
                                        >Project Image 1</label
                                    >
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="project_image_1"
                                        name="project_image_1"
                                        type="file"
                                    />
                                </div>
                                <div class="w-full">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="project_image_2"
                                        >Project Image 2</label
                                    >
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="project_image_2"
                                        name="project_image_2"
                                        type="file"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-5 justify-end">
                            <button
                                type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Add Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
