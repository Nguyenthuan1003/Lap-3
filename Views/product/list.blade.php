@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Chi tiet san pham')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Chi tiet san pham')
@section('content')
<div>
    <a href="/PHP2_WEB3014/ASSIGNMENT/" type="button">Quay ve trang chu</a>
</div>

<table border='1'>
    <tr>
        <th>Ten san pham</th>
        <th>Gia</th>
        <th>So luong</th>
    </tr>
        <tr>
            <td>{{$name}}</td>
            <td>{{$price}}</td>
            <td>{{$quantity}}</td>
        </tr>
</table>
@endsection