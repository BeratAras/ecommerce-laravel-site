@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Marka Güncelle</h5>
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
                <form method="POST" action="{{ url('update/brand/' . $brand->id) }}" enctype="multipart/form-data">
                    <div class="modal-body pd-20">
                        @csrf
                        <div class="form-group">
                            <label class="col-form-label">Marka Adı:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Kategori"
                                name="brand_name" value="{{ $brand->brand_name }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Marka Logo:</label>
                            <input type="file" class="form-control" name="brand_logo">
                        </div>

                        <td>
                            @if ($brand->brand_logo)
                                <img src="{{ URL::to($brand->brand_logo) }}" width="200">
                            @else
                                Fotoğraf Eklenmedi.
                            @endif
                        </td>
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
