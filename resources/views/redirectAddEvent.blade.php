@extends('layouts.app')

@section('content')
    <body>
    <div class="slider_wrapper">
    </div>
    <!--==============================Content=================================-->
    <div class="content" style="background: #ecd3b0">
        <div class="container_12">
            <div class="clear"></div>
            <div class="grid_6">
                <h3>Renginio pridėjimo forma</h3>
                <form id="bookingForm" method="post" action='addEvent'>
                    <div class="fl1">
                        <div class="tmInput">
                            <input name="Name" placeHolder="Pavadinimas:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="tmInput">
                            <input name="Date" placeHolder="Data:" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                    </div>
                    <div class="fl1">
                        <div class="tmInput mr0">
                            <input name="City" placeHolder="Miestas" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="tmTextarea">
                        <textarea name="Info" placeHolder="Papildoma informacija" data-constraints='@NotEmpty @Length(min=20,max=999999)'></textarea>
                    </div>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection