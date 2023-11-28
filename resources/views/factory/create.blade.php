<a href="{{route('factories.index')}}">Back</a>
<br/>
<br/>
<p>Add factory</p>
<form action="{{ route('factories.store') }}" method="POST">

    @csrf
    @method('POST')
    <label id="code">Code</label>
    <input required id="code" name="code" type="text"><br />

    <label id="name">Name</label>
    <input required id="name" name="name" type="text"><br />

    <label id="number">Number</label>
    <input required id="number" name="number" type="text"><br />

    <label id="branch">Branch</label>
    <input required id="branch" name="branch" type="text"><br />

    <label id="address">Address</label>
    <input required id="address" name="address" type="text"><br />

    <button type="submit">Add</button>

</form>
