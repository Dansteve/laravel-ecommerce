@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="main-title-wrap">
            <span class="title">Edit Product</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="top-header">
                <div class="col-md-3">
                    <img src="http://placehold.it/250x250" class="img-responsive img img-thumbnail"/>
                </div>
                <div class="col-md-9">
                    <span class="product-name">PRODUCT NAME HERE</span>

                    <div class="pull-right">
                        <!-- BUTTON GROUP -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Save Product</button>
                            <button type="button" class="btn btn-warning">Save & Continue</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"><br/><br/></div>


    <div class="row">
        <div class="col-md-12">
            <?php
            $productCategories = $product->categories()->get()->pluck('id')->toArray();

            ?>
            {!! Form::bind($product, ['files' => true,'method' => 'PUT', 'action' => route('admin.product.update', $product->id)]) !!}

                    <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#basic" aria-controls="home" role="tab" data-toggle="tab">
                        Home
                    </a>
                </li>

                <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Images</a>
                </li>
                <li role="presentation"><a href="#inventory" aria-controls="inventory" role="tab" data-toggle="tab">Inventory</a>
                </li>
                <li role="presentation"><a href="#seo" aria-controls="seo" role="tab" data-toggle="tab">SEO</a></li>
                <li role="presentation"><a href="#extra" aria-controls="extra" role="tab" data-toggle="tab">Extra</a>
                </li>
                <li role="presentation"><a href="#attribute" aria-controls="attributr" role="tab" data-toggle="tab">Attribute</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="basic">
                    @include('mage2productadmin::product.basic-panel' )
                </div>
                <div role="tabpanel" class="tab-pane" id="images">
                    @include('mage2productadmin::product.images' )
                </div>
                <div role="tabpanel" class="tab-pane" id="inventory">
                    @include('mage2productadmin::product.inventory-panel' )
                </div>
                <div role="tabpanel" class="tab-pane" id="seo">
                    @include('mage2productadmin::product.seo-panel' )
                </div>
                <div role="tabpanel" class="tab-pane" id="extra">
                    @include('mage2productadmin::product.extra-panel' )
                </div>
                <div role="tabpanel" class="tab-pane" id="attribute">
                    @include('mage2productadmin::product.attribute' )
                </div>
            </div>


            {!! Form::submit('Edit Product') !!}
            {!! Form::button('Cancel',['class' => 'btn', 'onclick' => 'location="'.route('admin.product.index').'"']) !!}

            {!! Form::close() !!}
        </div>

    </div>


@endsection