{{-- Manga Shelf --}}
<div class="anime-shelf">
    <div class="my-5">
        <div class="text-uppercase text-dark">
            <h5>Manga List</h5>
        </div>
        <div class="list-group">
            @foreach ($mangas as $manga)

            <a href="{{ route('manga.show', $manga['i']) }}"
                class="list-group-item list-group-item-action">{{ $manga['t'] }}</a>
            @endforeach
        </div>

        <div class="d-flex justify-content-between mt-3">
            <a href="#">Previous</a>
            <a href="#">Next</a>
        </div>
    </div>
</div>
{{-- End of Manga Shelf --}}