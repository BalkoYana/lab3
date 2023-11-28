@foreach($factory as $factory1)
<form method="POST" action="{{ route('factories.destroy', ['factory' => $factory1->id]) }}">
    @csrf
    @method('DELETE')
    @endforeach
    <button type="submit">Delete</button>
</form>

