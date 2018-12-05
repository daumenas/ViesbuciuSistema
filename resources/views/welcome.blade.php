@extends('layouts.app')

<head>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>

@section('content')
    <body>
    @if(Auth::user()->firstTime == '0')<div class='notifications top-left'></div>@endif
<div class="slider_wrapper">
    <div id="camera_wrap" class="">
        <div data-src="images/slide.jpg">
            <div class="caption fadeIn">
                <h2>Kaunas</h2>
                <div class="price">

                    <span></span>
                </div>
                <a href="{{route('Kaunas')}}">SUŽINOTI DAUGIAU</a>
            </div>
        </div>
        <div data-src="images/slide1.jpg">
            <div class="caption fadeIn">
                <h2>Vilnius</h2>
                <div class="price">

                    <span></span>
                </div>
                <a href="{{route('Vilnius')}}">SUŽINOTI DAUGIAU</a>
            </div>
        </div>
        <div data-src="images/slide2.jpg">
            <div class="caption fadeIn">
                <h2>Klaipėda</h2>
                <div class="price">

                    <span></span>
                </div>
                <a href="{{route('Klaipeda')}}">SUŽINOTI DAUGIAU</a>
            </div>
        </div>
    </div>
</div>
@include('notification')
<!--==============================Content=================================-->
<div class="content" style="background: #ecd3b0">
    <div class="container_12">
        <div class="grid_4">
            <div class="banner">
                <img src="images/Siauliai.jpg" alt="" width="275" height="275">
                <div class="label">
                    <div class="title">Šiauliai</div>
                    <div class="price"><span></span></div>
                    <a href="{{route('Siauliai')}}">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/Panevezys.jpg" alt="" width="275" height="275">
                <div class="label">
                    <div class="title">Panevėžys</div>
                    <div class="price"><span></span></div>
                    <a href="{{route('Panevezys')}}">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/Alytus2.jpg" alt="" width="275" height="275">
                <div class="label">
                    <div class="title">Alytus</div>
                    <div class="price"><span></span></div>
                    <a href="{{route('Alytus')}}">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="grid_6">
            <h3>Rezervacijos Forma</h3>
            <form id="bookingForm" method="post" action='reservation'>
                <div class="fl1">
                    <div class="tmInput">
                        <input name="Name" placeHolder="Vardas:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="tmInput">
                        <input name="Country" placeHolder="Miestas:" type="text" data-constraints="@NotEmpty @Required">
                    </div>
                </div>
                <div class="fl1">
                    <div class="tmInput">
                        <input name="Email" placeHolder="Elektroninis paštas:" type="text" data-constraints="@NotEmpty @Required @Email">
                    </div>
                    <div class="tmInput mr0">
                        <input name="Hotel" placeHolder="Viešbutis:" type="text" data-constraints="@NotEmpty @Required">
                    </div>
                </div>
                <div class="clear"></div>
                <strong>Check-in</strong>
                <label class="tmDatepicker">
                    <input type="text" name="Checkin" placeHolder='10/05/2018' data-constraints="@NotEmpty @Required @Date">
                </label>
                <div class="clear"></div>
                <strong>Check-out</strong>
                <label class="tmDatepicker">
                    <input type="text" name="Checkout" placeHolder='20/05/2018' data-constraints="@NotEmpty @Required @Date">
                </label>
                <div class="clear"></div>
                <div class="tmRadio">
                    <p>Komfortas</p>
                    <input name="Comfort" type="radio" id="tmRadio0" value="Pigus" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
                    <span>Pigus</span>
                    <input name="Comfort" type="radio" id="tmRadio1" value="Standartinis" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                    <span>Standartinis</span>
                    <input name="Comfort" type="radio" id="tmRadio2" value="Prabangus" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                    <span>Prabangus</span>
                </div>
                <div class="clear"></div>
                <div class="fl1 fl2">
                    <em>Suaugę</em>
                    <select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
                        <option>1</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <div class="clear"></div>
                    <em>Kambarių skaičius</em>
                    <select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
                        <option>1</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="fl1 fl2">
                    <em>Vaikai</em>
                    <select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
                        <option>0</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                    </select>
                </div>
                <div class="clear"></div>
                <div class="tmTextarea">
                    <textarea name="Message" placeHolder="Papildoma informacija" data-constraints='@NotEmpty @Length(min=20,max=999999)'></textarea>
                </div>
                <div class="tminput">
                    <input name="discount" placeHolder="Nuolaidos kodas" data-constraints=''></input>
                </div>
                <input type="submit">
            </form>
        </div>
        <div class="grid_5 prefix_1">
            <h3>Welcome</h3>
            <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                <p>Geriausi atostogų pasiūlymai</p>
                 TIK pas mus!!!
            </div>
            <div class="clear cl1"></div>
            <h4>Klientų atsiliepimai</h4>
            <blockquote class="bq1">
                <img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
                <div class="extra_wrapper">
                    <p>Ši svetainė padėjo man suorganizuoti nuostabę kelionę su šeima </p>
                    <div class="alright">
                        <div class="col1">Justė Surgautaitė</div>

                    </div>
                </div>
            </blockquote>
        </div>
        <?php
        $result = DB::table('event')->orderBy('id', 'desc')->take(5)->get();
        ?>
        <div class="grid_12">
            <h3 class="head1">Artėjantys renginiai</h3>
        </div>
        @if(count($result) > 0)
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2018-12-01">{{$result[0]->date}}</time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">{{$result[0]->name}}</a></div>
                        {{$result[0]->info}}
                    </div>
                </div>
            </div>
        @endif
        @if(count($result) > 1)
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2018-01-01">{{$result[1]->date}}</time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">{{$result[1]->name}}</a></div>
                        {{$result[1]->info}}
                    </div>
                </div>

            </div>
        @endif
        @if(count($result) > 2)
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2018-02-01">{{$result[2]->date}}</time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">{{$result[2]->name}}</a></div>
                        {{$result[2]->info}}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
    </body>
    <script>
        $('.top-left').delay(900000000000000000000).notify({
            message: { text: 'DISCOUNT CODE: 11111' }

        }).show();
    </script>
@endsection