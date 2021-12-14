@extends('layout.mainlayout')

@section('content')

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @foreach ($tags as $tag)
                        <span class="badge badge-pill badge-secondary">{{ $tag->name }}</span>
                    @endforeach
                </div>
                <div class="col-sm-9">
                    @foreach ($articles as $article)
                        <a href="#" class="card mb-4">
                            <img class="card-img-top" src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Картинка" alt="card image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->name }}</h5>
                                <p class="card-text">{{ $article->preview }}</p>
                            </div>
                        </a>
                    @endforeach
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
