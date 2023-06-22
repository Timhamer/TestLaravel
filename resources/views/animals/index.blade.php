<h1>Animal List</h1>
<ul>
    @foreach($animals as $animal)
        <li>{{ $animal->name }}</li>
    @endforeach
</ul>