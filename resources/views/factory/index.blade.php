@vite('resources/css/app.css')

<a href="{{route('factories.create')}}" class="inline-block bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded mb-4">Create</a>

<div class="overflow-x-auto shadow-lg rounded-lg">
    <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
        @foreach($factory as $item)
            <tr class="bg-white">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border border-gray-300">{{$item->id}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border border-gray-300">{{$item->code}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border border-gray-300">{{$item->name}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border border-gray-300">{{$item->branch}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border border-gray-300">{{$item->address}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border border-gray-300">
                    <a href="{{ route('factories.edit', ['factory' => $item->id]) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border border-gray-300">
                    @include('factory.delete')
                </td>
            </tr>
        @endforeach
    </table>
</div>


