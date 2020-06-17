@extends('layouts.app')

@section('content')


<div class="my-3">
    <div class="row">
        <div class="col-md-3 my-3">
            <img src="https://cdn.mangaeden.com/mangasimg/{{ $manga['image'] }}" class="w-100">
        </div>
        <div class="col-md-9 my-3">
            <h2 class="text-gray-900">{{ $manga['title'] }} ({{ $manga['released'] }})</h2>
            <div class="my-2">
                @if ($manga['status'] == 2)
                <span class="badge badge-success">
                    COMPLETED
                </span>
                @elseif($manga['status'] == 1)
                <span class="badge badge-primary">
                    ONGOING
                </span>
                @elseif($manga['status'] == 0)
                <span class="badge badge-secondary">
                    NO UPDATES
                </span>
                @endif
            </div>
            <p class="my-1">
                Author : <span class="text-gray-900">{{ $manga['author'] }}</span>
            </p>
            <div class="my-2">
                @foreach ($manga['categories'] as $category)

                <span class="badge badge-pill badge-info">{{ $category }}</span>
                @endforeach
            </div>
            <p style="white-space:pre-line" class="text-justify">{!! $manga['description'] !!}</p>
        </div>
    </div>
</div>

<div class="episode-shelf py-3">
    <div class="list-group ">
        @foreach ($manga['chapters'] as $chapter)
        <a href="{{ route('manga.chapter', ['manga' => $manga['id'], 'chapter' => $chapter[3]]) }}"
            class="list-group-item list-group-item-action  d-flex align-items-center justify-content-between">
            Chapter : {{ $chapter['0'] }}
            <span class="text-xs">{{date("d-m-Y", $chapter['1']) }}</span>
        </a>
        @endforeach
    </div>
</div>


@endsection