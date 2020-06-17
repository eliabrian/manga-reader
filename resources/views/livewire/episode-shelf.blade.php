<div class="my-5">
    <div class="d-flex text-uppercase text-dark justify-content-between">
        <h5>Episodes</h5>
        <div wire:loading>
            <div class="spinner-border spinner-border-sm" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($episodes['data'] as $episode)
        {{-- Episode Card --}}
        <div class="col-lg-3 col-md-4">
            <div class="mt-4">
                <a href="#">
                    <img src="{{ $episode['attributes']['thumbnail']['original'] }}" class="w-100 img-thumbnail">
                </a>
            </div>
            <div class="mt-2">
                <a href="#" class="text-dark mt-2 "><strong>Episode {{ $episode['attributes']['number'] }}</strong></a>
                <div class="d-flex text-gray-600">
                    <span>{{ $episode['attributes']['canonicalTitle'] }}</span>
                </div>

            </div>
        </div>
        {{-- End of Episode Card --}}
        @endforeach
    </div>

    <div class="d-flex justify-content-between mt-4">
        <button wire:click="previous" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> </button>
        <button wire:click="next" class="btn btn-secondary"><i class="fas fa-arrow-right"></i></button>
    </div>



</div>