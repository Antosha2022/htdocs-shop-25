@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Вітаємо, {{ Auth::user()->name }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              ви успішно зареєструвались!
                          <div class="btn-group-vertical">
                              <button type="button" class="btn btn-info btn-lg" href="/">повернутися в крамницю</button>
                              <button type="button" class="btn btn-warning btn-lg" href="{{ route('admin-home') }}">перейти до адміністративної панелі</button>
                          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
