@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Alt Kategori Güncelle</h5>
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
                    <form method="POST" action="{{ url('update/subcategory/'.$subcategory->id) }}">
                        <div class="modal-body pd-20">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Eklenecek Kategori</label>
                                <select name="category_id" class="form-control form-control-md">
                                    @foreach($category as $category)
                                        <option 
                                        value="{{$category->id}}"
                                        <?php 
                                            if($category->id == $subcategory->category_id) { echo "selected"; }
                                        ?>    
                                        >
                                        {{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Alt Kategori Adı:</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Alt Kategori"
                                    name="subcategory_name" value="{{ $subcategory->subcategory_name }}">
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
