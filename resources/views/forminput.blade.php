<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
 <div class="card mt-5">
<div class="card-body">
<h3 class="text-center">Form</h3><br/>
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif <br/>
 <!-- form validasi -->
 <form action="{{ url('hasil') }}" method="POST">
{{ csrf_field() }}

<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control"  value="{{ old('nama') }}">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text1" name="email" type="text" class="form-control"  value="{{ old('email') }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Lokasi</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="bekasi">Bekasi</option>
        <option value="depok">Depok</option>
        <option value="bogor">Bogor</option>
        <option value="tanggerang">Tanggerang</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio1_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="radio1_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio1_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="radio1_1" class="custom-control-label">perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Skill</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="skill" id="checkbox_0" type="checkbox" class="custom-control-input" value="html"> 
          <label for="checkbox_0" class="custom-control-label">Html</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="skill" id="checkbox_1" type="checkbox" class="custom-control-input" value="css"> 
          <label for="checkbox_1" class="custom-control-label">Css</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="skill" id="checkbox_2" type="checkbox" class="custom-control-input" value="mysql"> 
          <label for="checkbox_2" class="custom-control-label">Mysql</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="skill" id="checkbox_3" type="checkbox" class="custom-control-input" value="php"> 
          <label for="checkbox_3" class="custom-control-label">PHP</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="skill" id="checkbox_4" type="checkbox" class="custom-control-input" value="javascript"> 
          <label for="checkbox_4" class="custom-control-label">Javascript</label>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" value="proses">Submit</button>
    </div>
  </div>
</form>