@extends($layout ?? 'theme-db-sunset::layouts.app')

@section('title', $translation->meta_title ?? $translation->title ?? __('Página'))
@section('meta_description', $translation->meta_description ?? '')

@section('content')
<x-cms::content-region theme="db-sunset" class="gap-y-16 pb-16" :data-cms-edit-url="!empty($page) ? route('admin.pages.edit', $page->id) : false" data-cms-edit-label="Editar Página">
    @if(isset($renderedSections) && count($renderedSections) > 0)
        @foreach($renderedSections as $sectionHtml)
            {!! $sectionHtml !!}
        @endforeach
    @else
        <div class="max-w-4xl mx-auto py-24 text-center sunset-card p-12">
            <h1 class="text-3xl font-bold text-white mb-3">{{ $translation->title ?? __('Página') }}</h1>
            <p class="text-slate-400 text-sm">{{ __('Esta página aún no dispone de bloques maquetados.') }}</p>
        </div>
    @endif
</x-cms::content-region>

<!-- Schema.org WebPage JSON-LD -->
@endsection
