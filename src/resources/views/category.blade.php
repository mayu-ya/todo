@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="category_alert">
    @if(session('message'))
    <div class="category_alert--success">
        {{ session('message') }}
    </div>
    @endif
    @if($errors->any())
    <div class="category_alert--danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="category_content">
    <form class="create-form" action="/catedories" method="post">
        @csrf
        <div class="create-form_item">
            <input type="text" class="create-form_item-input" name="name">
        </div>
        <div class="create-form_button">
            <button class="create-form_button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="category-table">
        <table class="category-table_inner">
            <tr class="category-table_row">
                <th class="category-table_header">category</th>
            </tr>
            @foreach($categories as $category)
            <tr class="category-table_row">
                <td class="category-table_item">
                    <form class="update-form">
                        <div class="update-form_item">
                            <input type="text" class="update-form_item-input" value="{{ $category['name'] }}">
                        </div>
                        <div class="update-form_button">
                            <button class="update-form_button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="category-table_item">
                    <form class="delete-form">
                        <div class="delete-form_button">
                            <button class="delete-form_button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            <tr class="category-table_row">
                <td class="category-table_item">
                    <form class="update-form">
                        <div class="update-form_item">
                            <input type="text" class="update-form_item-input" value="{{ $category['name'] }}" 
                        </div>
                        <div class="update-form_button">
                            <button class="update-form_button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="category-table_item">
                    <form class="delete-form">
                        <div class="delete-form_button">
                            <button class="delete-form_button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection