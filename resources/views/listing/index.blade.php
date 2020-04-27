@extends('layouts.app')
@section('content')

<div class="topPage">
  <div class="listWrapper">
    @foreach ($listings as $listing) 
      <div class="list" style="background-color:{{ $listing->color}};">
        <div class="list_circle"></div>
        <div class="list_header">
          <h2 class="list_header_title">{{ $listing->title }}</h2>
          <div class="list_header_action">
            <a onclick="return confirm('{{ $listing->title }}を削除して大丈夫ですか？')" href="{{ url('/listingsdelete', $listing->id) }}"><i class="fas fa-trash"></i></a>
            <a href="{{ url('/listingsedit', $listing->id) }}"><i class="fas fa-pen"></i></a>
          </div>
        </div>

        <div class="cardWrapper">
          @foreach ($listing->cards as $card) 
          <a class="cardDetail_link" href="/listing/{{$listing->id}}/card/{{$card->id}}">
            <div class="card">
              <h3 class="card_title">{{ $card->title }}</h3>
              <div class="card_detail is-exist"><i class="fas fa-bars"></i></div>
              </div>
          </a>
          @endforeach
          <div class="addCard">
            <i class="far fa-plus-square"></i>
            <a class="addCard_link" href="/listing/{{$listing->id}}/card/new">さらにカードを追加</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection