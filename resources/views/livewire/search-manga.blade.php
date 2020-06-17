<div class="my-4">
    <div class="input-group">
        <input wire:model.debounce.500ms="search" type="text" class="form-control bg-light border-0 small"
            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
    @empty(!$search)
    <div class="list-group">
        @foreach($mangas as $manga)
        <a href="{{ route('manga.show', $manga['manga_id']) }}"
            class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
            {{ $manga->title }}
            @if ($manga->status == 2)
            <span class="badge badge-pill badge-success">
                COMPLETED
            </span>
            @elseif($manga->status == 1)
            <span class="badge badge-pill badge-primary">
                ONGOING
            </span>
            @elseif($manga->status == 0)
            <span class="badge badge-pill badge-secondary">
                NO UPDATES
            </span>
            @endif
        </a>
        @endforeach
    </div>
    @endempty
</div>