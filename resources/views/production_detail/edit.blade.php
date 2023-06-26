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
                                    <h4 class="card-title">Input Production</h4>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid row">
                            <div class="card-body col-sm-12">
                                <form class="" action="/production/detail/update/{{ $id }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="item" class="h5">Menu</label>
                                                <select name="item" class="selectpicker form-control" data-style="py-0">
                                                    @foreach ($menu as $item)
                                                        <option value="{{ $item->id_menu }}"
                                                            @if ($item->id_menu == $produksi_menu->id_menu) selected @endif>
                                                            {{ ucwords($item->nama_menu) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="qty" class="h5">Quantity</label>
                                                <input type="text"
                                                    class="form-control @error('qty') is-invalid @enderror" id="qty"
                                                    name="qty" placeholder="Example: 20"
                                                    value="{{ $produksi_menu->kuantitas }}">
                                                @error('qty')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Add Data</button>
                                            <a href="/production" role="button" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
