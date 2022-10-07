<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sach san pham')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Danh sach san pham')
@section('content')
<div>
    <a href="/PHP2_WEB3014/ASSIGNMENT/addProduct" type="button">Create a new product</a>
</div>

<table border='1'>
    <tr>
        <th>Ten san pham</th>
        <th>Gia</th>
        <th>So luong</th>
        <th></th>
    </tr>
    @foreach ($arr as $item)
        <tr>
            <td>{{$item['name']}}</td>
            <td>{{$item['price']}}</td>
            <td>{{$item['quantity']}}</td>
            <td><img src="public/dist/img/{{$item['img']}}" alt="" width= 50px></td>
            <td><a href="/PHP2_WEB3014/ASSIGNMENT/chi-tiet/{{$item['id']}}">Chi tiet</a></td>
        </tr>
    @endforeach
</table>

    


@endsection
