@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

<div class="todo_heading">
    <div class="todo-heading_success">
        Todoを作成しました
    </div>
</div>

section('content')
<div class="todo-form_content">    
    <form class="form">
        <input type="text" name="todo" value="">
        <div class="form_button">
           <button class="create-form_button>作成</button>
        </div>
    </form>
    <div class="todo-table">
        <tr class="todo-table_row">
            <th class="todo-table_header">Todo</th>
        </tr>
        <tr class="todo-table_row">
            <td class="todo-table_text">
                <input type="text" name="text" value="サンプルテキスト">
            </td>
            <div class="update-todo_button">
                <button class="update-todo_button-submit" tyype="submit">更新</button>
            </div>
            <div class="delete-todo_button">
                <button class="delete-todo_button-submit" type="submit">削除</button>
            </div>
        </tr>

        <tr class="todo-table_row">
            <td class="todo-table_text">
                <input type="text" name="text" value="サンプルテキスト">
            </td>
            <div class="update-todo_button">
                <button class="update-todo_button-submit" tyype="submit">更新</button>
            </div>
            <div class="delete-todo_button">
                <button class="delete-todo_button-submit" type="submit">削除</button>
            </div>
        </tr>
    </div>
</div>
@endsection