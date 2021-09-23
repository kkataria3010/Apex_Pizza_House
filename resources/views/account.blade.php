@extends('layouts.app')
@section('content')
<div class="container" style="margin:10rem auto;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: var(--secondary);color:var(--heaven)">Account Details</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" value="{{Auth::user()->email}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>                                   
                                <div class="col-md-9">
                                    <textarea id="address" type="text" class="form-control" name="address" style="height:6rem; width:16rem;"  disabled>{{Auth::user()->address}}</textarea>
                                </div>
                           </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection