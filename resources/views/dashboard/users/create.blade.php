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
                        <h3 class="box-title">@lang("site.create_user")</h3>
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
                                       id="first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">@lang('site.last_name')</label>
                                <input type="text" value="{{old('last_name')}}" class="form-control"
                                       id="last_name" name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('site.email')</label>
                                <input type="email" value="{{old('email')}}" class="form-control"
                                       id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">@lang('site.password')</label>
                                <input type="password" class="form-control"
                                       id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">@lang('site.password_confirmation')</label>
                                <input type="password" class="form-control"
                                       id="password_confirmation" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <label> @lang('site.permissions')</label>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#users" data-toggle="tab">@lang('site.users')</a>
                                        </li>
                                        <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
                                        <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>

                                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="users " style="margin: 10px">

                                            <label>
                                                <input  name="permissions[]" value="create_user" type="checkbox" style="margin: 10px ">  @lang('site.add')
                                            </label>
                                            <label>
                                                <input name="permissions[]"  value="read_user" type="checkbox" style="margin: 10px"style="margin: 10px"> @lang('site.read')
                                            </label>
                                            <label>
                                                <input name="permissions[]" value="update_user" type="checkbox"  style="margin: 10px"> @lang('site.update')
                                            </label>
                                            <label>
                                                <input name="permissions[]" value="delete_user" type="checkbox" style="margin: 10px"> @lang('site.delete')
                                            </label>

                                        </div>
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                        </div>
                    </form>
                </div>
            </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
