@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">SALDO</div>

                <div class="card-body">
                    <h1>R$ {{number_format($wallet->value,2,',','.')}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
