@extends('layouts.back')


@section('content')
<div class="d-flex">
    @include('partials.navbarBackoffice')

<div class="content w-75">

    <h1 class="text-center">Partie Admin Gallery</h1>

    <a class="btn btn-primary m-auto" href="{{ route("images.create") }}">create</a>
     {{-- <section id="content-types">
        <div class="row">
            @foreach ($imageAll as $item)
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center  mx-auto">
                <div class="card h-100 w-50">
                    <div class="card-content">
                        <img class="card-img-top img-fluid w-100" src="{{ asset('/images/gallery/'. $item->url) }}" alt="Card image cap" style="">
                        {{-- <img class="card-img-top img-fluid" src="{{ asset('/storage/images/'. $item->url) }}" alt="Card image cap" style="height: 20rem"> --}}
                        {{-- <div class="card-body text-center">
                            <h4 class="card-title">{{ $item->nom }}</h4>
                            <p class="card-text">
                              {{ $item->nom}}
                            </p>
                            <p class="card-text">
                               {{ $item->url}}
                            </p>
                            <form action="{{ route('images.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger block">Delete</button>
                            </form>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </section> --}}
    <div class="container mx-auto px-4">

        <section class="py-5 px-4">
            <div class="flex flex-wrap -mx-4 -mb-8">
                @foreach ($imageAll as $item)
                <div class="h-100 p-4 md:mb-0 mb-5 flex flex-col justify-content-center  mx-auto">
                    <div class="h-100 w-50"
                        style=" url({{ asset('images/gallery'. $item->url) }})">
                        <img class="card-img-top img-fluid w-100" src="{{ asset('images/gallery'. $item->url) }}" alt="">
                    </div>

                    <div class=" w-full bg-white -mt-10 shadow-lg rounded-lg p-5 text-center">
                        <p class="title-post font-medium">Titre de l'image : {{ $item->nom }}</p>

                        <p class="summary-post text-base  ">Categorie : {{ $item->nom }}</p>
                        {{-- <a class="btn btn-primary" href="{{ route('gallerie.download', $item->id) }}">Download</a> --}}

                        <form action="{{ route('images.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger block">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

</div>


</div>



@endsection
