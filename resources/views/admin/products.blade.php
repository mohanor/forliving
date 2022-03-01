@extends('layouts.admin')

@section('select2-css')
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop
@section('content')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Products List</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product List</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>image</th>
                        <th>Title</th>
                        <th>description</th>
                        <th>price</th>
                        <th>compare price</th>
                        <th>Start date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>image</th>
                        <th>title</th>
                        <th>description</th>
                        <th>price</th>
                        <th>compare price</th>
                        <th>Start date</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach($products as $product)
                        <tr>
                          <td>
                            <img src="{{asset('/storage/images/' . $product->src . '')}}" class="img-thumbnail" alt="">
                          </td>
                          <td>{{$product->title}}</td>
                          <td>{{ \Illuminate\Support\Str::limit($product->description, $limit = 54, $end = '...') }}</td>
                          <td>{{$product->price}}</td>
                          <td>{{$product->compare_price}}</td>
                          <td>{{$product->created_at}}</td>
                          <td  class="d-flex">
                            <a class="btn btn-success" href="{{ route('edit-product', $product->product_id)}}">
                              edit
                            </a>

                            <form action="{{ route('delete-product', $product->product_id)}}" method="post">
                              <input class="btn btn-danger mx-2" type="submit" value="Delete" />
                              @method('delete')
                              @csrf
                            </form>

                            <a class="btn btn-info" href="">
                              view
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
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <div class="modal-footer">   
                    <a class="btn btn-outline-primary" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@stop

@section('select2-script')
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
  @stop