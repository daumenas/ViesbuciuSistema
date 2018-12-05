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
                <h3>Viešbučio pakeitimo forma</h3>
                <form id="bookingForm" method="post" action='editHotel'>
                    @foreach(session()->get('hotel')  as $hotel)

                    <div class="fl1">
                        <div class="tmInput">
                            <input name="id" value="{{$hotel->id}}"  type="hidden" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                            <input name="Name" value="{{$hotel->name}}" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="tmInput">
                            <input name="City" value="{{$hotel->city}}" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                    </div>
                    <div class="fl1">
                        <div class="tmInput mr0">
                            <input name="Owner" value="{{$hotel->owner}}" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                        <div class="tmInput mr0">
                            <input name="Pets" value="{{$hotel->pets}}" type="text" data-constraints="@NotEmpty @Required">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="tmTextarea">
                        <input name="ExtraInfo" value="{{$hotel->extraInfo}}" data-constraints='@NotEmpty @Length(min=20,max=999999)'></input>
                    </div>
                    @endforeach
                    <input type="submit">
                </form>
        </div>
    </div>
    </div>
    </body>
@endsection