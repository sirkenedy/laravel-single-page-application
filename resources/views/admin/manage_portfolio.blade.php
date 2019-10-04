@extends('includes.admin_header')

@section('content')
<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-wrapper">
            <!-- Custom form validation -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Manage Portfolio Section</h3>
              </div>
              <!-- Card body -->
              <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                  <div class="box-header with-border">
                                    <h2 class="box-title">Testimonials</h2>
                                  </div>

                                    <div>
                                         <div class="box">
                                      <div class="box-header">
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped ">
                                          <thead>
                                            <tr>
                                              <th>image</th>
                                              <th>Project title</th>
                                              <th>category</th>
                                              <th>Action</th>


                                            </tr>
                                          </thead>
                                          <tbody id="sliderlist">
                                          
                                          
                                          </tbody>
                                          <tfoot>
                                          <tr>
                                              <th>image</th>
                                              <th>Project title</th>
                                              <th>category</th>
                                              <th></th>
                                          </tr>
                                        
                                          </tfoot>
                                        </table>
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    </div> 
                                

                                </div>
                              </div>
          </div>
        </div>
      </div>

@endsection