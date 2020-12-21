@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Kupon Güncelle</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, eius!</p>
            </div>
        </div>

            <div class="form-group pl-3 pr-3">
                <div class="modal-content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ url('update/coupon/'.$coupon->id) }}">
                        <div class="modal-body pd-20">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Kupon:</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Kupon"
                                    name="coupon" value="{{ $coupon->coupon }}">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">İndirim Miktarı:</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Miktar"
                                    name="discount" value="{{ $coupon->discount }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <!-- ########## END: MAIN PANEL ########## -->

@endsection
