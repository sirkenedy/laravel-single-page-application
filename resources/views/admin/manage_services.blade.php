@extends('includes.admin_header')

@section('content')
<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Input groups</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
                <th>Category</th>
                <th>Icon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($services as $service)
              <tr>
                <td>
                  <span class="text-muted">{{$service->service}}</span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold">{{$service->image}}</a>
                </td>
                <td class="table-actions">
                <span class="table-action" data-toggle="tooltip" data-original-title="Edit product" onClick="editService('{{$service->id}}','{{$service->service}}', '{{$service->image}}','{{$service->description}}')">
                    <i class="fas fa-user-edit"></i>
                  </span>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Input groups</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form id="ajaxForm" method="PUT" action="javascript:void(0)">
                @csrf
                  <!-- Input groups with icon -->
                  <input type="hidden" id="hiddenId" name="id">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input class="form-control" id='category' placeholder="Your name" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input class="form-control" id='icon' placeholder="Email address" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div id="description" data-toggle="quill" data-quill-placeholder="Quill WYSIWYG"> <div id="ans">dd</div></div> -->
                  <textarea name="description" class="form-control" id="description" cols="60" rows="10"></textarea>
                  <button id='update' class="btn btn-primary" onclick="updateService()"  style="float:right;margin-top:20px;">Update</button>
                  <button id='add_new' class="btn btn-primary" onclick="storeService()" style="float:right;margin-top:20px;">Add New</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('other_js')
<script>
  $(window).on('load',function() {
      $('#update').hide();
  });
  function editService($id,$cat, $icon, $description){
    // alert('yes');
    $('#update').show();
    $('#add_new').hide();
    $("#category").focus();
    document.getElementById('hiddenId').value = $id;
    document.getElementById('category').value = $cat;
    document.getElementById('icon').value = $icon;
    document.getElementById('description').value = $description;
  }

</script>
<script>
  
  function updateService() {
    var id = document.getElementById('hiddenId').value;
    var service = document.getElementById('category').value;
    var icon = document.getElementById('icon').value;
    var description = document.getElementById('description').value;
    var token = "{{ csrf_token() }}";

    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type:'PUT',
      url: "/admin/services/"+id,
      data: {
        _token: token,
        _method:'PUT',
        'service' : service,
        'icon': icon,
        'description': description,
      },
      contentType : 'application/json',
      dataType:'json',
      beforeSend: function () {
        alert('yes')
      },
      success: function(data) {
        alert(data);
      }
      // console.log(data);
      // error: function(data){
      //   console.log(data);
      // }
    });
  }
</script>
<script>
  function storeService() {
    // var id = document.getElementById('hiddenId').value;
    var service = document.getElementById('category').value;
    var icon = document.getElementById('icon').value;
    var description = document.getElementById('description').value;
    // var token = "{{ csrf_token() }}";

    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type:'POST',
      url: "http://127.0.0.1:8000/admin/services/store",
      data: $('#ajaxForm').serialize(),
      beforeSend: function () {
        alert('new')
      },
      success: function() {
        $('#update').show();
        // console.log(data);
      }
      // error: function(data){
      //   console.log(data);
      // }
    });
  }
</script>
@endsection