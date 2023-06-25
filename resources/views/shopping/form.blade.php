@extends('layout.master')

@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    {{-- Success alert when status available --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Edit Invoice Section --}}
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-4 d-flex">
                                    <h4 class="card-title">Edit Invoice</h4>
                                </div>
                                <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="/shopping" role="button" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid row">
                            <div class="card-body col-sm-8">
                                <form class="" action="/shopping/update/{{ $belanja->id_belanja }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <label for="foto_invoice" class="h5 col-lg-12">Invoice Photo</label>
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
                                            <button type="submit" class="btn btn-primary">Save Edit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body col-sm-3">
                                <img id="preview" src="{{ asset('storage/' . $belanja->foto_invoice) }}"
                                    class="img-thumbnail">
                            </div>
                        </div>
                    </div>

                    {{-- Table Section --}}
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-4 d-flex">
                                    <h4 class="card-title">Shopping Items</h4>
                                </div>
                                <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="/shopping/detail/add/{{ $belanja->id_belanja }}" role="button" class="btn btn-primary">Add Item</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive rounded bg-white">
                                <table class="table mb-0 table-borderless tbl-server-info">
                                    <thead>
                                        <tr class="ligth">
                                            <th scope="col"></th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($belanja_bahan as $key => $item)
                                            <tr>
                                                <th scope="row"><?= $key + 1 ?></th>
                                                <td><?= ucwords($item->nama_bahan) ?></td>
                                                <td><?= $item->kuantitas . ' ' . $item->satuan ?></td>
                                                <td><?= $item->harga ?></td>
                                                <td><?= $item->action ?></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="ligth">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th>Total</th>
                                            <th><?= $total ?></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </tfoot>
                                </table>
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
