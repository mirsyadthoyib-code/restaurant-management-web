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
                            <div class="card-body col-sm-8">
                                <form class="" action="/belanja/save" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="exampleInputText2" class="h5">Menu</label>
                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                    <option>Risol Mayo</option>
                                                    <option>Lontong Kentang</option>
                                                    <option>Sosis Solo</option>
                                                    <option>Martabak Telur</option>
                                                    <option>Lumpur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="exampleInputText01" class="h5">COGS</label>
                                                <input type="text" class="form-control" id="exampleInputText01"
                                                    placeholder="Price" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="exampleInputText01" class="h5">Quantity</label>
                                                <input type="text" class="form-control" id="exampleInputText01"
                                                    placeholder="Contoh: 20">
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
