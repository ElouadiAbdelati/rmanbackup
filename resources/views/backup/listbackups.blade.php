@extends('template')

@section('content')
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">
            <div class=" col ">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h3 class="mb-0">List Backups</h3>
                    </div>
                    @isset($form)
                    {!! form_start($form )!!}
                    <div class="card-body">

                        <div class="row icon-examples">

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    {!! form_row($form->username, $options = ['attr' => ['class' => 'form-control',
                                    'placeholder' => 'Username']]) !!}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    {!! form_row($form->password, $options = ['attr' => ['class' => 'form-control',
                                    'placeholder' => 'password']]) !!}

                                </div>
                            </div>
                            <div class="col-lg-3col-md-3">

                                {!! form_row($form->envoyer, $options = ['attr' => ['title' => 'send for full backup',
                                'class' => 'btn-icon-clipboard', ' data-clipboard-text' => 'submit for full backup']]) !!}
                            </div>

                        </div>
                    </div>
                    {!! form_end($form) !!}
                    @endisset
                    @isset($rs)
                        <div class="card-body">

                            <div class="row icon-examples">
                                @foreach ($rs as $r)
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                       <p>{{$r}}</p>
                                    </div>
                                </div>
                               @endforeach

                            </div>
                        </div>
                     @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
