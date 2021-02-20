@extends('pos.pos')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">

            <div class="col-lg-12">

                <h4 style="text-align:center">{{ __('site.Add categories') }}</h4>

                <div class="form-panel">

                    <div class=" form">
                        <form class="cmxform form-horizontal style-form" method="post" action="{{route('categories.store')}}">
                            @csrf
                        @include('_error')

                            @foreach(config('translatable.locales') as $local)

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">{{__('site.' .$local .'.name')}}</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" name="{{$local}}[name]" minlength="2" type="text"/>
                                </div>
                            </div>

                            @endforeach


                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit">{{__('site.Save')}}</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
                <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>

        @endsection
