<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kode Obat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Kode_Obat" value="{{$model->Kode_Obat}}"placeholder="Masukan Kode Obat">
      @foreach($errors->get('Kode_Obat') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach    
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Obat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nama_obat" value="{{$model->Nama_obat}}"placeholder="Masukan Nama Obat">
        @foreach($errors->get('Nama_obat') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Supplier</label>
    <div class="col-sm-10">
    <select  class="form-control form-control-sm" name="Supplier_id" id="Supplier_id">
        <option value="{{$model->Supplier_id}}">--Pilih Supplier--</option>
        @foreach($supplai as $value)
            <option value="{{$value->id}}">{{$value->Nama_Supplier}}</option>
        @endforeach
        @foreach($errors->get('Supplier_id') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach  
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Satuan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nama_satuan" value="{{$model->Nama_satuan}}"placeholder="Masukan Satuan Obat">
      @foreach($errors->get('Nama_satuan') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jenis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Nama_Jenis" value="{{$model->Nama_Jenis}}"placeholder="Masukan Jenis Obat">
      @foreach($errors->get('Nama_Jenis') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Stok</label>
    <div class="col-sm-10">
      <input type="number" min="0" max ="1000"class="form-control form-control-sm" id="colFormLabelSm" name="Stok" value="{{$model->Stok}}"placeholder = "Stok Obat">
      @foreach($errors->get('Stok') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="Harga" value="{{$model->Harga}}"placeholder="Masukan Harga Obat">
      @foreach($errors->get('Harga') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
  <a class="btn btn-info"  href="{{url('Obat')}}">Kembali</a> <br></br>