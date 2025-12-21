@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo_alert">
    @if(session('message'))
    <div class="todo_alert--success">
        {{ session('message')}}
    </div>
    @endif
    @if($errors->any())
    <div class="todo_alert--danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="todo_content">
    <div class="section-title">
        <h2>新規作成</h2>
    </div>
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form_item">
            <input class="create-form_item-input" type="text" name="content" value="{{ old('content') }}">
            <select class="create-form_item-select">
                <option value="">カテゴリ</option>
            </select>
        </div>
        <div class="create-form_button">
            <button class="create-form_button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="section_title">
        <h2>Todo検索</h2>
    </div>
    <form class="search-form">
        <div class="search-form_item">
            <input type="text" class="search-form_item-input">
            <select class="search-form_item-select">
                <option value="">カテゴリ</option>
            </select>
        </div>
        <div class="search-form_button">
            <button class="search-form_button-submit" type="submit">検索</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table_inner">
            <tr class="todo-table_row">
                <th class="todo-table_header">
                    <span class="todo-table_header-span">Todo</span>
                    <span class="todo-table_header-span">カテゴリ</span>
                </th>
            </tr>
            @foreach ($todos as $todo)
            <tr class="todo-table_row">
                <td class="todo-table_item">
                    <form class="update-form" action="/todos/update" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="update-form_item">
                            <input type="text" class="update-form_item-input" name="content" value="{{ $todo['content'] }}">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        </div>
                        <div class="update-form_item">
                            <p class="update-form_item-p">Category 1</p>
                        </div>
                        <div class="update-form_button">
                            <button class="update-form_button-submit" type="submit">
                                更新
                            </button>
                        </div>
                    </form>
                </td>
                <td class="todo-table_item">
                    <form class="delete-form" action="/todos/delete" method="POST">
                        @method('DELETE')
                        @csrf
                        <div class="delete-form_button">
                            <button class="delete-form_button-submit" type="submit">
                                削除
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection