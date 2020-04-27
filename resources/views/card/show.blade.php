@extends('layouts.app')
@section('content')
<div class='carddetailPage'>
  <div class="container">
    <div class="cardContents">
      <div class="cardContents_listStatus">
        <div>List Name</div>
        <div>{{ $listing->title }}</div>
      </div>
      <div class="cardContents_title">
        <div>Card Name</div>
        <h2>{{ $card->title }}</h2>
      </div>
      <div class="cardContents_memo">
        <div>Memo</div>
        <div>{{ $card->memo }}</div>
      </div>
      <div class="cardContents_btnArea">
        <a class="edit_btn" href="/listing/{{ $listing->id }}/card/{{ $card->id }}/edit">Edit</a>
        <a class="text-danger delete_btn"  onclick="return confirm('このカードを削除して大丈夫ですか?')" rel="nofollow" data-method="delete" href="/listing/{{ $listing->id }}/card/{{ $card->id }}/delete">Delete</a>
      </div>
    </div>
  </div>
</div>
@endsection