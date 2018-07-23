@extends('layouts.app') @section('content')
<div class="page-title">
    <div class="title_left">
        <h3>@lang('app.system_information')</h3>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>
                <i class="fa fa-bars"></i>@lang('app.description')</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </li>


            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">


            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">@lang('app.banners')</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">@lang('app.sections')</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">@lang('app.collections')</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">@lang('app.models')</a>
                    </li>

                    <li role="presentation" class="">
                        <a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">@lang('app.pages')</a>
                    </li>

                    <li role="presentation" class="">
                        <a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">@lang('app.distributors')</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p style="font-size:18px;">Se utiliza para administrar el <b>banner</b> principal del site. Se pueden cargar varios <b>banner</b>, sin embargo para que éste se muestre, el nombre del mismo debe ser <b>"home"</b>, de lo contrario el sistema tomará un banner
                            por defecto. Los campos <b>Título 1</b>, <b>Título 2</b> y <b>Título 3</b> son los que se muestran al centro de la imagen, el <b>Título</b> 1 es el central (principal), el <b>Título 2</b> y <b>Título 3</b> son de menos tamaño
                            que <b>Título1 </b>y se sitúan de forma ascendente, respectivamente.</p>
                        <img src="{{ asset('img/information/ejemplo_banner.png') }}" alt="ejemplo" class="img-responsive animated zoomIn">
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <p style="font-size:18px;">Se utiliza para administrar el <b>banner</b> de las Secciones: <b>Distribuidores</b>, <b>Colecciones</b> y <b>Contacto</b> junto con el título y slogan que irán estan en el centro de la imagen. Para que el sistema lo tome se deben cargar con los nombres: <b>"distributor"</b>, <b>"collection"</b> y <b>"contact"</b> de lo contrario el sistema dejará un banner por defecto.</p>
                        <img src="{{ asset('img/information/ejemplo_contact.png') }}" alt="" class="img-responsive animated zoomIn">
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p style="font-size:18px;">Se utiliza para <b>administrar</b> las diferentes <b>colecciones</b><b>. El orden </b>de las colecciones no se puede repetir, si al crear una colección no se llena el campo <b>"Num Order"</b>, ésta no se mostrará en el site. Las imágenes de las colecciones deben ser cargadas con las mismas dimensiones.</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                        <p style="font-size:18px;">Se utiliza para <b>administrar</b> los diferentes <b>modelos</b><b>. Para que </b>un modelo pueda ser creado debe haberse creado por lo menos una colección. El orden de los modelos no se puede repetir, si al crear un modelo no
                            se llena el campo "Num Order", ésta no se mostrará en el site. Para cargar la Galería de un modelo éste primero debe ser creado, luego en el listado se selecciona el modelo correspondiente y se cargan las imágenes.</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                        <p style="font-size:18px;">Se utiliza para <b>administrar</b> las <b>páginas</b>, éstas corresponden a las del menú del site <b>"Nomon Culture"</b>, así como también <b>Aviso Legal</b> y <b>Cookies</b>. El orden de las páginas no se puede repetir, si al crear una página no se llena el campo <b>"Num Order"</b>, ésta no se mostrará en el site, sin embargo, en el caso de las páginas <b>Aviso Legal</b> y <b>Cookies</b> éstas deben dejarse sin <b>"Num Order"</b>; en el footer hay un enlace para las mísmas y para que se muestren dichas páginas deben tener el slug <b>"legal"</b> y <b>"cookies"</b> respectivamente. </p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                        <p style="font-size:18px;">Se utiliza para <b>administrar</b> los <b>distribuidores</b><b>. El orden </b>de los distribuidores no se puede repetir. Si al crear un distribuidor no se llena el campo <b>"Num Order"</b>, ésta no se mostrará en el site.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection