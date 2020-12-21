@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Kuponlar</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, eius!</p>
            </div>

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">
                    <a href="#" class="btn btn-md btn-warning" data-toggle="modal" data-target="#exampleModal"
                        style="float: right">Yeni Ekle</a>
                </h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">ID</th>
                                <th class="wd-15p">Kupon</th>
                                <th class="wd-20p">İndirim</th>
                                <th class="wd-20p">Aksiyonlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupon as $key=>$coupon)
                            <tr>
                                <td>{{$coupon->id}}</td>
                                <td>{{$coupon->coupon}}</td>
                                <td>{{$coupon->discount}}</td>
                                <td>
                                    <a href="{{ URL::to('edit/coupon/'.$coupon->id) }}" class="btn btn-sm btn-info">Düzenle</a>
                                    <a href="{{ URL::to('delete/coupon/'.$coupon->id) }}" class="btn btn-sm btn-danger" id="delete">Sil</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kupon Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('store.coupon') }}">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label class="col-form-label">Kupon Adı:</label>
                            <input type="text" class="form-control" placeholder="Kupon"
                                name="coupon" maxlength="8">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">İndirim Miktarı:</label>
                            <input type="text" class="form-control"placeholder="Miktar"
                                name="discount">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ekle</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ########## END: MAIN PANEL ########## -->

@endsection

