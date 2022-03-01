@extends('layouts.admin')

@section('select2-css')
  <link href="{{ asset('admin/vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
  <style>
    .m-custom-file-label {
      background-color: #fcfcfc;
      border: 1px solid #e5e5e5;
      border-radius: 3px;
      width: 100%;
      cursor: pointer;
    }

    .m-thumbnail {
      background: #6777ef;
      padding: 15px;
      color: white;
      border-radius: 3px;
    }
  </style>
@stop

@section('content')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
            </ol>
          </div>
          <form action="{{ route('saveproduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <!-- Form Basic -->
                <div class="card mb-4">
                  <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Product Title(english)</label>
                        <input type="text" class="form-control" id="exampleInputText1" name="name_en" aria-describedby="emailHelp" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Product Title(france)</label>
                        <input type="text" class="form-control" id="exampleInputText1" name="name_fr" aria-describedby="emailHelp" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Product Title(بالعربية)</label>
                        <input type="text" class="form-control" id="exampleInputText1" name="name_ar" aria-describedby="emailHelp" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" class="form-control" name="price" id="exampleInputPassword1" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Compare at price</label>
                          <input type="text" class="form-control" name="campare_price" id="exampleInputPassword1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Product description(english)</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="description_en" rows="6" required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Product description(france)</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="description_fr" rows="6" required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Product description(بالعربية)</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="description_ar" rows="6" required></textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-des">Save</button>
                      </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-6 mb-3">
                <!-- General Element -->
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                  </div>
                  <div class="card-body pt-0">
                      <div class="form-group">
                        <label for="select2Multiple" class="d-none"></label>
                        <select class="select2-multiple form-control" name="states[]" multiple="multiple"
                          id="select2Multiple" required>
                          @foreach($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div>
                        <a href="{{ route('create-category')}}">Create new category</a>
                      </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Product Imgaes</h6>
                  </div>
                  <div class="card-body pt-0">
                    <div class="m-thumbnail mb-2 text-center">
                      <svg width="20" height="20" x="0" y="0" viewBox="0 0 512 512"
                          style="enable-background:new 0 0 512 512" xml:space="preserve"
                          fill="white">
                          <g>
                              <g>
                                  <g>
                                      <path
                                          d="M256,0C114.497,0,0,114.507,0,256c0,141.503,114.507,256,256,256c141.503,0,256-114.507,256-256    C512,114.497,397.493,0,256,0z M256,472c-119.393,0-216-96.615-216-216c0-119.393,96.615-216,216-216    c119.393,0,216,96.615,216,216C472,375.393,375.385,472,256,472z"
                                          fill="white" data-original="white"></path>
                                  </g>
                              </g>
                              <g>
                                  <g>
                                      <path
                                          d="M256,128.877c-11.046,0-20,8.954-20,20V277.67c0,11.046,8.954,20,20,20s20-8.954,20-20V148.877    C276,137.831,267.046,128.877,256,128.877z"
                                          fill="white" data-original="white"></path>
                                  </g>
                              </g>
                              <g>
                                  <g>
                                      <circle cx="256" cy="349.16" r="27" fill="white">
                                      </circle>
                                  </g>
                              </g>
                          </g>
                      </svg>
                      <span>For best visual appearance (800x800)</span>
                    </div>
                    <div class="custom-file text-center m-height-auto">
                      <input type="file" id="categoryAvatar"
                         required name="images[]" multiple class="d-none">
                      <label class="avatar_label m-custom-file-label" for="categoryAvatar">
                          <img src="{{ asset('admin/img/icons/upload.png')}}" alt=""> <br>
                          Choose file
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-mobile w-100 d-none">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
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
  <script src="{{ asset('admin/vendor/select2/dist/js/select2.min.js')}}"></script>
  <script>
    $('.select2-multiple').select2();
  </script>
@stop