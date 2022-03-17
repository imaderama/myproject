@extends('layouts.conquer2')

@section('title')
    Daftar Kategori Obat
@endsection

@section('content')
    <h2>List Category</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>            
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datas as $li)
        <tr>
            <td>{{ $li->name }}</td>
            <td>{{ $li->description }}</td>
            <td>{{ $li->created_at }}</td>
            <td>{{ $li->updated_at }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endsection