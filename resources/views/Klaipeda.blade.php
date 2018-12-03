@extends('layouts.app')

@section('content')
<body>
<div class="slider_wrapper">
    <div id="camera_wrap" class="">
        <div data-src="images/slide.jpg">
            <div class="caption fadeIn">
                <h2>Viešbutis NR1</h2>
                <div class="price">
                    FROM
                    <span>150$</span>
                </div>
                <a href="#">SUŽINOTI DAUGIAU(IDETI LINKA I JU SVETAINE CJ)</a>
            </div>
        </div>
        <div data-src="images/slide1.jpg">
            <div class="caption fadeIn">
                <h2>Viešbutis NR2</h2>
                <div class="price">
                    FROM
                    <span>$2000</span>
                </div>
                <a href="#">SUŽINOTI DAUGIAU(IDETI LINKA I JU SVETAINE CJ)</a>
            </div>
        </div>
        <div data-src="images/slide2.jpg">
            <div class="caption fadeIn">
                <h2>Viešbutis NR3</h2>
                <div class="price">
                    FROM
                    <span>$1600</span>
                </div>
                <a href="#">SUŽINOTI DAUGIAU(IDETI LINKA I JU SVETAINE CJ)</a>
            </div>
        </div>
    </div>
</div>
<!--==============================Content=================================-->
<div class="content">
    <div class="container_12">
        <div class="grid_4">
            <div class="banner">
                <img src="images/Siauliai.jpg" alt="">
                <div class="label">
                    <div class="title">Viešbutis NR4</div>
                    <div class="price">FROM<span>$ 1000</span></div>
                    <a href="#">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/Panevezys.jpg" alt="">
                <div class="label">
                    <div class="title">Viešbutis NR5</div>
                    <div class="price">FROM<span>$ 1.500</span></div>
                    <a href="#">SUŽINOTI DAUGIAU</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/Alytus.jpg" alt="">
                <div class="label">
                    <div class="title">Viešbutis NR6</div>
                    <div class="price">FROM<span>$ 1.600</span></div>
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

@endsection