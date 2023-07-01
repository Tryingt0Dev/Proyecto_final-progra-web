@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            
                
            
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">{{ __('Imagen titulo') }}</div>   
                        <div class="card-body">
                            <img src="{{asset('img/post/unknown.png')}}">
                            <hr>
                            <div class="row">
                                <div class="col-3">
                                 <textarea>Lorem ipsum dolor sit amet consectetur</textarea> <a>Artist</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
    </div>
</div>
@endsection
