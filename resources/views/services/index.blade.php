@extends('layouts.app')

@section('content')

<section class=" bg-secondary mt-2 p-3">
    <h1><strong>Customer Service</strong><br></h1>
        <span class="h4"> mission is to make your job easier.</span>
</section>
<section class="content-header">
    <div class="row m-2">
        <div class="container col-sm m-1 p-2 card">
            <div class="container col-sm m-1 p-2">
                <p>
                    <span class="h4">Our Customer Service Team is Here for You</span>
                    <br>
                    <span>
                        Most of our business happens right here on Zoro.com. But, we know sometimes you just need to talk to a real person.
                    </span>
                </p>
            </div>
        </div>
        <div class="container col-sm m-1 p-2 card">
            <div class="container col-sm m-1 p-2">
                <p>
                    <span class="h4"> My Order</span>
                    <br>
                    <span> Looking for your shipment status? Enter your sales order number and email address to review your order status.</span>
                </p>
            </div>
        </div>
        <div class="container col-sm m-1 p-2 card">
            <div class="container col-sm m-1 p-2">
                <p>
                    <span class="h4">Frequently Asked Questions</span>
                    <span> Choose from the topics below to view helpful answers from our customer service team.</span>
                </p>
            </div>
        </div>
    </div>

</section>

<section class="content-header">
    <div class="row m-2">
        <div class="container col-sm m-1 p-2 card">
            <img class="img-fluid" src="{{asset('res/services images/B-illustration-customer-service-female 2.png')}}" alt="">
            <div>
                <span class="h4">Customer Service</span>
                <br>
                <span>Is there a retail store I can go to?
                How do I sign up to receive a catalog?</span>
            </div>
        </div>
        <div class="container col-sm m-1 p-2 card">
            <img class="img-fluid" src="{{asset('res/services images/FAQ-Illustration-Shipping 7.png')}}" alt="">
            <div>
                <span class="h4">Shipping</span>
                <br>
                <span>What is ABS's shipping policy?</span>
                <span>Where do you ship from?</span>
            </div>
        </div>
        <div class="container col-sm m-1 p-2 card">
            <img class="img-fluid" src="{{asset('res/services images/FAQ-Illustration-Ordering 3.png')}}" alt="">
            <div>
                <span class="h4 p-2"> Ordering</span>
                <br>
                <span class="p-2">How do I place an order?</span><br>
                <span class="p-2">How can I cancel my order?</span>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="container col-sm m-1 p-2 card">
            <img class="img-fluid" src="{{asset('res/services images/FAQ-Illustration-Payment 4.png')}}" alt="">
            <div>
                <span class="h4">Payment</span>
                <br>
                <span>Can I pay for my order with PayPal?</span><br>
                <span>What are my payment options for Zoro orders?</span>
            </div>
        </div>
        <div class="container col-sm m-1 p-2 card">
            <img class="img-fluid" src="{{asset('res/services images/FAQ-Illustration-ProductInfo 5.png')}}" alt="">
            <div>
                <span class="h4">Product Information</span>
                <br>
                <span>What is the warranty on your products?</span>
                <br>
                <span>What if the picture of an item on Zoro.com does not match the product attributes?</span>

            </div>
        </div>
        <div class="container col-sm m-1 p-2 card">
            <img class="img-fluid" src="{{asset('res/services images/FAQ-Illustration-Returns 6.png')}}" alt="">
            <div>
                <span class="h4">Returns</span>
                <br>
                <span>How do I make a return?</span>
                <br>
                <span>What do I do if I receive damaged goods?</span>
            </div>
        </div>
    </div>

</section>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ABC Services</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('services.create') }}">
                        Message us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('services.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

