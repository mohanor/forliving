@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('Product')}}</h1>
        <div class="row">
            @foreach($products as $item)
                <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="box">
                        <img style="width: 100%;height: 250px;object-fit: cover;" src="{{ asset('/storage/images/' . $item->src . '')}}" alt="">
                        <div class="text-center p-3">
                            <div>
                                <h6><a href="{{ route('product-details', $item->product)}}">{{ $item->title}}</a></h6>
                            </div>
                            <div class="mb-2">
                                @if($item->status == "finsh")
                                    <a href="{{ route('create-review', $item->product)}}" class="btn btn-warning mb-0 w-100">{{ __('Add Review')}}</a>
                                @else
                                    <h6 class="btn btn-success mb-0 w-100">{{ $item->status}}</h6>
                                @endif
                            </div>
                            <div>
                                <a href="{{ route('product-details', $item->product)}}" class="btn btn-info w-100">{{ __('shop again')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
