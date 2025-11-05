@extends('layouts.app')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">
        <h4 class="fw-bold m-0">Hay, {{ $user->name }}</h4>
        <a href="{{ route('auth.logout') }}" class="btn btn-warning btn-sm fw-semibold px-3">
            Keluar
        </a>
    </div>
</div>
@endsection
