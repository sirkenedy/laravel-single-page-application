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
                Dashboard section
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
  function editService($cat, $icon){
    // alert('yes');
    $('#update').show();
    $('#add_new').hide();
    $("#category").focus();
    document.getElementById('category').value = $cat;
    document.getElementById('icon').value = $icon;
  }
</script>
@endsection