@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Produtos</h5>
                            <img width="80px" src="{{asset('images/drumstick-bite-solid.svg')}}">
                            <br>
                            <br>
                            <a href="{{url('/products')}}" class="btn btn-success">Ver produtos</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Categorias</h5>
                              <img width="89px" src="{{asset('images/book-open-solid.svg')}}">
                              <br>
                              <br>
                              <a href="{{url('/categories')}}" class="btn btn-success">Ver Categorias </a>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
