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
                <form>
                  <!-- Input groups with icon -->
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
                  <button id='update' class="btn btn-primary"  style="float:right;margin-top:20px;">Update</button>
                  <button id='add_new' class="btn btn-primary"  style="float:right;margin-top:20px;">Add New</button>
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
    document.getElementById('category').value = $cat;
    document.getElementById('icon').value = $icon;
    document.getElementById('description').value = $description;
  }
</script>
@endsection