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
                <h3>Renginio pakeitimo forma</h3>
                <form id="bookingForm" method="post" action='editEvent'>
                    @foreach(session()->get('event')  as $event)

                            <div class="fl1">
                                <div class="tmInput">
                                    <input name="id" value="{{$event->id}}"  type="hidden" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                                    <input name="Name" value="{{$event->name}}" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="tmInput">
                                    <input name="Date" value="{{$event->date}}" type="text" data-constraints="@NotEmpty @Required">
                                </div>
                            </div>
                            <div class="fl1">
                                <div class="tmInput mr0">
                                    <input name="City" value="{{$event->city}}" type="text" data-constraints="@NotEmpty @Required">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="tmTextarea">
                                <input name="Info" value="{{$event->info}}" data-constraints='@NotEmpty @Length(min=20,max=999999)'></input>
                            </div>
                            <input type="submit">
                        @endforeach
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection