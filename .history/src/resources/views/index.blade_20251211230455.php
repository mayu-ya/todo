@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo_alert">
    <div class="todo_alert--success">
        Todoを作成しました
    </div>
</div>

<div class="todo_content">
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form_item">
            <input class="create-form_item-input" type="text" name="content">
        </div>
        <div class="create-form_button">
            <button class="create-form_button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table_inner">
            <tr class="todo-table_row">
                <th class="todo-table_header">Todo</th>
            </tr>
            <tr class="todo-table_row">
                <td class="todo-table_item">
                    <form class="update-form">
                        <div class="update-form_item">
                            <input type="text" class="update-form_item-input" name="content" value="test">
                        </div>
                        <div class="update-form_button">
                            <button class="update-form_button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table_item">
                    <form class="delete-form">
                        <div class="delete-form_button">
                            <button class="delete-form_button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
                        <tr class="todo-table_row">
                <th class="todo-table_header">Todo</th>
            </tr>
            <tr class="todo-table_row">
                <td class="todo-table_item">
                    <form class="update-form">
                        <div class="update-form_item">
                            <input type="text" class="update-form_item-input" name="content" value="test2">
                        </div>
                        <div class="update-form_button">
                            <button class="update-form_button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table_item">
                    <form class="delete-form">
                        <div class="delete-form_button">
                            <button class="delete-form_button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection