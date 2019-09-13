@extends('layouts.default')

@section('content')
<div class="jumbotron">
  <h1>Hello Laravel</h1>
  <br>
  <p>
    一切，将从这里开始。
  </p>
  <p>
    <a class="btn btn-lg btn-success" href="{{ route('user.create') }}" role="button">现在注册</a>
  </p>
</div>
@endsection