@extends('layouts.back')


@section('content')
<div class="d-flex">
    @include('partials.navbarBackoffice')
    <div class="content w-75">
        <h1>Partie Admin Blog</h1>
        <div class="d-flex m-2">

            <h1>Partie Admin Blog</h1>
                <a class="btn btn-primary m-auto" href="{{ route("blogs.create") }}">create</a>
        </div>


        @foreach ($blog as $item)


        <div class="col-md-6 col-sm-12">
            <div class="card">

                <div class="card-content">
                    <img class="card-img-top img-fluid" src="{{ asset('/storage/images/'. $item->img) }}" alt="Card image cap" style="height: 20rem">
                    <div class="card-body">
                        <h4 class="card-title">titre : {{ $item->title }}</h4>
                        <p class="card-text">
                           {{-- description : {{$item->description}} --}}
                           <p>description : {{ Str::limit($item->description, 150) }}</p>

                        </p>
                        <p class="card-text">
                           auteur : {{$item->auteur}}
                        </p>
                        <p>
                            date de creation : {{ $item->creation }}
                        </p>
                        <p>
                            {{ $item->categorie_article->nom  }}
                        </p>

                        <p>
                            @foreach ($item->tags as $tag)
                            @if ($loop->last)

                            <span>
                            {{ $tag->nom  }}
                            </span>
                            @else
                            <span>
                                {{ $tag->nom  }} -
                            </span>
                            @endif

                            @endforeach
                        </p>

                        <button class="btn btn-primary block">Update now</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>

@endsection
