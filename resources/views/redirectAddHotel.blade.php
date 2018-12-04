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
                <form id="bookingForm" method="post" action='addHotel'>
                    <div class="fl1">
                        <div class="tmInput">
                            <input name="Name" placeHolder="Pavadinimas:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="tmInput">
                            <input name="City" placeHolder="Miestas:" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                    </div>
                    <div class="fl1">
                        <div class="tmInput mr0">
                            <input name="Owner" placeHolder="Atstovas:" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                        <div class="tmInput mr0">
                            <input name="Pets" placeHolder="Gyvūnai: Taip/Ne" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="tmTextarea">
                        <textarea name="ExtraInfo" placeHolder="Papildoma informacija" data-constraints='@NotEmpty @Length(min=20,max=999999)'></textarea>
                    </div>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection