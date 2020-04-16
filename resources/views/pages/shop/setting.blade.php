@extends('shopper::layouts.'. config('shopper.theme'))
@section('title', __('Shop Setting'))

@section('content')

    <div class="mt-6 md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-primary-text sm:text-3xl sm:leading-9 sm:truncate">{{ __('Shop Setting') }}</h2>
        </div>
    </div>

@endsection
