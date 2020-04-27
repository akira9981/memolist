@extends('layouts.app')
@section('content')
<div class="panel-body">
@include('common.errors')
  <form action="{{ url('listings')}}" method="POST" class="form-horizontal">
  {{csrf_field()}} 
    <div class="form-group"> 
      <label for="listing" class="col-sm-3 control-label">リスト名</label> 
      <div class="col-sm-6"> 
        <input type="text" name="list_name" class="form-control" value="{{ old('list_name') }}">
      </div>
      <div class="select-color">
        <select name="list_color" class="form-control">
          <option value="#e3342f">red</option>
          <option value="#3490dc">blue</option>
          <option value="#ffed4a">yello</option>
          <option value="#e3342f">red</option>
          <option value="#3490dc">blue</option>
          <option value="#ffed4a">yello</option>
        </select>
      </div>
    </div>
    <div class="form-group"> 
      <div class="col-sm-offset-3 col-sm-6"> 
        <button type="submit" class="btn submitBtn">
        <i class="glyphicon glyphicon-plus"></i> 作成 </button> 
      </div>
    </div>
  </form>
</div> 
@endsection