@extends('theme-db-sunset::layouts.app')

@section('title', __('shop::public.checkout_title'))

@section('content')
<div class="max-w-5xl mx-auto space-y-8 font-sans">
    <div class="space-y-2">
        <h1 class="text-3xl font-extrabold text-slate-900">{{ __('shop::public.checkout_title') }}</h1>
        <p class="text-xs text-slate-500">{{ __('shop::public.checkout_description') }}</p>
    </div>
    <div class="sunset-card p-6">
        @include('shop::partials.checkout-form', [
            'items' => $items,
            'subtotal' => $subtotal,
            'taxTotal' => $taxTotal,
            'grandTotal' => $grandTotal,
            'currentMarket' => $currentMarket,
            'currentLocale' => $currentLocale,
        ])
    </div>
</div>
@endsection
