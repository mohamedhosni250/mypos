@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.users') </li>
            </ol>
        </section>

        <section class="content">


            <div class="box box-solid">

                <div class="box box-primary">
                    <div class="box-header with-border ">
                        <h3 class="box-title" >@lang("site.create_user")</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    @include('partials._errors')
                    <form action="{{route('dashboard.users.store')}} " method="post">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="first_name">@lang('site.first_name')</label>
                                <input type="text" value="{{old('first_name')}}" class="form-control"
                                       id="first_name"  name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">@lang('site.last_name')</label>
                                <input type="text" value="{{old('last_name')}}" class="form-control"
                                       id="last_name" name="last_name" >
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('site.email')</label>
                                <input type="email" value="{{old('email')}}" class="form-control"
                                       id="email" name="email" >
                            </div>
                            <div class="form-group">
                                <label for="password">@lang('site.password')</label>
                                <input type="password" class="form-control"
                                       id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">@lang('site.password_confirmation')</label>
                                <input type="password" class="form-control"
                                       id="password_confirmation" >
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                        </div>
                    </form>
                </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
