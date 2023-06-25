@extends('layout.master')

@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">

                {{-- Modal --}}
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        {{-- Modal content --}}
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Invoice Photo</h5>
                            </div>
                            <div class="modal-body">
                                <form class="" action="/shopping/add" method="post" enctype="multipart/form-data">
                                    @csrf
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
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Add Data</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Header Section --}}
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-between">
                                <div class="col-4 d-flex align-items-center">
                                    <h4 class="card-title">Shopping</h4>
                                </div>
                                <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">Add Shopping Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Photo Card Section --}}
                @foreach ($belanja as $key => $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <a href="/shopping/edit/{{ $item->id_belanja }}" role="button" class="btn btn-link">
                                <div class="card-body">
                                    <div class="top-block d-flex align-items-center justify-content-between">
                                        <h5>Invoice {{ $key + 1 }}</h5>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <img id="preview" src="{{ asset('storage/' . $item->foto_invoice) }}"
                                            class="img-thumbnail">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endSection
