@foreach($factory as $factory)
<form method="POST" action="{{ route('factories.destroy', ['factory' => $factory->id]) }}">
    @csrf
    @method('DELETE')
    @endforeach
    <button type="submit">Delete</button>
</form>

