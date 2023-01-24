<div>
    <h1>This is the header component file </h1>
    <h3>Hello {{$name}}</h3>
    <h3>fruits are:</h3>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>