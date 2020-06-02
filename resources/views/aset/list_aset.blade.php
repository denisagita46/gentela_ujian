@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>List Pengajuan</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

				@if(count($tb_asset) > 0)
                       
					<a href="{{ route('admin.aset.cetak_pdf') }}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nomor Aset</th>
                            <th>Nama Aset</th>
                            <th>Merk</th>
                            <th>Ruang</th>
                            <th>PIC</th>
							<th>Cost Center</th>
							<th>Tanggal Perolehan</th>
                        </tr>
                        </thead>
                        <tbody>
						     @foreach($tb_asset as $k => $aset)
                            <tr>
                                
                                <th scope="row"> {{ $aset->asset_code_temp }}</th>
                                <td>{{ $aset->asset_description }}</td>
								<td></td>
								<td>{{ $aset->room }}</td>
								<td></td>
                                <td>{{ $aset->cost_center }}</td>
                                <td></td>
								
							</tr>
                        @endforeach
                        </tbody>
                    </table>
					@else
					@endif
                        
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
