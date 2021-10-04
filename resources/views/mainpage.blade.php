@extends('layout.mainlayout')

@section('content')

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <p class="card-text">{{ $article->preview }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
</div>

@endsection
