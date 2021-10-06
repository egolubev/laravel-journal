@extends('layout.mainlayout')

@section('content')

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    @foreach ($articles as $article)
                        <h5>{{ $article->name }}</h5>
                        <p>{{ $article->preview }}</p>
                    @endforeach
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
