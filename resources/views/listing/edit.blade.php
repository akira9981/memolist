@extends('layouts.app')
@section('content')
<div class="panel-body">
  @include('common.errors')
  <form action="{{ url('/listing/edit')}}" method="POST" class="form-horizontal">
    {{csrf_field()}} 
      <div class="form-group"> 
        <label for="listing" class="col-sm-3 control-label">リスト名</label> 
        <div class="col-sm-6">  
          <input type="text" name="list_name" value="{{ old('list_name', $listing->title) }}" class="form-control"> 
        </div>
        <input type="hidden" name="id" value="{{ old('id', $listing->id) }}"> 
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-3 col-sm-6"> 
          <button type="submit" class="btn submitBtn">
            <i class="glyphicon glyphicon-saved"></i> 更新
          </button> 
        </div>
      </div>
    </form>
</div>
@endsection