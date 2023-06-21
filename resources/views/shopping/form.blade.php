@extends('layout.master')

@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-4 d-flex">
                                    <h4 class="card-title">Input Shopping</h4>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid row">
                            <div class="card-body col-sm-8">
                                <form class="" action="/shopping/save" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="item" class="h5">Item</label>
                                                <select name="item" class="selectpicker form-control" data-style="py-0"
                                                    id="item" onchange="readItem(this);">
                                                    @foreach ($data as $item)
                                                        <option value="{{ $item->nama_bahan }}">
                                                            {{ ucwords($item->nama_bahan) . ' / ' . $item->satuan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="price" class="h5">Price</label>
                                                <input type="text"
                                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                                    name="price" placeholder="Example: 15000" value="{{ $current->price }}">
                                                @error('price')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="qty" class="h5">Quantity</label>
                                                <input type="text"
                                                    class="form-control @error('qty') is-invalid @enderror" id="qty"
                                                    name="qty" placeholder="Example: 2">
                                                @error('qty')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="foto_invoice" class="h5 col-lg-3">Invoice Photo</label>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="form-control custom-file-input @error('foto_invoice') is-invalid @enderror"
                                                id="foto_invoice" name="foto_invoice" onchange="readURL(this);">
                                            <label class="custom-file-label" for="foto_invoice">Choose Image</label>
                                        </div>
                                        @error('foto_invoice')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Add Data</button>
                                            <a href="/shopping" role="button" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body col-sm-4">
                                <img id="preview" src="<?= url('images/image_placeholder.jpg') ?>" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endSection
