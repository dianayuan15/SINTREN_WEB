@extends('index')
@section('title', 'Detail Laporan Palawija')
@section('content')
    <div class="page-header d-sm-flex d-block">
        <ol class="breadcrumb mb-sm-0 mb-3">
            <!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="{{ url('/penyuluh/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page">Laporan Palawija</li>
            <li class="breadcrumb-item active" aria-current="page">Detail Laporan Palawija</li>
        </ol><!-- End breadcrumb -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laporan Penyuluh</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="width: 100%">
                            <tr>
                                <td class="text-right">Tanggal Input</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->date }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">Jenis Lahan</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->jenis_lahan }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">Nama Penyuluh</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->user_id }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">Desa</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->desa->name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">kecamatan</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->kecamatan->name }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">Laporan Lahan</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="width: 100%">
                            <tr>
                                <td class="text-right">Jenis Lahan</td>
                                <td>:</td>
                                <td>{{ str_replace('_', ' ', $laporanPalawija->jenis_lahan) }}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Jenis Palawija</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->palawija->name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">Jenis Bantuan</td>
                                <td>:</td>
                                <td>{{ str_replace('_', ' ', $laporanPalawija->jenis_bantuan) }}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Tipe Data input</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->tipe_data }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">Nilai</td>
                                <td>:</td>
                                <td>
                                    {{ $laporanPalawija->nilai }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
