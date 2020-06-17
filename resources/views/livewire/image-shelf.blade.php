<div>
    <div class="text-center my-2 text-gray-100">
        You are reading <a href="{{ route('manga.show', $manga->manga_id) }}">{{ $manga->title }}</a>
    </div>
    <div class="input-group mb-3" id="page-top">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Chapter</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" wire:model="chapterId">
            <option selected>Choose a chapter...</option>
            @foreach ($mangaChapters as $chapter)
            <option value="{{ $chapter[3] }}">{{ $chapter[0] }}</option>
            @endforeach
        </select>
    </div>
    <div wire:loading>
        <div class="text-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div wire:loading.remove>
        <div class="d-flex flex-column px-5 mx-5 pb-3">
            @foreach ($images as $image)
            <img src="https://cdn.mangaeden.com/mangasimg/{{ $image[1] }}" alt="" class="img-fluid">
            @endforeach
        </div>
    </div>



</div>