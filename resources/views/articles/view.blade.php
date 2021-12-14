@extends('layout.mainlayout')

@section('content')

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-7">
                    <h5>{{ $article->name }}</h5>
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
