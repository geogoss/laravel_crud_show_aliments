<section class="row mx-2">
    @foreach ($foods as $item)
        <div class="card col-2" style="width: 18rem;">
            <img src="{{ $item->url }} " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }} </h5>
                <p class="card-text">{{ $item->amount }} </p>
                <form action="/delete/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/show/{{$item->id}} " class="btn btn-warning">Go somewhere</a>
            </div>
        </div>
    @endforeach
</section>
