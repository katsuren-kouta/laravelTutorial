@extends('layouts.app')

@section('title', 'ユーザ情報')

@section('container')
    {{-- ヘッダー帯表示 --}}
    @include('layouts.header')
    <div class="user-list">
        <h2>ユーザー情報</h2>
        <div class="header">
            <button class="search">絞り込み</button>
        </div>
        <table>
            <th>ID</th>
            <th>名前</th>
            <th>所属</th>
            <th></th>
            <tr>
                <td class="user-list-id">1</td>
                <td class="user-list-name">鈴木　太郎</td>
                <td class="user-list-belong">営業部営業課</td>
                <td class="user-list-details"><button class="details-button">詳細</button></td>
            </tr>
        </table>
        <button class="add">新規登録</button>
    </div>
@endsection

