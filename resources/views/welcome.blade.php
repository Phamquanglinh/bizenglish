@extends('layout.app')
@section('slider')
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        {{--        <ol class="carousel-indicators">--}}
        {{--            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
        {{--            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
        {{--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
        {{--        </ol>--}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                     src="{{asset('uploads/banner-1.jpg')}}"
                     alt="First slide">
            </div>
            {{--            <div class="carousel-item">--}}
            {{--                <img class="d-block w-100"--}}
            {{--                     src="{{asset('uploads/banner-2.jpg')}}"--}}
            {{--                     alt="Second slide">--}}
            {{--            </div>--}}
            {{--            <div class="carousel-item">--}}
            {{--                <img class="d-block w-100"--}}
            {{--                     src="{{asset('uploads/banner-3.jpg')}}"--}}
            {{--                     alt="Third slide">--}}
            {{--            </div>--}}
        </div>
        {{--        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
        {{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--            <span class="sr-only">Previous</span>--}}
        {{--        </a>--}}
        {{--        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
        {{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--            <span class="sr-only">Next</span>--}}
        {{--        </a>--}}
    </div>
@endsection
@section('content')
    <link href="{{asset('asset/css/index.css')}}" rel="stylesheet">
    <style>
        .contact {
            background-image: url("{{asset('uploads/contact-background.png')}}");
            background-attachment: fixed;
            background-size: contain;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 h2 text-center"><span class="text-origin text-uppercase">Biz </span>English</div>
            <div class="col-12 p-2 h4 text-center">Chuy??n ????o t???o ti???ng Anh tr???c tuy???n cho ng?????i ??i l??m</div>
            <div class="col-md-4 col-12 text-center">
                <div class="p-3">
                    <img src="{{asset('uploads/intro-1.jpg')}}" class="pb-2 w-100">
                    <p><b>H???C ONLINE T???I NH??</b></p>
                    <p>B???n kh??ng c???n m???t th???i gian cho vi???c ??i l???i hay t???c ???????ng ????? c?? th??? t???i trung t??m h???c. B???n c?? th???
                        ng???i
                        t???i nh?? ????? h???c v?? gi???i ti???ng Anh ch??? v???i chi???c ??i???n tho???i, m??y t??nh ho???c ipad k???t n???i
                        internet.</p>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center">
                <div class="p-3">
                    <img src="{{asset('uploads/intro-2.jpg')}}" class="pb-2 w-100">
                    <p><b>L??? TR??NH C?? NH??N H??A</b></p>
                    <p>H???c 1 k??m 1 n??n gi??o vi??n c?? th??? hi???u r?? tr??nh ????? b???n v?? d???y b???n theo l??? tr??nh ???????c c?? nh??n h??a
                        ph?? h???p nh???t v???i b???n ??? ?????m b???o hi???u qu??? g???p nhi???u l???n so v???i ??i h???c t???i trung t??m.</p>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center">
                <div class="p-3">
                    <img src="{{asset('uploads/intro-3.jpg')}}" class="pb-2 w-100">
                    <p><b>CHI PH?? TH???P</b></p>
                    <p>H???c 1 k??m 1 nh??ng chi ph?? cho m???i bu???i h???c th???p h??n so v???i h???c l???p 10 ??? 12 ng?????i t???i trung t??m.
                        ?????m b???o b???n c?? th??? h???c ti???ng Anh l??u d??i m?? kh??ng c??n lo l???ng v??? v???n ????? t??i ch??nh.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 p-2 py-5 h2 text-center">B???N C?? TH??? H???C G?? V???I BIZ ENGLISH?</div>
                <div class="col-md-3 col-sm-6 col-12 tran-shadow d-flex flex-column justify-content-between">
                    <a href="{{route('tag',['slug'=>'hoc-giao-tiep-online-1-1.html'])}}"
                       class="link-style-none text-white">
                        <div class="p-3">
                            <div>
                                <img src="{{asset('uploads/learning-1.png')}}" class="pb-2 w-100">
                            </div>
                            <div class=" text-origin"><b>H???C GIAO TI???P
                                    ONLINE 1-1</b></div>
                            <p>H???c giao ti???p Online 1 - 1 v???i gi??o vi??n Vi???t Nam ??? gv Philippine ??? gv B???n Ng???.</p>
                        </div>
                    </a>
                    <a href="{{route('tag',['slug'=>'hoc-giao-tiep-online-1-1.html'])}}" class="btn btn-origin show">Xem
                        chi ti???t</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12 tran-shadow d-flex flex-column justify-content-between">
                    <a href="{{route('tag',['slug'=>'hoc-viet-online-1-1.html'])}}"
                       class="link-style-none text-white">
                        <div class="p-3">
                            <div>
                                <img src="{{asset('uploads/learning-2.png')}}" class="pb-2 w-100">
                            </div>
                            <div class=" text-origin"><b>
                                    H???C VI???T ONLINE 1 - 1
                                </b></div>
                            <p>H???c vi???t ti???ng Anh t??? c?? b???n t???i n??ng cao, c??c d???ng Email v?? b??o c??o trong c??ng vi???c.</p>
                        </div>
                    </a>
                    <a href="{{route('tag',['slug'=>'hoc-viet-online-1-1.html'])}}" class="btn btn-origin show">Xem chi
                        ti???t</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12 tran-shadow  d-flex flex-column justify-content-between">
                    <a href="{{route('tag',['slug'=>'khoa-hoc-theo-yeu-cau.html'])}}"
                       class="link-style-none text-white">
                        <div class="p-3">
                            <div>
                                <img src="{{asset('uploads/learning-3.png')}}" class="pb-2 w-100">
                            </div>
                            <div class=" text-origin"><b>KH??A H???C THEO Y??U C???U</b></div>
                            <p>H???c ng??? ph??p, ph??t ??m, luy???n thi IELTS, TOEIC v?? ti???ng Anh chuy??n ng??nh theo y??u c???u.</p>
                        </div>
                    </a>
                    <a href="{{route('tag',['slug'=>'khoa-hoc-theo-yeu-cau.html'])}}" class="btn btn-origin show">Xem
                        chi ti???t</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12 tran-shadow  d-flex flex-column justify-content-between">
                    <a href="{{route('tag',['slug'=>'cac-khoa-hoc-video.html'])}}"
                       class="link-style-none text-white">
                        <div class="p-3">
                            <div>
                                <img src="{{asset('uploads/learning-4.png')}}" class="pb-2 w-100">
                            </div>
                            <div class=" text-origin"><b>C??C KH??A H???C VIDEO</b></div>
                            <p>H???c giao ti???p ??? ng??? ph??p ??? vi???t ??? luy???n thi IELTS v?? TOEIC qua c??c video.</p>
                        </div>
                    </a>
                    <a href="{{route('tag',['slug'=>'cac-khoa-hoc-video.html'])}}" class="btn btn-origin show">Xem chi
                        ti???t</a>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 pt-5 text-uppercase h2 text-center">GI??O VI??N C???A CH??NG T??I</div>
                <div class="col-md-4 col-12 text-center d-flex justify-content-between flex-column mb-5 ">
                    <div class="p-3 ">


                        <img src="{{asset('uploads/teacher-vn.png')}}" class="pb-2 w-100">
                        <p class="mt-1 text-uppercase text-origin"><b>Gi??o vi??n Vi???t Nam</b></p>
                        <p>Gi??o vi??n Vi???t Nam v???i ch???ng ch??? IELTS 6.5 ??? 8.0 ho???c du h???c sinh t???i M??? - Ch??u ??u.</p>

                    </div>
                </div>
                <div class="col-md-4 col-12 text-center d-flex justify-content-between flex-column mb-5 ">
                    <div class="p-3">

                        <img src="{{asset('uploads/teacher-pl.png')}}" class="pb-2 w-100">
                        <p class="mt-1 text-uppercase text-origin"><b>Gi??o vi??n Philippines</b></p>
                        <p>Gi??o vi??n Philippines n???i ti???ng l?? nh???ng ng?????i chuy??n d???y ti???ng Anh cho h???c vi??n tr??n
                            to??n th??? gi???i.</p>

                    </div>
                </div>
                <div class="col-md-4 col-12 text-center d-flex justify-content-between flex-column mb-5 ">
                    <div class="p-3 ">

                        <img src="{{asset('uploads/teacher-bn.png')}}" class="pb-2 w-100">
                        <p class="mt-1 text-uppercase text-origin"><b>Gi??o vi??n B???n Ng???</b></p>
                        <p>Gi??o vi??n M??? - Ch??u ??u ??? ??c ??? Nam Phi l?? nh???ng n?????c ti???ng Anh l?? ng??n ng??? ch??nh.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-5 text-uppercase h2 text-center">T??m ki???m gi??o vi??n</div>
                <div class="col-12 pt-5 text-uppercase text-center">B???n c?? th??? t??m ki???m gi??o vi??n ph?? h???p nh???t v???i b???n
                    v??? kh??a h???c, m???c chi ph?? v?? th???i gian h???c.
                </div>
                <div class="p-5 d-flex w-100 align-items-center justify-content-center">
                    <button class="btn btn-origin "><a class="link-style-none text-white"
                                                       href="{{route('filter')}}"><i
                                class="fas fa-search"></i> T??m ki???m ngay</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="p-5 h2 text-center">H???C VI??N C???A CH??NG T??I N??I G?? ?</div>
        @php
            $comments = \App\Models\Comment::where('teacher_id','=','999999')->orderBy('updated_at','DESC')->get();
        @endphp
        @if(isset($comments))
            <div style="overflow-y: scroll;max-height: 500px">
                @foreach($comments as $comment)
                    @if(isset($comment->users()->first()->name))
                        <div class="media row m-0 px-3 bg-light mt-2 ">
                            <div class="col-sm-2 col-12" style="height: 80px; overflow: hidden;align-self: center">
                                <img
                                    style="width: 120px;"
                                    src="{{$comment->users()->first()->avatar}}"
                                    alt="Generic placeholder image ">
                            </div>
                            <div class="media-body col-sm-10 col-12 ">
                                <div class="mt-0 h5">{{$comment->users()->first()->name}}</div>
                                <div class="font-italic h6">{{$comment->content}}</div>
                                @for($i=1;$i<=$comment->rate;$i++)
                                    <i class="fas fa-star text-warning mr-1"></i>
                                @endfor
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
        @if(backpack_auth()->check())
            <div class="bg-origin p-1 rounded mt-2">
                <div class="p-5">
                    <div class="h3 text-white mb-2">????nh gi?? c???a b???n</div>
                    <form class="rating bg-light rounded p-5" action="{{route('save.comment',['id'=>'999999'])}}"
                          method="post">
                        @csrf
                        <input type="hidden" value="999999" name="teacher_id">
                        <input type="hidden" value="{{backpack_user()->id}}" name="user_id">
                        <input type="radio" id="star5" name="rate" value="5"/>
                        <label for="star5" title="text">5 <i class="fas fa-star text-warning mr-2"></i></label>
                        <input type="radio" id="star4" name="rate" value="4"/>
                        <label for="star4" title="text">4 <i class="fas fa-star text-warning mr-2"></i></label>
                        <input type="radio" id="star3" name="rate" value="3"/>
                        <label for="star3" title="text">3 <i class="fas fa-star text-warning mr-2"></i></label>
                        <input type="radio" id="star2" name="rate" value="2"/>
                        <label for="star2" title="text">2 <i class="fas fa-star text-warning mr-2"></i></label>
                        <input type="radio" id="star1" name="rate" value="1"/>
                        <label for="star1" title="text">1 <i class="fas fa-star text-warning mr-2"></i></label>
                        <div class="mt-2">
                            <textarea class="form-control" name="contents" placeholder="????nh gi?? c???a b???n"
                                      required></textarea>
                        </div>
                        <div class="text-right pt-2">
                            <button class="btn btn-origin pointed" type="submit">G???i</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="text-center text-origin">*B???n c???n ????ng nh???p ????? ????nh gi??</div>
        @endif
    </div>
    <div class="container-fluid bg-dark text-white p-5 mb-5">
        <div class="container py-5">
            <div class="row m-0">
                <div class="col-md-4 text-center">
                    <div class="h3">S??? gi???ng vi??n</div>
                    <div class="h1">{{\App\Models\User::where('role','=',1)->count()}}+</div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="h3">S??? h???c vi??n</div>
                    <div class="h1">1250+</div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="h3">Kh??a h???c</div>
                    <div class="h1">{{\App\Models\Course::count()}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row m-0 align-items-center contact">
            <div class="col-md-6 col-12 p-5">
                <div class="bg-secondary opacity h2 text-white p-5 text-center">H??Y CHIA S??? NHU C???U H???C T???P C???A B???N
                </div>
            </div>
            <div class="col-md-6 col-12 p-5 bg-light" id="study-register">
                <form action="{{route('save.customer')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="text-origin font-weight-bold" for="exampleInputEmail1">H??? v?? t??n</label>
                        <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="form-group">
                        <label class="text-origin font-weight-bold" for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                               aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">Ch??ng t??i kh??ng bao gi??? chia s??? email c???a
                            b???n</small>
                    </div>
                    <div class="form-group">
                        <label class="text-origin font-weight-bold" for="exampleInputPassword1">S??? ??i???n tho???i</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label class="text-origin font-weight-bold" for="exampleCheck1">Nhu c???u h???c t???p c???a b???n</label>
                        <textarea maxlength="255" name="message" class="form-control" id="exampleCheck1"
                                  required></textarea>
                    </div>
                    <button type="submit" class="btn btn-origin show">G???i ??i</button>
                </form>
            </div>
        </div>
    </div>
@endsection

