@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Ürün Güncelle</h5>
            </div><!-- sl-page-title -->
            <form method="POST" action="{{ url('update/product/' . $product->id) }}">
                @csrf
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Adı: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_name"
                                        value="{{ $product->product_name }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Kodu: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_code"
                                        value="{{ $product->product_code }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Adeti: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_quantity"
                                        value="{{ $product->product_quantity }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Ürün Kategorisini Seç"
                                        name="category_id">
                                        @foreach ($category as $category)
                                            <option value="{{ $category->id }}" <?php if ($category->id ==
                                                $product->category_id) {
                                                echo 'selected';
                                                } ?>
                                                >{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Alt Kategori: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Ürün Kategorisini Seç"
                                        name="subcategory_id">
                                        @foreach ($subcategory as $subcategory)
                                            <option value="{{ $subcategory->id }}" <?php if ($subcategory->id
                                                == $product->category_id) {
                                                echo 'selected';
                                                } ?>
                                                >{{ $subcategory->subcategory_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Marka: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Ürün Kategorisini Seç"
                                        name="brand_id">
                                        <option label="Ürün Markasını Seç"></option>
                                        @foreach ($brand as $brand)
                                            <option value="{{ $brand->id }}" <?php if ($brand->id ==
                                                $product->brand_id) {
                                                echo 'selected';
                                                } ?>
                                                >{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Boyutu: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_size" id="size"
                                        data-role="tagsinput" value="{{ $product->product_size }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Rengi: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_color" id="color"
                                        data-role="tagsinput" value="{{ $product->product_color }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label">Satış Fiyatı: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="selling_price"
                                        value="{{ $product->selling_price }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label">İndirimli Fiyatı: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="discount_price"
                                        value="{{ $product->discount_price }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Ürün Açıklaması: <span
                                            class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote" type="text"
                                        name="product_details">{{ $product->product_detail }}</textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="video_link"
                                        value="{{ $product->video_link }}">
                                </div>
                            </div><!-- col-4 -->
                            <hr>
                            <div class="col-lg-12">
                                <hr>
                                <label class="form-control-label">Seçenekler</label>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="main_slider" <?php if
                                            ($product->main_slider == 1) {
                                        echo 'checked';
                                        } ?>>
                                        <span>Main Slider</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="hot_deal" <?php if ($product->hot_deal
                                        == 1) {
                                        echo 'checked';
                                        } ?>>
                                        <span>Hot Deal</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="best_rated" <?php if
                                            ($product->best_rated == 1) {
                                        echo 'checked';
                                        } ?>>
                                        <span>Best Rated</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="trend" <?php if ($product->trend == 1) {
                                        echo 'checked';
                                        } ?>>
                                        <span>Trend</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="mid_slider" <?php if
                                            ($product->mid_slider == 1) {
                                        echo 'checked';
                                        } ?>>
                                        <span>Mid Slider</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="ckbox">
                                        <input type="checkbox" name="hot_new" <?php if ($product->hot_new ==
                                        1) {
                                        echo 'checked';
                                        } ?>>
                                        <span>Hot New</span>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Güncelle</button>
                            <button class="btn btn-secondary">Vazgeç</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </div><!-- card -->
            </form>
        </div>
    </div>

    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Ürün Fotoğrafı Güncelle</h5>
            </div><!-- sl-page-title -->
            <div class="sl-page-title">
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <form action="{{ url('image-update/product/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label">1. Fotoğraf: <span
                                                class="tx-danger">*</span></label>
                                        <br>
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input" name="image_one"
                                                onchange="readURL(this)">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <label>Yeni:</label> <br>
                                        <img src="#" id="one">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <label>Mevcut Fotoğraf:</label> <br>
                                        <img src="{{ URL::to($product->image_one) }}" height="100">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label">2. Fotoğraf: <span
                                                class="tx-danger">*</span></label>
                                        <br>
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input" name="image_two"
                                                onchange="readURL2(this)">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <img src="#" id="two">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <img src="{{ URL::to($product->image_two) }}" height="100">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-control-label">3. Fotoğraf: <span
                                                class="tx-danger">*</span></label>
                                        <br>
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input" name="image_three"
                                                onchange="readURL3(this)">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <img src="#" id="three">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <img src="{{ URL::to($product->image_three) }}" height="100">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-info mg-r-5">Güncelle</button>
                            </div><!-- form-layout-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ########## END: MAIN PANEL ########## -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="category_id"]').on('change', function() {
                    var category_id = $(this).val();
                    if (category_id) {

                        $.ajax({
                            url: "{{ url('/get/subcategory/') }}/" + category_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                var d = $('select[name="subcategory_id"]').empty();
                                $.each(data, function(key, value) {

                                    $('select[name="subcategory_id"]').append(
                                        '<option value="' + value.id + '">' + value
                                        .subcategory_name + '</option>');

                                });
                            },
                        });

                    } else {
                        alert('danger');
                    }

                });
            });

        </script>

        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#one')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

        </script>
        <script type="text/javascript">
            function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#two')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

        </script>
        <script type="text/javascript">
            function readURL3(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#three')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

        </script>

    @endsection
