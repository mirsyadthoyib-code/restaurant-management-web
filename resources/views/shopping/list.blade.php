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
                                    <h4 class="card-title">Shopping</h4>
                                </div>
                                <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="/shopping/create" role="button" class="btn btn-primary">Add Shopping Data</a>
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
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <th scope="row"><?= $key + 1 ?></th>
                                                <td><?= ucfirst($item->nama_bahan) ?></td>
                                                <td><?= $item->kuantitas.' '.$item->satuan ?></td>
                                                <td><?= $item->harga ?></td>
                                                <th scope="row"></th>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="<?= url('js/getTableData/belanja_list.js') ?>"></script>
@endSection
