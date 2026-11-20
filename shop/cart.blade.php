@extends('theme-db-sunset::layouts.app')

@section('title', __('shop::public.cart_title') . ' - dbCMS Sunset')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">

    <div class="flex items-center justify-between border-b border-white/10 pb-4">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-white flex items-center gap-2">
                <span class="text-rose-400"><i class="fa-solid fa-sun"></i></span>
                <span>{{ __('shop::public.cart_title') }}</span>
            </h1>
            <p class="text-xs text-slate-400 mt-1">{{ __('shop::public.cart_subtitle') }}</p>
        </div>
        <a href="{{ route('shop.index', ['market' => $currentMarket->code, 'locale' => $currentLocale]) }}" class="text-slate-400 hover:text-rose-400 text-xs">
            &larr; {{ __('shop::public.continue_shopping') }}
        </a>
    </div>

    @if(empty($items))
        <div class="p-16 text-center sunset-card space-y-4">
            <span class="text-4xl block text-gray-500"><i class="fa-solid fa-cart-shopping"></i></span>
            <h3 class="text-lg font-bold text-white">{{ __('shop::public.empty_cart') }}</h3>
            <a href="{{ route('shop.index', ['market' => $currentMarket->code, 'locale' => $currentLocale]) }}" class="btn-sunset text-xs inline-block px-5 py-2.5">{{ __('shop::public.explore_shop') }} &rarr;</a>
        </div>
    @else
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 sunset-card overflow-hidden">
                @include('shop::partials.cart-items', [
                    'items' => $items,
                    'currentMarket' => $currentMarket,
                    'currentLocale' => $currentLocale,
                ])
            </div>
            <div class="sunset-card p-6 space-y-4 h-fit">
                @include('shop::partials.cart-summary', [
                    'subtotal' => $subtotal,
                    'taxTotal' => $taxTotal,
                    'grandTotal' => $grandTotal,
                    'currentMarket' => $currentMarket,
                    'currentLocale' => $currentLocale,
                ])
            </div>
        </div>
    @endif

</div>
@endsection
