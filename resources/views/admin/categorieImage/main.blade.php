@extends('layouts.back')


@section('content')
<div class="d-flex">
    @include('partials.navbarBackoffice')
    <div class="content w-75">
        @include('layouts.flash')
        <h1>Partie Admin Categorie Image</h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Category Image</h4>
                    <a href="{{ route("categoryImage.create") }} " class="btn btn-primary">Create</a>
                </div>
                <div class="card-content">

                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoryImageAll as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->id }}</td>
                                    <td class="text-bold-500">{{ $item->nom }}</td>

                                    <td class="text-bold-500 d-flex">
                                        <a href="{{route('categories.edit', $item->id)}}"
                                            class="btn btn-warning m-1">Edit</a>

                                        <form action="{{ route("categoryImage.destroy", $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-1">Delete</button>
                                        </form>

                                    </td>

                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
