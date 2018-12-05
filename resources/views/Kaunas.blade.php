@extends('layouts.app')

@section('content')
    <body>
    <div class="slider_wrapper">
        <div id="camera_wrap" class="">
            <div data-src="images/sandija.jpg">
                <div class="caption fadeIn">
                    <h2>Sandija</h2>
                    <div class="price">

                        <span></span>
                    </div>
                    <a href="#">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
            <div data-src="images/europe.jpg">
                <div class="caption fadeIn">
                    <h2>Europa Royale</h2>
                    <div class="price">

                        <span></span>
                    </div>
                    <a href="#">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
            <div data-src="images/perkuno.jpg">
                <div class="caption fadeIn">
                    <h2>Perkūno namai</h2>
                    <div class="price">

                        <span></span>
                    </div>
                    <a href="#">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
    </div>
    <!--==============================Content=================================-->
    <div class="content" style="background: #ecd3b0">
        <div class="container_12">
            <div class="grid_4">
                <div class="banner">
                    <img src="images/magnus.jpg" alt="" width="300" height="300">
                    <div class="label">
                        <div class="title">Magnus</div>
                        <div class="price"></div>
                        <a href="#">SUŽINOTI DAUGIAU</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="images/algirdo.jpg" alt="" width="300" height="300">
                    <div class="label">
                        <div class="title">Algiro</div>
                        <div class="price"></div>
                        <a href="#">SUŽINOTI DAUGIAU</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="images/babilonas.jpg" alt="" width="300" height="300">
                    <div class="label">
                        <div class="title">Hotel Babilonas</div>
                        <div class="price"></div>
                        <a href="#">SUŽINOTI DAUGIAU</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="grid_6">
                <h3>Rezervacijos Forma</h3>
                <form id="bookingForm">
                    <div class="fl1">
                        <div class="tmInput">
                            <input name="Name" placeHolder="Vardas:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                        </div>
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
                        <input type="text" name="Check-in" placeHolder='10/05/2018' data-constraints="@NotEmpty @Required @Date">
                    </label>
                    <div class="clear"></div>
                    <strong>Check-out</strong>
                    <label class="tmDatepicker">
                        <input type="text" name="Check-out" placeHolder='20/05/2018' data-constraints="@NotEmpty @Required @Date">
                    </label>
                    <div class="clear"></div>
                    <div class="tmRadio">
                        <p>Comfortas</p>
                        <input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
                        <span>Pigus</span>
                        <input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                        <span>Standartinis</span>
                        <input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
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
                        <textarea name="Message" placeHolder="Papildoma informacija" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
                    </div>
                    <a href="#" class="btn" data-type="submit">Patvirtinti</a>
                </form>
            </div>
            <div class="grid_5 prefix_1">
                <h3>Lankytinos vietos</h3>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="460" height="423" id="gmap_canvas" src="https://maps.google.com/maps?q=Kaunas&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net">wordpress themes</a></div><style>.mapouter{text-align:right;height:423px;width:460px;}.gmap_canvas {overflow:hidden;background:none!important;height:423px;width:460px;}</style></div>
                <div class="clear cl1"></div>
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

@endsection