@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Opname</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br />
                <form class="form-horizontal form-label-left" action="" method="post">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tanggal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" value="<?php echo date("d-m-Y"); ?>"  name="tanggal" id="tanggal"
                                   class="form-control">
                        </div>
                        @if($errors->has('tanggal'))
                            <span class="text-danger">{!! $errors->first('tanggal') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">
					   <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Region</label>
					   <div class="col-md-9 col-sm-9 col-xs-12">
					   <div class="form-group">
						{{--{!! Form::label('', 'Combobox aset', array('class' => 'control-label')) !!}--}}
						<select name="name" class="form-control">
					    @foreach ($sd_so_main as $data)
						<option value="{{ $data->parent_id }}">{{ $data->name }}</option>
						@endforeach
						</select>
						</div>
					</div>
					</div>

					
					<div class="form-group">
					   <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Depo</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="form-group">
								{{--{!! Form::label('', 'Combobox aset', array('class' => 'control-label')) !!}--}}
								<select name="depo" class="form-control">
									@foreach ($sd as $data)
								<option value="{{ $data->parent_id }}">{{ $data->name }}</option>
									@endforeach
								</select>
							</div>	
						</div>
					</div>
				
					
					
					<div class="form-group">
					   <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Aset</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="form-group">
								{{--{!! Form::label('', 'Combobox aset', array('class' => 'control-label')) !!}--}}
								<select name="asset_code_temp" class="form-control">
									@foreach ($tb_asset as $data)
									<option value="{{ $data->id }}">{{ $data->asset_code_temp }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>

					
					<div class="form-group">
                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Aset</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input maxlength="11" type="asset_description" name="asset_description" id="asset_description"
                                     class="form-control" readonly="readonly">
                        </div>
                        @if($errors->has('asset_description'))
                            <span class="text-danger">{!! $errors->first('asset_description') !!}</span>
                        @endif
                    </div>
					
					
					<div class="form-group">
                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Depo</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  maxlength="11" type="name_depo" name="name_depo" id="name_depo"
                                     class="form-control" readonly="readonly">
                        </div>
                        @if($errors->has('name_depo'))
                            <span class="text-danger">{!! $errors->first('name_depo') !!}</span>
                        @endif
                    </div>
					
					
					<div class="form-group">

                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Region</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
								<input  maxlength="11" type="name_region" name="name_region" id="name_region"
                                class="form-control" readonly="readonly">
                        </div>
                        @if($errors->has('name_region'))
                            <span class="text-danger">{!! $errors->first('name_region') !!}</span>
                        @endif
                    </div>
					
					
					<div class="form-group">

                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Cost Center</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  maxlength="11" type="cost_center" name="cost_center" id="cost_center"
                                     class="form-control" readonly="readonly">
                        </div>
                        @if($errors->has('cost_center'))
                            <span class="text-danger">{!! $errors->first('cost_center') !!}</span>
                        @endif
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tanggal Perolehan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="tanggal_perolehan" id="tanggal_perolehan"
                                   class="form-control" readonly="readonly">
                        </div>
                        @if($errors->has('tanggal_perolehan'))
                            <span class="text-danger">{!! $errors->first('tanggal_perolehan') !!}</span>
                        @endif
                    </div>
					
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nilai Perolehan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nilai_perolehan" id="nilai_perolehan"
                                   class="form-control" readonly="readonly">
                        </div>
                        @if($errors->has('nilai_perolehan'))
                            <span class="text-danger">{!! $errors->first('nilai_perolehan') !!}</span>
                        @endif
                    </div>
					
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nilai Akumulasi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nilai_buku" id="nilai_buku" class="form-control" readonly="readonly">
                        </div>
                        @if($errors->has('nilai_buku'))
                            <span class="text-danger">{!! $errors->first('nilai_buku') !!}</span>
                        @endif
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Notes</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="notes" id="notes" class="form-control"></textarea>
                        </div>
                        @if($errors->has('notes'))
                            <span class="text-danger">{!! $errors->first('notes') !!}</span>
                        @endif
                    </div>

                    
					@csrf
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Create Aset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
    {{ Html::script(mix('assets/app/js/forms.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection

@push('scripts')
    
@endpush
