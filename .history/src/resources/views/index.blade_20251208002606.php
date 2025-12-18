@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

<div class="todo_heading">
    <div class="todo-heading_success">
        Todoを作成しました
    </div>
</div>

<div class="todo-form_content">    
    <form class="form">
        <input type="text" name="todo" value="">
    </form>
    <div class="form_button">
        <button>作成</button>
    </div>
</div>