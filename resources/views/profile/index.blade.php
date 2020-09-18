@extends('layouts.app')

@section('content')
    <div class="profile" style="margin-top: 80px; position: relative;">
        @if ($can_see)
            <div class="container profile-main">
                <div class="row">
                    <div class="col-xs-12">
                        @if(Session::has('alert-success'))
                            <div class="alert alert-success"><i class="fa fa-check" aria-hidden="true"></i> <strong>{!! session('alert-success') !!}</strong></div>
                        @endif
                        @if(Session::has('alert-danger'))
                            <div class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i> <strong>{!! session('alert-danger') !!}</strong></div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <!--@include('profile.widgets.information')-->
                        @include('profile.widgets.zodiacs')
                    </div>
                    <div class="col-xs-12 col-md-3 pull-right">
                        <!--@include('profile.widgets.user_follow_counts')-->
                        <div class="hidden-sm hidden-xs">
                            <!--@include('widgets.suggested_people')-->
                            @include('profile.widgets.information')
                        </div>
                    </div>
                    <div class="col-md-6">
                        @include('widgets.wall')
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="alert-message alert-message-default">
                    <h4>{{ '@'.$user->username."'s" }} профиль приватный.</h4>
                    <p>Подпишитесь чтобы видеть {{ '@'.$user->username }} профиль.</p>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('footer')
    <script type="text/javascript">
        @if ($can_see)
            WALL_ACTIVE = true;
            fetchPost(1,0,{{ $user->id }},5,-1,-1,'initialize');
        @endif
    </script>
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection