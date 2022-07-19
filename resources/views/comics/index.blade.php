@forelse ($comics as $comic)
    <div>
        <h2> {{ $comic->title }} </h2>
        <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
        <p>{{ $comic->price }} - <span>{{ $comic->series }}</span></p> 
    </div>

@endforelse