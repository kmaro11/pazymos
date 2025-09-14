@extends('layouts.app')

@section('content')
<x-header />

@php
    $html = $policy['html'];
@endphp

<section class="bg-gray-100">
    <div class="max-w-[870px] mx-auto px-4 md:px-14 py-16 md:py-24">
        <div class="policy-content">
            {!! $html !!}
        </div>
    </div>
    <x-footer />
 </section>
@endsection


