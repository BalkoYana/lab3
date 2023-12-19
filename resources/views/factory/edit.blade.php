@vite('resources/css/app.css')
<a href="{{route('factories.index')}}" class="text-blue-500 hover:underline mb-4 block">Back</a>

<h1 class="text-2xl font-bold mb-4">Edit Factory</h1>
<form method="POST" action="{{ route('factories.update', ['factory' => $factory->id]) }}" class="space-y-4">

    @csrf
    @method('PUT')

    <label for="code" class="block">Code</label>
    <input id="code" type="text" name="code" value="{{ $factory->code }}" class="border p-2 rounded w-full">

    <label for="name" class="block">Name</label>
    <input id="name" type="text" name="name" value="{{ $factory->name }}" class="border p-2 rounded w-full">

    <label for="number" class="block">Number</label>
    <input id="number" type="text" name="number" value="{{ $factory->number }}" class="border p-2 rounded w-full">

    <label for="branch" class="block">Branch</label>
    <input id="branch" type="text" name="branch" value="{{ $factory->branch }}" class="border p-2 rounded w-full">

    <label for="address" class="block">Address</label>
    <input id="address" type="text" name="address" value="{{ $factory->address }}" class="border p-2 rounded w-full">

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Factory</button>
</form>
