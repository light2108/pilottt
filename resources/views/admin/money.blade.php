@extends('admin.layouts.create_edit')
@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">

                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-uppercase">Quy định</div>
                        <div class="card-body">
                            <form action="{{url('/admin/money')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <label>Đặc biệt nhân số tiền cược</label>
                                <input type="number" value="{{$money['dac_biet']}}" name="dac_biet" class="form-control" min="0" required>
                                <hr>
                                <label>Lô tô nhân số tiền cược</label>
                                <input type="number" value="{{$money['lo_to']}}" name="lo_to" class="form-control" min="0" required>
                                <hr>
                                <div class="row">
                                    <div class="col-5">
                                        <label>Quy định tiền</label>
                                        <input type="number" value="{{$money['money']}}" name="money" class="form-control" min="0" required>
                                    </div>
                                    <div class="col-2" style="position: relative;left:5vw;top:5vh;">
                                        <i class="fa fa-2x fa-arrow-right"></i>
                                    </div>
                                    <div class="col-5">
                                        <label>Quy định xu</label>
                                        <input type="number" value="{{$money['coin']}}" name="coin" class="form-control" min="0" required>
                                    </div>
                                </div>

                                <hr>
                                <button type="reset" class="btn btn-behance">Làm Mới</button>
                                <button type="submit" class="btn btn-dribbble">Cập nhật</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->


            <!--End Row-->


            <!--End Row-->





            <!--End Row-->



            <!--End Row-->


            <!--End Row-->
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->

    </div>
@endsection
