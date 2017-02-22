@extends('layouts.app')



@section('content')
    <div class="content">
        <div class="container">

            @include('messenger.partials.sidebar', compact('applications'))

            <div class="col-sm-9 col-lg-10">
                <div class="center screen niceScroll" id="talk-inbox" style="top:60px;bottom:150px">
                    <div class="box">
                        <div class="col v-bottom wrapper" id="talk-conversations">
                            @if(isset($application->messages))
                                @foreach($application->messages as $message)
                                    @include('messenger.partials.message', compact('message'))
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                @include('messenger.partials.form')

            </div>

        </div>
    </div>
@endsection