@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Ürünler</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, eius!</p>
            </div>

            <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                
                                <th class="wd-20p">Ürün Kodu</th>
                                <th class="wd-15p">Ürün Adı</th>
                                <th class="wd-20p">Fotoğraf</th>
                                <th class="wd-15p">Kategori</th>
                                <th class="wd-20p">Marka</th>
                                <th class="wd-20p">Adet</th>
                                <th class="wd-20p">Durumu</th>
                                <th class="wd-20p">Aksiyonlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $key => $product)
                                <tr>
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>
                                        @if ($product->image_one)
                                            <img src="{{ URL::to($product->image_one) }}" width="100">
                                        @else
                                            Fotoğraf Eklenmedi.
                                        @endif
                                    </td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->product_quantity }}</td>
                                    <td>
                                        @if($product->status == 1)
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-danger">Pasif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ URL::to('edit/product/' . $product->id) }}"
                                            class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>

                                        <a href="{{ URL::to('delete/product/' . $product->id) }}" class="btn btn-sm btn-danger"
                                            id="delete"><i class="fa fa-trash"></i></a>

                                        {{-- <a href="{{ URL::to('view/product/' . $product->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-eye"></i></a> --}}

                                        @if($product->status == 1)
                                            <a href="{{ URL::to('inactive/product/' . $product->id) }}" class="btn btn-sm btn-info"><i class="fa fa-thumbs-up"></i></a>
                                        @else
                                            <a href="{{ URL::to('active/product/' . $product->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-thumbs-down"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- ########## END: MAIN PANEL ########## -->

@endsection
