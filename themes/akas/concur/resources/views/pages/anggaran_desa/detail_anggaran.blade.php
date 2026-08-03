<div class="dinamic-single">
    <div class="title">Detail Anggaran Desa (APBDes)</div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <tbody>
                {{-- Pendapatan --}}
                <tr style="background: #202020;color: #fafafa;font-weight: bold;">
                    <td style="width: 70%;" colspan="4" class="text-uppercase">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color: #fafafa">4 - PENDAPATAN</a>
                    </td>
                    <td style="width: 30%;" class="text-right">
                        @php
                            $query_pendapatan = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '4%');
                            if ($did != 'Semua') {
                                $query_pendapatan->where('desa_id', $did);
                            }
                            if ($mid != 'Semua') {
                                $query_pendapatan->where('bulan', $mid);
                            }
                            if ($year != 'Semua') {
                                $query_pendapatan->where('tahun', $year);
                            }
                            $total_pendapatan = $query_pendapatan->sum('jumlah');
                            echo format_number_id($total_pendapatan);
                        @endphp
                    </td>
                </tr>
                <tr id="collapseOne" class="panel-collapse">
                    <td colspan="5">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="3" style="width: 20%;" class="text-center">Kode</th>
                                        <th style="width: 50%;" class="text-center">Uraian</th>
                                        <th style="width: 30%;" class="text-center">Jumlah (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\SubCoa::where('type_id', 4)->orderBy('type_id')->get() as $sub_coa)
                                        <tr>
                                            <td class="text-center">{{ $sub_coa->type_id }}</td>
                                            <td class="text-center">{{ $sub_coa->id }}</td>
                                            <td class="text-center"></td>
                                            <td><strong>{{ $sub_coa->sub_name }}</strong></td>
                                            <td class="text-right">
                                                <?php
                                                $query_pendapatan_sub = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '4' . $sub_coa->id . '%');
                                                if ($did != 'Semua') {
                                                    $query_pendapatan_sub->where('desa_id', $did);
                                                }
                                                if ($mid != 'Semua') {
                                                    $query_pendapatan_sub->where('bulan', $mid);
                                                }
                                                if ($year != 'Semua') {
                                                    $query_pendapatan_sub->where('tahun', $year);
                                                }
                                                $total_pendapatan_sub = $query_pendapatan_sub->sum('jumlah');
                                                echo format_number_id($total_pendapatan_sub);
                                                ?>
                                                
                                            </td>
                                        </tr>
                                        @foreach (\App\Models\SubSubCoa::where('type_id', $sub_coa->type_id)->where('sub_id', $sub_coa->id)->orderBy('sub_id')->get() as $sub_sub_coa)
                                            <tr>
                                                <td class="text-center">{{ 4 }}</td>
                                                <td  class="text-center">{{ $sub_sub_coa->sub_id }}</td>
                                                <td  class="text-center">{{ $sub_sub_coa->id }}</td>
                                                <td>&emsp;&emsp;{{ $sub_sub_coa->sub_sub_name }}</td>
                                                <td align="right">
                                                    <?php
                                                    $query_pendapatan_sub_sub = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '4' . $sub_coa->id . $sub_sub_coa->id . '%');
                                                    if ($did != 'Semua') {
                                                        $query_pendapatan_sub_sub->where('desa_id', $did);
                                                    }
                                                    if ($mid != 'Semua') {
                                                        $query_pendapatan_sub_sub->where('bulan', $mid);
                                                    }
                                                    if ($year != 'Semua') {
                                                        $query_pendapatan_sub_sub->where('tahun', $year);
                                                    }
                                                    $total_pendapatan_sub_sub = $query_pendapatan_sub_sub->sum('jumlah');
                                                    echo format_number_id($total_pendapatan_sub_sub);
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>

                {{-- Belanja --}}
                <tr style="background: #202020;color: #fafafa;font-weight: bold;">
                    <td style="width: 70%;" colspan="4" class="text-uppercase">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="detail" style="color: #fafafa"> 5 - BELANJA</a>
                    </td>
                    <td style="width: 30%;" class="text-right">
                        @php
                        $query_belanja = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '5%');
                        if ($did != 'Semua') {
                        $query_belanja->where('desa_id', $did);
                        }
                        if ($mid != 'Semua') {
                        $query_belanja->where('bulan', $mid);
                        }
                        if ($year != 'Semua') {
                        $query_belanja->where('tahun', $year);
                        }
                        $total_belanja = $query_belanja->sum('jumlah');
                        echo format_number_id($total_belanja);
                        @endphp
                    </td>
                </tr>
                <tr id="collapseTwo" class="panel-collapse">
                    <td colspan="5">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="3" style="width: 20%;" class="text-center">Kode</th>
                                        <th style="width: 50%;" class="text-center">Uraian</th>
                                        <th style="width: 30%;" class="text-center">Jumlah (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\SubCoa::where('type_id', 5)->orderBy('id')->get() as $sub_coa)
                                    <tr>
                                        <td class="text-center">{{ $sub_coa->type_id }}</td>
                                        <td class="text-center">{{ $sub_coa->id }}</td>
                                        <td class="text-center"></td>
                                        <td><strong>{{ $sub_coa->sub_name }}</strong></td>
                                        <td class="text-right">
                                            <?php
                                                                $query_pendapatan_sub = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '4' . $sub_coa->id . '%');
                                                                if ($did != 'Semua') {
                                                                    $query_pendapatan_sub->where('desa_id', $did);
                                                                }
                                                                if ($mid != 'Semua') {
                                                                    $query_pendapatan_sub->where('bulan', $mid);
                                                                }
                                                                if ($year != 'Semua') {
                                                                    $query_pendapatan_sub->where('tahun', $year);
                                                                }
                                                                $total_pendapatan_sub = $query_pendapatan_sub->sum('jumlah');
                                                                echo format_number_id($total_pendapatan_sub);
                                                                ?>
                
                                        </td>
                                    </tr>
                                    @foreach (\App\Models\SubSubCoa::where('type_id', $sub_coa->type_id)->where('sub_id',
                                    $sub_coa->id)->orderBy('sub_id')->get() as $sub_sub_coa)
                                    <tr>
                                        <td class="text-center">{{ 4 }}</td>
                                        <td class="text-center">{{ $sub_sub_coa->sub_id }}</td>
                                        <td class="text-center">{{ $sub_sub_coa->id }}</td>
                                        <td>&emsp;&emsp;{{ $sub_sub_coa->sub_sub_name }}</td>
                                        <td align="right">
                                            <?php
                                                                    $query_pendapatan_sub_sub = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '4' . $sub_coa->id . $sub_sub_coa->id . '%');
                                                                    if ($did != 'Semua') {
                                                                        $query_pendapatan_sub_sub->where('desa_id', $did);
                                                                    }
                                                                    if ($mid != 'Semua') {
                                                                        $query_pendapatan_sub_sub->where('bulan', $mid);
                                                                    }
                                                                    if ($year != 'Semua') {
                                                                        $query_pendapatan_sub_sub->where('tahun', $year);
                                                                    }
                                                                    $total_pendapatan_sub_sub = $query_pendapatan_sub_sub->sum('jumlah');
                                                                    echo format_number_id($total_pendapatan_sub_sub);
                                                                    ?>
                
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>

                {{-- Pembiayaan --}}
                <tr style="background: #202020;color: #fafafa;font-weight: bold;">
                    <td style="width: 70%;" colspan="4" class="text-uppercase">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="detail" style="color: #fafafa"> 6 - PEMBIAYAAN</a>
                    </td>
                    <td style="width: 30%;" class="text-right">
                        @php
                            $query_biaya = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '6%');
                            if ($did != 'Semua') {
                            $query_biaya->where('desa_id', $did);
                            }
                            if ($mid != 'Semua') {
                            $query_biaya->where('bulan', $mid);
                            }
                            if ($year != 'Semua') {
                            $query_biaya->where('tahun', $year);
                            }
                            $total_biaya = $query_biaya->sum('jumlah');
                            echo format_number_id($total_biaya);
                        @endphp
                    </td>
                </tr>
                <tr id="collapseThree" class="panel-collapse">
                    <td colspan="5">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="3" style="width: 20%;" class="text-center">Kode</th>
                                        <th style="width: 50%;" class="text-center">Uraian</th>
                                        <th style="width: 30%;" class="text-center">Jumlah (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\SubCoa::where('type_id', 6)->orderBy('id')->get() as $sub_coa)
                                    <tr>
                                        <td class="text-center">{{ $sub_coa->type_id }}</td>
                                        <td class="text-center">{{ $sub_coa->id }}</td>
                                        <td class="text-center"></td>
                                        <td><strong>{{ $sub_coa->sub_name }}</strong></td>
                                        <td class="text-right">
                                            <?php
                                                                                $query_pendapatan_sub = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '4' . $sub_coa->id . '%');
                                                                                if ($did != 'Semua') {
                                                                                    $query_pendapatan_sub->where('desa_id', $did);
                                                                                }
                                                                                if ($mid != 'Semua') {
                                                                                    $query_pendapatan_sub->where('bulan', $mid);
                                                                                }
                                                                                if ($year != 'Semua') {
                                                                                    $query_pendapatan_sub->where('tahun', $year);
                                                                                }
                                                                                $total_pendapatan_sub = $query_pendapatan_sub->sum('jumlah');
                                                                                echo format_number_id($total_pendapatan_sub);
                                                                                ?>
                
                                        </td>
                                    </tr>
                                    @foreach (\App\Models\SubSubCoa::where('type_id', $sub_coa->type_id)->where('sub_id',
                                    $sub_coa->id)->orderBy('sub_id')->get() as $sub_sub_coa)
                                    <tr>
                                        <td class="text-center">{{ 4 }}</td>
                                        <td class="text-center">{{ $sub_sub_coa->sub_id }}</td>
                                        <td class="text-center">{{ $sub_sub_coa->id }}</td>
                                        <td>&emsp;&emsp;{{ $sub_sub_coa->sub_sub_name }}</td>
                                        <td align="right">
                                            <?php
                                                                                    $query_pendapatan_sub_sub = \App\Models\AnggaranDesa::where('no_akun', 'LIKE', '4' . $sub_coa->id . $sub_sub_coa->id . '%');
                                                                                    if ($did != 'Semua') {
                                                                                        $query_pendapatan_sub_sub->where('desa_id', $did);
                                                                                    }
                                                                                    if ($mid != 'Semua') {
                                                                                        $query_pendapatan_sub_sub->where('bulan', $mid);
                                                                                    }
                                                                                    if ($year != 'Semua') {
                                                                                        $query_pendapatan_sub_sub->where('tahun', $year);
                                                                                    }
                                                                                    $total_pendapatan_sub_sub = $query_pendapatan_sub_sub->sum('jumlah');
                                                                                    echo format_number_id($total_pendapatan_sub_sub);
                                                                                    ?>
                
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>