@extends('layouts.conquer2')

@section('title')
    Daftar Obat
@endsection

@section('content')
  <h2>List Products</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listdata as $li)
      <tr>
          <td><a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}"
          data-toggle="modal">{{ $li->id }}</a>
          <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">{{$li->generic_name}}</h4>
                      </div>
                      <div class="modal-body">
                          <img src="{{ asset('images/').'/'.$li->id.'.jpg' }}" height="200px" />
                          <div>{{$li->form}}</div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
        </td>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->price }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection

  
@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("medicine.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection 