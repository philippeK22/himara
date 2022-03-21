@extends('layouts.back')
@section('content')
<div class="d-flex">
    @include('partials.navbarBackoffice')
    <div class="content w-75">


        <div class="page-heading text-center">
            <h3>Profile Statistics</h3>
        </div>
        {{-- <div class="page-content d-flex justify-content-end  ">
            <section class="row ">
                <div class="col-12 col-lg-12">
                    <div class="row ">
                        <div class="col-6 col-lg-3 col-md-6">

                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                                <p>
                                    <form action="{{ route("logout") }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary">Deconnexion</button>

                                    </form>
                            </div>



                        </div>
                    </div>
                </div>
        </div> --}}
    </div>
    </section>


    @endsection
