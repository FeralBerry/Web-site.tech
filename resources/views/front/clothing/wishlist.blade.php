@extends('front.clothing.layout.layout')
@section('breadcrumb')
    @include('front.clothing.layout.breadcrumb')
@endsection
@section('content')
    <!-- wishlist are start-->
    <div class="wishlist-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>My Wishlist On Clothing</h4>
                    <div class="cart-page-area">
                        <form method="post" action="#">
                            <div class="table-responsive">
                                <table class="shop_table-2 cart table">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail ">Image</th>
                                        <th class="product-name ">Product Name</th>
                                        <th class="product-price ">Unit Price</th>
                                        <th class="product-subtotal ">Stock</th>
                                        <th class="product-quantity">Add Item</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="cart_item">
                                        <td class="item-img">
                                            <a href="{{ route('clothing-pages',['clothing','singleProduct']) }}"><img src="{{ asset('front/clothing/images/product/01.jpg') }}" alt=""> </a>
                                        </td>
                                        <td class="item-title"> <a href="#">Fusce Laoreet Volutpat </a></td>
                                        <td class="item-price"> $130.00 </td>
                                        <td class="item-qty">
                                            In Stock
                                        </td>
                                        <td class="total-price"><a class="btn-def btn2" href="#">Add To Cart</a></td>
                                        <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="item-img">
                                            <a href="{{ route('clothing-pages',['clothing','singleProduct']) }}"><img src="{{ asset('front/clothing/images/product/02.jpg') }}" alt=""> </a>
                                        </td>
                                        <td class="item-title"> <a href="#">Fusce Laoreet Volutpat </a></td>
                                        <td class="item-price"> $140.00 </td>
                                        <td class="item-qty">
                                            In Stock
                                        </td>
                                        <td class="total-price"><a class="btn-def btn2" href="#">Add To Cart</a></td>
                                        <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wishlist are end-->
    @include('front.clothing.section.quickview')
@endsection
