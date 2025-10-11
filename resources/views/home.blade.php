@extends('layouts.app')

@section('content')
<x-header />
<x-hero />
<x-popular-trainings />
<x-popular-courses />
<x-how-it-works />
<x-statistics />
<x-testimonials-section class="md:pt-[110px] pt-[60px]"/>
<x-testimonials class="md:pt-0 pt-0"/>
<x-latest-articles label="true" />
<x-footer />
@endsection