<h2>Product Name: </h2>
<p>{{ $singer->name }} || {{ $singer->age }}</p>

<h3>Product Belongs to</h3>

<ul>
    @foreach($singer->songs as $song)
    <li>{{ $song->title }}</li>
    @endforeach
</ul>