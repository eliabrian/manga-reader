@extends('layouts.app')

@section('content')
{{-- Manga Shelf --}}
<livewire:search-manga></livewire:search-manga>

<div class="anime-shelf">
    <div class="my-5">
        <div class="text-uppercase text-dark">
            <h5>Manga List</h5>
        </div>
        <div class="list-group-flush">
            @foreach ($mangas as $manga)

            <a href="{{ route('manga.show', $manga['i']) }}"
                class="list-group-item list-group-item-action manga">{{ $manga['t'] }}</a>
            @endforeach
        </div>
    </div>
</div>
<div class="page-load-status my-2">
    <p class="infinite-scroll-request">
        <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </p>
</div>
{{-- End of Manga Shelf --}}
@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>

<script>
    var elem = document.querySelector('.list-group-flush');
        var infScroll = new InfiniteScroll( elem, {
        // options
        path: '/manga/page/@{{#}}',
        append: '.manga',
        history: false,
        status: '.page-load-status'
    });
</script>
@endsection