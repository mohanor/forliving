@extends('layouts.admin')
@section('select2-css')
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
                            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                        </ol>
                    </div>
                    <form action="{{ route('savecategory')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <!-- Form Basic -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Categroy Name(english)</label>
                                            <input type="text" class="form-control" id="exampleInputText1" name="category_en" aria-describedby="emailHelp" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Categroy Name(france)</label>
                                            <input type="text" class="form-control" id="exampleInputText1" name="category_fr" aria-describedby="emailHelp" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Categroy Name(??????????????)</label>
                                            <input type="text" class="form-control" id="exampleInputText1" name="category_ar" aria-describedby="emailHelp" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description[english)</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="" name="description_en"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description(france)</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="" name="description_fr"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description(??????????????)</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="" name="description_ar"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-des">Save</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <!-- General Element -->
                                <div class="card mb-4">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Category thumbnail</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-0">
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
                                                required name="photo"  class="d-none">
                                            <label class="avatar_label m-custom-file-label" for="categoryAvatar">
                                                <img src="{{ asset('admin/img/icons/upload.png')}}" alt=""> <br>
                                                Choose file
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-mobile w-100">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--Row-->
                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">??</span>
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