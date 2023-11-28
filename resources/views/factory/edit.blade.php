<a href="{{route('factories.index')}}">Back</a>

<h1>Edit Factory</h1>
<form method="POST" action="{{ route('factories.update', ['factory' => $factory->id]) }}">

    @csrf
    @method('PUT')

    <label for="code">Code</label>
    <input id="code" type="text" name="code" value="{{ $factory->code }}">

    <label for="name">Name</label>
    <input id="name" type="text" name="name" value="{{ $factory->name }}">

    <label for="number">Number</label>
    <input id="number" type="text" name="number" value="{{ $factory->number }}">

    <label for="branch">Branch</label>
    <input id="branch" type="text" name="branch" value="{{ $factory->branch }}">

    <label for="address">Address</label>
    <input id="address" type="text" name="address" value="{{ $factory->address }}">

    <button type="submit">Update Factory</button>
</form>
