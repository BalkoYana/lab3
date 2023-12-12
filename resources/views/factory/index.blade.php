<a href="{{route('factories.create')}}">Create</a><br/>
<table border="1">

    @foreach($factory as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->code}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->branch}}</td>
            <td>{{$item->address}}</td>
            <td><a href="{{ route('factories.edit', ['factory' => $item->id]) }}">Edit</a></td>
            <td>
                @include('factory.delete')

            </td>
        </tr>
    @endforeach

</table>
