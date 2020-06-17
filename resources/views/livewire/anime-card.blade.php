{{-- Anime Card --}}
<div class="col-lg-2 col-md-6">
    <div class="mt-4">
        <a href="{{ route('anime.show', $anime['id']) }}">
            <img src="{{ $anime['attributes']['posterImage']['medium'] }}" class="w-100 img-thumbnail">
        </a>
    </div>
    <div class="mt-2">
        <a href="{{ route('anime.show', $anime['id']) }}"
            class="text-dark mt-2 "><strong>{{ $anime['attributes']['canonicalTitle'] }}</strong></a>
        <div class="d-flex text-gray-600 text-xs">
            @empty(!$anime['attributes']['averageRating'])
            <span><i class="fas fa-star"></i> {{ $anime['attributes']['averageRating'] }}%</span>
            <span class="mx-2">|</span>
            @endempty
            <span><i class="fas fa-calendar"></i>
                {{ \Carbon\Carbon::parse($anime['attributes']['startDate'])->format('Y') }}</span>
        </div>

    </div>
</div>
{{-- End of Anime Card --}}