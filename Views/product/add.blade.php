@extends('layouts.master')

@section('title', 'Them moi san pham')

@section('content-title', 'Them moi san pham')
@section('content')

<form action="" method="post">
    <div>
        <label for="">Ten san pham</label>
        <input type="text">
    </div>
    <div>
        <label for="">Gia</label>
        <input type="number">
    </div>
    <div>
        <label for="">So luong</label>
        <input type="number">
    </div>
    <button type="submit">Them</button>
</form>

@endsection