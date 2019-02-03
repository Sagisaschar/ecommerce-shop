@extends('site.master')

@section('content')

  @if ($contents->count())
  {{ Breadcrumbs::render('content', $url) }}
  @foreach ($contents as $content)
  
      <div class="row">
        <div class="col-12">
        <h2>{{ $content->ctitle }}</h2>
        <p>{!! $content->article !!}</p>
        </div>
      </div>
  @endforeach

  @else
      <div class="row">
        <div class="col-12">
          <p>
            <i>No content for this menu...</i>
          </p>
        </div>
      </div>
  @endif


@endsection