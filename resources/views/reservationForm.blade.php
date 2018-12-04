@extends('layouts.app')

@section('content')
    <body>
    <div class="slider_wrapper">
    </div>
    <!--==============================Content=================================-->
    <div class="content">
        <div class="container_12">
            <div class="clear"></div>
            <div class="grid_6">
                <h3>Viešbučio pridėjimo forma</h3>
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
        </div>
    </div>
    </body>
@endsection