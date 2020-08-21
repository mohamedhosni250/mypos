@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.users')</li>
            </ol>
        </section>

        <section class="content">


            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('site.users')</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    @if($users->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.first_name')</th>
                                <th>@lang('site.last_name')</th>
                                <th>@lang('site.email')</th>
                                <th>@lang('site.action')</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($users as $index=>$user )
                                <tr>
                                    <th style="width: 10px">{{$index + 1 }}</th>
                                    <th>{{$user->first_name}}</th>
                                    <th>{{$user->last_name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th><a class="btn btn-info" href="{{route('dashboard.users.edit' , $user->id)}}">@lang('site.edit')</a>
                                        <form action="{{route('dashboard.users.destroy' , $user->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">@lang('site.delete')</button>

                                        </form>
                                    </th>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @else
                        <h1>@lang('site.no_data_found')</h1>
                    @endif
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                </div>

            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
