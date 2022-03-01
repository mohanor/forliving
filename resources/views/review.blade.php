@extends('layouts.app')
@section('css-content')
<style>
        * {
            margin: 0;
            padding: 0;
        }

        .product-img {
            width: 100%;
        }

        .input {
            width: 100%;
            height: 50px;
            font-size: 16px;
            color: #6f6f6f;
            padding-left: 20px;
            border: 1px solid #ebebeb;
            border-radius: 4px;
        }

        .rating {
            display: flex;
        }

        .div__h5 {
            font-size: 25px;
            margin-bottom: 15px;
            margin-top: 5px;
            text-align: center;
        }

        .div_form {
            width: 90%;
            margin: 0 auto;
        }

        .review-textarea {
            height: 150px;
            font-size: 16px;
            color: #6f6f6f;
            padding-left: 20px;
            border: 1px solid #ebebeb;
            border-radius: 4px;
            padding-top: 12px;
            width: 100%;
        }

        .block {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .block label {
            margin-bottom: 5px;
            display: block;
        }

        .last_block {
            display: flex;
            justify-content: space-between;
        }

        .last_block a {
            text-decoration: none;
            color: black;
            border: 1px solid #b2b2b2;
            padding: 8px 15px;
        }

        .submit {
            background-color: #7fad39;
            border: none;
            color: white;
            padding: 8px 15px;
        }

        @media screen and (min-width: 1024px) {
            .section {
                width: 60%;
                margin: 0 auto;
            }
            
            .m-col-1 {
                display: flex;
                margin-bottom: 22px;
            }

            .product-img {
                width: 145px;
                height: 210px;
                border-radius: 5px;
                object-fit: cover;
            }

            .div__h5 {
                margin-left: 20px;
            }

            .div_form {
                width: 100%;
            }

            .block {
                margin-bottom: 25px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="section">
        <div class="m-col-1">
            <div>
                <img src="{{asset('/storage/images/'.$product[0]->src.'')}}" class="product-img" alt="">
            </div>
            <div class="div__h5">
                <h5>{{$product[0]->title}}</h5>
            </div>
        </div>
        <div class="div_form">
            <form action="{{ route('add-review')}}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product[0]->id}}">
                <div class="block">
                    <div>
                        <label for="headline">Add a headline</label>
                    </div>
                    <input type="text" id="headline" name="headline" class="input">
                </div>
                <div class="block">
                    <div>
                        <label class="mb-0">Rate</label>
                    </div>
                    <div id="rate" class="rating">
                        <input type="radio" id="star_5" name="rate" value="5" />
                        <label for="star_5" title="Five"><i class="fa fa-star"></i></label>
                        
                        <input type="radio" id="star_4" name="rate" value="4" />
                        <label for="star_4" title="Four"><i class="fa fa-star"></i></label>
                        
                        <input type="radio" id="star_3" name="rate" value="3" />
                        <label for="star_3" title="Three"><i class="fa fa-star"></i></label>
                        
                        <input type="radio" id="star_2" name="rate" value="2" />
                        <label for="star_2" title="Two"><i class="fa fa-star"></i></label>
                        
                        <input type="radio" id="star_1" name="rate" value="1" />
                        <label for="star_1" title="One"><i class="fa fa-star"></i></label>
                    </div>
                </div>
                <div class="block">
                    <div>
                        <label for="review">Write your review</label>
                    </div>
                    <textarea name="review" id="review" cols="60" rows="5" class="review-textarea"></textarea>
                </div>
                <div class="block last_block">
                    <a href="{{ route('home')}}">cancel</a>
                    <input type="submit" class="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
@endsection