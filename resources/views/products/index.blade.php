@extends('layouts.app')

@section('content')


<div classs="container p-5">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>Click the images to buy the items</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
</div>


    <section class="content-header">
        <div class="row m-2">
            {{-- modal --}}
            <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#exampleModalCenter">
                <div class="container col-sm m-1 p-2 card-custome card">
                    <img class="img-fluid" src="{{asset('res/img1.png')}}" alt="">
                    <div class="container card-text">
                        <strong>Brand</strong>: ASUS
                    </div>
                    <div class="container">
                        <strong>Description</strong>: 16GB ram 500GB ssd
                    </div>
                    <div class="container">
                        <strong>Price</strong>: $240.12
                    </div>
                    <div class="container">
                        <strong>Datemanufactured</strong>: 09-20-21
                    </div>
                </div>
            </button>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Brand</strong>: ASUS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="container col-sm m-1 p-2">
                            <div class="cotainer d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="{{asset('res/img1.png')}}" alt="">
                            </div>
                            <div class="container card-text">
                                <strong>Brand</strong>: ASUS
                            </div>
                            <div class="container">
                                <strong>Description</strong>: 16GB ram 500GB ssd
                            </div>
                            <div class="container">
                                <strong>Price</strong>: $240.12
                            </div>
                            <div class="container">
                                <strong>Datemanufactured</strong>: 09-20-21
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class="btn btn-primary" href="{{url('/products/demo')}}">Add to</a>
                    </div>
                </div>
                </div>
            </div>


            {{-- 2nd --}}

            <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product2">
                <div class="container col-sm m-1 p-2 card-custome card">
                    <img class="img-fluid" src="{{asset('res/img2.png')}}" alt="">
                    <div class="container card-text">
                        <strong>Brand</strong>: DELL
                    </div>
                    <div class="container">
                        <strong>Description</strong>: 16GB ram 500GB ssd
                    </div>
                    <div class="container">
                        <strong>Price</strong>: $240.12
                    </div>
                    <div class="container">
                        <strong>Datemanufactured</strong>: 09-20-21
                    </div>
                </div>
            </button>

            <div class="modal fade" id="product2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Brand</strong>: DELL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="cotainer d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('res/img2.png')}}" alt="">
                        </div>
                        <div class="container">
                            <strong>Brand</strong>: DELL
                        </div>
                        <div class="container">
                            <strong>Description</strong>: 16GB ram 500GB ssd
                        </div>
                        <div class="container">
                            <strong>Price</strong>: $240.12
                        </div>
                        <div class="container">
                            <strong>Datemanufactured</strong>: 09-20-21
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="{{url('/products/demo')}}">Add to</a>
                    </div>
                </div>
                </div>
            </div>


            <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product3">
                <div class="container col-sm m-1 p-2 card-custome card">
                    <img class="img-fluid" src="{{asset('res/img3.png')}}" alt="">
                    <div class="container card-text">
                        <strong>Brand</strong>: ACER
                    </div>
                    <div class="container">
                        <strong>Description</strong>: 16GB ram 500GB ssd
                    </div>
                    <div class="container">
                        <strong>Price</strong>: $240.12
                    </div>
                    <div class="container">
                        <strong>Datemanufactured</strong>: 09-20-21
                    </div>
                </div>
            </button>

            <div class="modal fade" id="product3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Brand</strong>: ACER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="cotainer d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('res/img3.png')}}" alt="">
                        </div>
                        <div class="container">
                            <strong>Brand</strong>: ACER
                        </div>
                        <div class="container">
                            <strong>Description</strong>: 16GB ram 500GB ssd
                        </div>
                        <div class="container">
                            <strong>Price</strong>: $240.12
                        </div>
                        <div class="container">
                            <strong>Datemanufactured</strong>: 09-20-21
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="{{url('/products/demo')}}">Add to</a>
                    </div>
                </div>
                </div>
            </div>


        </div>

        {{-- modal --}}
        <div class="row m-2">
            <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product4">
                <div class="container col-sm m-1 p-2 card-custome card">
                    <img class="img-fluid" src="{{asset('res/img4.png')}}" alt="">
                    <div class="container">
                        <strong>Brand</strong>: ASUS
                    </div>
                    <div class="container">
                        <strong>Description</strong>: 16GB ram 256gb ssd
                    </div>
                    <div class="container">
                        <strong>Price</strong>: $150.00
                    </div>
                    <div class="container">
                        <strong>Datemanufactured</strong>: 04-14-21
                    </div>
                </div>
            </button>

            <div class="modal fade" id="product4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Brand</strong>: ASUS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="cotainer d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('res/img4.png')}}" alt="">
                        </div>
                        <div class="container">
                            <strong>Brand</strong>: ASUS
                        </div>
                        <div class="container">
                            <strong>Description</strong>: 32GB ram 256gb ssd
                        </div>
                        <div class="container">
                            <strong>Price</strong>: $400.00
                        </div>
                        <div class="container">
                            <strong>Datemanufactured</strong>: 04-13-21
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="{{url('/products/demo')}}">Add to</a>
                    </div>
                </div>
                </div>
            </div>

            {{-- 4 --}}


            <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product5">
                <div class="container col-sm m-1 p-2 card-custome card">
                    <img class="img-fluid" src="{{asset('res/img5.png')}}" alt="">
                    <div class="container">
                        <strong>Brand</strong>: DELL
                    </div>
                    <div class="container">
                        <strong>Description</strong>: 8GB ram 256gb ssd
                    </div>
                    <div class="container">
                        <strong>Price</strong>: $120.00
                    </div>
                    <div class="container">
                        <strong>Datemanufactured</strong>: 10-04-05
                    </div>
                </div>
            </button>

            <div class="modal fade" id="product5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Brand</strong>: ASUS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="cotainer d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('res/img5.png')}}" alt="">
                        </div>
                        <div class="container">
                            <strong>Brand</strong>: DELL
                        </div>
                        <div class="container">
                            <strong>Description</strong>: 8GB ram 256gb ssd
                        </div>
                        <div class="container">
                            <strong>Price</strong>: $120.00
                        </div>
                        <div class="container">
                            <strong>Datemanufactured</strong>: 10-04-05
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="{{url('/products/demo')}}">Add to</a>
                    </div>
                </div>
                </div>
            </div>
            {{-- 5 --}}


            <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product6">
                <div class="container col-sm m-1 p-2 card-custome card">
                    <img class="img-fluid" src="{{asset('res/img6.png')}}" alt="">
                    <div class="container">
                        <strong>Brand</strong>: LENOVO
                    </div>
                    <div class="container">
                        <strong>Description</strong>: 16GB ram 256gb ssd
                    </div>
                    <div class="container">
                        <strong>Price</strong>: $210.00
                    </div>
                    <div class="container">
                        <strong>Datemanufactured</strong>: 02-06-01
                    </div>
                </div>
            </button>

            <div class="modal fade" id="product6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Brand</strong>: ASUS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="cotainer d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('res/img6.png')}}" alt="">
                        </div>
                        <div class="container">
                            <strong>Brand</strong>: LENOVO
                        </div>
                        <div class="container">
                            <strong>Description</strong>: 16GB ram 256gb ssd
                        </div>
                        <div class="container">
                            <strong>Price</strong>: $210.00
                        </div>
                        <div class="container">
                            <strong>Datemanufactured</strong>: 02-06-01
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="{{url('/products/demo')}}">Add to</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </section>

@endsection

