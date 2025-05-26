@extends('layouts.app')

@section('title','spp')

@push('style')
@endpush

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>SPP</h1>
        </div>
        <a href="{{route('spp.create')}}" class="btn btn-primary">Bayar SPP</a>

    </section>
</div>

@endsection

@push('script')
@endpush