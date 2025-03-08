<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-content items-center mb-4">
            <h2 class="text-xl font-semibold">Roles</h2>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-indigo-700">
                Add user
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">Name</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td class=" px-6 py-4 whitespace-nowrap ">
                                <div class="flex items-center">
                                    {{$role->name}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="">edit</a>
                                <a href="">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>