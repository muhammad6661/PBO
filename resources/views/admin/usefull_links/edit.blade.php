@extends('layouts.admin')

@section('title','Редактировать ссылки')
@section('styles')
<!-- Plugins CSS -->
<link rel="stylesheet" href="/public/assets/css/plugins/plugins.css">
@endsection

@section('content')





<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Редактировать полезные ссылки</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/admin/usefull_links">Полезные ссылки</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->





        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <form method="post" action="/admin/usefull_links/update-link/{{$link->id}}" enctype="multipart/form-data">
                            @csrf

                            @include('includes.errors')

                            <div class="form-group">
                                <label for="productname">Заголовок*(Ru)</label>
                                <input id="productname" name="title_ru" type="text" class="form-control" value="{{$link->title_ru}}" required>
                            </div>

                            <div class="form-group">
                                <label for="productname">Заголовок (TJ)</label>
                                <input id="productname" name="title_tj" type="text" class="form-control" value="{{$link->title_tj}}" >
                            </div>
                            <div class="form-group">
                                <label for="productname">Заголовок (En)</label>
                                <input id="productname" name="title_en" type="text" class="form-control" value="{{$link->title_en}}" >
                            </div>
                            <div class="form-group">
                                <label for="productname">Ссылка (Ru)</label>
                                <input id="productname" name="link_ru" type="text" class="form-control" value="{{$link->link_ru}}" >
                            </div>
                            <div class="form-group">
                                <label for="productname">Ссылка (Tj)</label>
                                <input id="productname" name="link_tj" type="text" class="form-control" value="{{$link->link_tj}}" >
                            </div>
                            <div class="form-group">
                                <label for="productname">Ссылка (En)</label>
                                <input id="productname" name="link_en" type="text" class="form-control" value="{{$link->link_en}}" >
                            </div>

                      <div class="product-upload-gallery  flex-wrap mt-5">
                        <div><h4 class="card-title">Логотип*</h4></div>
                         <p class="card-title-desc">

                          Логотип должно (50х50) px.
                        </p>
                   <div class="col-12 mb-30 col-lg-12">

                   <input class="dropify" type="file" id="profile_pic" name="logo" accept="image/x-png,image/gif,image/jpeg" data-default-file="/public/uploads/links/{{$link->logo}}" >

                  </div>
            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary waves-effect waves-light" style="float:right;">Сохранить</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>

@endsection

@section('scripts')
<script src="/public/assets/js/dropify/dropify.min.js"></script>
<script src="/public/assets/js/dropify/dropify.active.js"></script>
<script>
    $(document).ready(function() {
     $('#menu_links').addClass('mm-active');
     $('#menu_links a').addClass('active');
    });
</script>
@endsection
