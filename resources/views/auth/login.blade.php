@extends('layouts.appforlogin')

@section('content')
    <body>
    <div class="content" style="background: #ecd3b0">
        <div class="container_12">
            <div class="clear"></div>
            <div class="grid_6">
                <h3>Prisijungimo Forma</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
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
            <?php


            ?>


    </div>
    </body>
@endsection
