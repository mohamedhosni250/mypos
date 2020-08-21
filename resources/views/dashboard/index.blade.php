@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> لوحة التحكم </li>
            </ol>
        </section>

        <section class="content">


            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('site.dashboard')</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                    <div class="box-body">

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                    </div>

            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
