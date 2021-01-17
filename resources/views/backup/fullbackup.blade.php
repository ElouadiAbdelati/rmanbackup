@extends('template')

@section('content')
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">
            <div class=" col ">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h3 class="mb-0">Full Backup</h3>
                    </div>
                    <div class="card-body">
                        <div class="row icon-examples">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Username</label>
                                    <input type="text" id="input-username" class="form-control" placeholder="Username"
                                       >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Password</label>
                                    <input type="text" id="input-username" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-3col-md-3">
                                <button type="button" class="btn-icon-clipboard" data-clipboard-text="Envoyer"
                                    title="Envoyer">
                                    <div>
                                        <i class="ni ni-curved-next"></i>
                                        <span>Envoyer</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
