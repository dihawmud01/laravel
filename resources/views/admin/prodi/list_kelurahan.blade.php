<label for="exampleInputEmail1">Alamat Pilih Kelurahan</label>
{!! Form::select('kelurahan_id', $kelurahan, '', [
    'class' => 'form-control',
    'placeholder' => 'Pilih kelurahan',
    'id' => 'kelurahan_id',
]) !!}