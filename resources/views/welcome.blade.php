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
                    FROM
                    <span>150$</span>
                </div>
                <a href="{{route('Kaunas')}}">SUŽINOTI DAUGIAU</a>
            </div>
        </div>
        <div data-src="images/slide1.jpg">
            <div class="caption fadeIn">
                <h2>Vilnius</h2>
                <div class="price">
                    FROM
                    <span>$2000</span>
                </div>
                <a href="{{route('Vilnius')}}">SUŽINOTI DAUGIAU</a>
            </div>
        </div>
        <div data-src="images/slide2.jpg">
            <div class="caption fadeIn">
                <h2>Klaipėda</h2>
                <div class="price">
                    FROM
                    <span>$1600</span>
                </div>
                <a href="{{route('Klaipeda')}}">SUŽINOTI DAUGIAU</a>
            </div>
        </div>
    </div>
</div>
@include('notification')
<!--==============================Content=================================-->
<div class="content">
    <div class="container_12">
        <div class="grid_4">
            <div class="banner">
                <img src="images/Siauliai.jpg" alt="">
                <div class="label">
                    <div class="title">Šiauliai</div>
                    <div class="price">FROM<span>$ 1000</span></div>
                    <a href="{{route('Siauliai')}}">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/Panevezys.jpg" alt="">
                <div class="label">
                    <div class="title">Panevėžys</div>
                    <div class="price">FROM<span>$ 1.500</span></div>
                    <a href="{{route('Panevezys')}}">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/Alytus.jpg" alt="">
                <div class="label">
                    <div class="title">Alytus</div>
                    <div class="price">FROM<span>$ 1.600</span></div>
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
                <input type="submit">
            </form>
        </div>
        <div class="grid_5 prefix_1">
            <h3>Welcome</h3>
            <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
                <p>Nezinau kas cia bus.</p>
                In Bet kazkas bus
            </div>
            <div class="clear cl1"></div>
            <h4>Klientų atsiliepimai</h4>
            <blockquote class="bq1">
                <img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
                <div class="extra_wrapper">
                    <p>Ši svetainė padėjo man suorganizuoti nuostabę kelionę su šeima </p>
                    <div class="alright">
                        <div class="col1">Vardenis Pavardenis</div>
                        <a href="#" class="btn">Daugiau atsiliepimų</a>
                    </div>
                </div>
            </blockquote>
        </div>
        <div class="grid_12">
            <h3 class="head1">Artėjantys renginiai</h3>
        </div>
        <div class="grid_4">
            <div class="block1">
                <time datetime="2018-12-01">12<span>Gruod</span></time>
                <div class="extra_wrapper">
                    <div class="text1 col1"><a href="#">Aliquam nibh</a></div>
                    Proin pharetra luctus diam, any scelerisque eros convallisumsan. Maecenas vehicula egestas
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="block1">
                <time datetime="2018-01-01">1<span>Sau</span></time>
                <div class="extra_wrapper">
                    <div class="text1 col1"><a href="#">Etiam dui eros</a></div>
                    Any scelerisque eros vallisumsan. Maecenas vehicula egestas natis. Duis massa elit, auctor non
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="block1">
                <time datetime="2018-02-01">02<span>Vas</span></time>
                <div class="extra_wrapper">
                    <div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
                    Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
    <script>
        $('.top-left').delay(900000000000000000000).notify({
            message: { text: 'DISCOUNT CODE: 11111' }

        }).show();
    </script>
@endsection