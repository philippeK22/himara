@extends('layouts.back')


@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">CONTACT</h4>
                    <a href="{{ route('contact.index') }}" class="btn btn-primary"> Retour</a>
                </div>

                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{ route('contacts.update',$info->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">adresse</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="description" name="adresse" value="{{ old('adresse',$info->adresse) }}">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">email</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="mail" value="{{ old('mail',$info->mail) }}">
                                    </div>

                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">telephone</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="telephone" value="{{ old('telephone',$info->telephone) }}">
                                    </div>

                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">fax</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="fax" value="{{ old('fax',$info->fax) }}">
                                    </div>

                                </div>


                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">message</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="website" name="site" value="{{ old('site',$info->site) }}">
                                    </div>

                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
