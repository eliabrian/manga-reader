@extends('layouts.app')

@section('title')
{{ $manga->title }}
- Chapter
{{ $currentChapter[0] }}
@endsection

@section('background', 'class=bg-gray-900')

@section('content')
<div class="text-center my-4 text-gray-100 h4">
    You are reading <a href="{{ route('manga.show', $manga->manga_id) }}">{{ $manga->title }}</a>
    Chapter {{ $currentChapter[0] }}
</div>

<div class="d-flex justify-content-between align-items-center px-5 mx-5 my-3">
    @if (isset($prev))
    <a class="btn btn-primary"
        href="{{  route('manga.chapter', ['manga' => $manga['manga_id'], 'chapter' => $prev[3]]) }}">
        <i class="fas fa-chevron-left"></i>
    </a>
    @else
    <div></div>
    @endif
    @if (isset($next))
    <a class="btn btn-primary"
        href="{{ route('manga.chapter', ['manga' => $manga['manga_id'], 'chapter' => $next[3]]) }}">
        <i class="fas fa-chevron-right"></i>
    </a>
    @else
    <div></div>
    @endif
</div>

<div class="d-flex flex-column px-5 mx-5 pb-3">
    @foreach (array_reverse($images) as $image)
    <img src="https://cdn.mangaeden.com/mangasimg/{{ $image[1] }}" alt="" class="img-fluid">
    @endforeach
</div>


<div class="d-flex justify-content-between align-items-center px-5 mx-5 my-3">
    @if (isset($prev))
    <a class="btn btn-primary"
        href="{{  route('manga.chapter', ['manga' => $manga['manga_id'], 'chapter' => $prev[3]]) }}">
        <i class="fas fa-chevron-left"></i>
    </a>
    @else
    <div></div>
    @endif
    @if (isset($next))
    <a class="btn btn-primary"
        href="{{ route('manga.chapter', ['manga' => $manga['manga_id'], 'chapter' => $next[3]]) }}">
        <i class="fas fa-chevron-right"></i>
    </a>
    @else
    <div></div>
    @endif
</div>
@endsection

@section('scroll')
<a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
    <i class="fas fa-angle-up"></i>
</a>
@endsection

@section('scripts')
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
@endsection