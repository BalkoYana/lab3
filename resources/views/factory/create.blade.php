@vite('resources/css/app.css')
<div class="w-full max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <a href="{{route('factories.index')}}" class="text-blue-500 hover:text-blue-700 mb-4 block">Back</a>

    <p class="text-2xl font-bold mb-4">Add factory</p>
    <form action="{{ route('factories.store') }}" method="POST" class="space-y-4">

        @csrf
        @method('POST')

        <div class="mb-4">
            <label id="code" class="block">Code</label>
            <input required id="code" name="code" type="text" class="shadow appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label id="name" class="block">Name</label>
            <input required id="name" name="name" type="text" class="shadow appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label id="number" class="block">Number</label>
            <input required id="number" name="number" type="text" class="shadow appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label id="branch" class="block">Branch</label>
            <input required id="branch" name="branch" type="text" class="shadow appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label id="address" class="block">Address</label>
            <input required id="address" name="address" type="text" class="shadow appearance-none border rounded w-2/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add</button>

    </form>
</div>

