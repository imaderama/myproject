@extends('layouts.conquer2')

@section('title')
    Daftar Kategori Obat
@endsection

@section('content')
    <h2>List Category</h2>
    <a class="btn btn-default" data-toggle="modal" href="#abc">Disclaimer</a>
    <div class="modal fade" id="abc" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">DISCLAIMER</h4>
                </div>
                <div class="modal-body">
                    Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <p>The .table-hover class enables a hover state on table rows:</p>            
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>List of Medicines</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datas as $li)
        <tr>
            <td><a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}"
            data-toggle="modal">{{ $li->id }}</a>
            <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">{{$li->name}}</h4>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('img/Allerin.jpg') }}" height="200px" />
                            <div>{{$li->description}}</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </td>

            <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog modal-wide">
                    <div class="modal-content" id="showproducts">
                        <div class="modal-header">
                            <h4 class="modal-title">{{$li->name}}</h4>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('conquer2/img/ajax-modal-loading.gif')}}" alt="" class="loading">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <!--loading animated gif can put here-->
                    </div>
                </div>
            </div>

            <td>{{ $li->name }}</td>
            <td>{{ $li->description }}</td>
            <td>{{ $li->created_at }}</td>
            <td>{{ $li->updated_at }}</td>
            <td>
                <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal'
                onclick='showProducts({{ $li->id }})'>
                Show Medicine</a>
                <ul>
                    @foreach($li->medicines as $lim)
                        <li>{{$lim->generic_name}}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endsection

    @section('javascript')
    <script>
    function showProducts(category_id)
    {
    $.ajax({
        type:'POST',
        url:'{{route("category.showProducts")}}',
        data:{'_token':'<?php echo csrf_token() ?>',
            'category_id':category_id
            },
        success: function(data){
        $('#showproducts').html(data.msg)
        }
    });
    }
    </script>
    @endsection
