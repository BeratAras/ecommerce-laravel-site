@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
            <h5>{{$product->product_name}} Ürünün Detayları</h5>
            </div><!-- sl-page-title -->
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="h4">
                                    <label>Ürün Adı:</label>
                                    <label class="text-dark">{{$product->product_name}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="h4">
                                    <label class="form-control-label">Ürün Kodu:</label>
                                    <label class="text-dark">{{$product->product_code}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="h4">
                                    <label class="form-control-label">Ürün Adeti:</label>
                                    <label class="text-dark">{{$product->product_quantity}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="h4">
                                    <label class="form-control-label">Kategori:</label>
                                    <label class="text-dark">{{$product->category_name}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="h4">
                                    <label class="form-control-label">Alt Kategori:</label>
                                    <label class="text-dark">{{$product->subcategory_name}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="h4">
                                    <label class="form-control-label">Marka:</label>
                                    <label class="text-dark">{{$product->brand_name}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Boyutu: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_size" id="size"
                                        data-role="tagsinput">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Rengi: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_color" id="color"
                                        data-role="tagsinput">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label">Satış Fiyatı: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="selling_price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label">İndirimli Fiyatı: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="discount_price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Açıklaması: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" id="summernote" type="text" name="product_details">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="video_link">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">1. Fotoğraf: <span class="tx-danger">*</span></label>
                                    <br>
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this)" required>
                                        <span class="custom-file-control"></span>
                                        <div>
                                            <img src="#" id="one">
                                        </div>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">2. Fotoğraf: <span class="tx-danger">*</span></label>
                                    <br>
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL2(this)" required>
                                        <span class="custom-file-control"></span>
                                        <div>
                                            <img src="#" id="two">
                                        </div>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">3. Fotoğraf: <span class="tx-danger">*</span></label>
                                    <br>
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL3(this)" required>
                                        <span class="custom-file-control"></span>
                                        <div>
                                            <img src="#" id="three">
                                        </div>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <hr>
                            <div class="col-lg-12">
                                <label class="form-control-label">Seçenekler</label>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="main_slider" value="1">
                                        <span>Main Slider</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="hot_deal" value="1">
                                        <span>Hot Deal</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="best_rated" value="1">
                                        <span>Best Rated</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="trend" value="1">
                                        <span>Trend</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="mid_slider" value="1">
                                        <span>Mid Slider</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="hot_new" value="1">
                                        <span>Hot New</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                    </div>
                </div>
        </div>

    </div>
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
