@extends('layout.mainlayout')

@section('content')

<div class="py-5 bg-grey">
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 d-flex">
                    <a href="{{ url("/articles/{$article->id}") }}" class="card mb-4">
                        <img class="card-img-top" src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Картинка" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <p class="card-text">{{ $article->preview }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
</div>

@endsection
