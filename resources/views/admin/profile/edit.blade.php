@extends('layouts.profile')
@section('title', 'My プロフィール')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                  @if (count($errors) > 0)
                    <ul>
                      @foreach($errors->all() as $e)
                      <li>{{ $e }}</li>
                      @endforeach
                    </ul>
                  @endif
                  <div class="form-grop row">
                    <label class="col-md-2" for="name">氏名</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="name" rows="1">{{ old('body') }}</textarea>
                      <input type="radio" class="form-control" name="gender" value="men">男性
                      <input type="radio" class="form-control" name="gender" value="women">女性
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="hobby">趣味</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="hobby" rows="20">{{ old('body') }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="introduction">自己紹介</label>
                      <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="10">{{ old('body') }}</textarea>
                      </div>
                  </div>
                  {{ csrf_field() }}
                  <input type="submit" class="btn btn-primary" value="更新">
                </form>

            </div>
        </div>
    </div>
@endsection
