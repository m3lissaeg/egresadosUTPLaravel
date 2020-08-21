<!-- /resources/views/vue/index.blade.php -->
@extends('layouts.chat.app')
@section('content')
<h1>This is a vue component</h1>
 <div id="app" name="app">
  <router-view></router-view>
 </div>
@endsection