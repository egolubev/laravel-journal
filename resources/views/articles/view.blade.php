@extends('layout.mainlayout')

@section('content')

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-7">
                    <h5>{{ $article->name }}</h5>
                    <button class="btn btn-link">
                        <i class="fas fa-eye"></i>
                    </button>
                    <span>{{ $article->cnt_show }}</span>
                    <button class="btn btn-link like" id="like_{{ $article->id }}">
                        <i class="far fa-heart"></i>
                    </button>
                    <span id="like_result_{{ $article->id }}">{{ $article->cnt_like }}</span>
                    <p>
                        @foreach ($article->tags as $tag)
                            <span class="badge badge-pill badge-secondary">{{ $tag->name }}</span>
                        @endforeach
                    </p>
                    <p>{{ $article->preview }}</p>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>

@endsection
