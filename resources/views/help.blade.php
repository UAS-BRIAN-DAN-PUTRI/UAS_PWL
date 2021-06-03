@extends('layouts.master')
@section('content')
<div class="container badan">
       
    <div class="row">
      <div class="col peding-100" style="width: 740px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;">
        <h1>Kolom Bantuan</h1>
        <p>
          Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
        </p>
      </div>

      <div class="col peding-30"style="
      width: 800px;
      padding-left: 70px;
  ">
        <form method="post" action="#">
           
          <div class="form-group"style="
          width: 576px;
      ">
            <label for="">Nama :</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
          </div>

          <div class="form-group"style="
          width: 576px;
      ">
            <label for="">E-mail :</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan Email"style="width: 576px;">
          </div>

          <div class="form-group">
            <label for="">Masalah :</label>
            <textarea name="pesan" class="form-control" cols="30" 
            rows="7"style="margin: 0px 94px 0px 0px; width: 605px; height: 153px;">
          </textarea>
            
          </div>

          <input class="btn btn-primary" type="submit" value="POST">

        </form>
      </div>
    </div>

  </div> 
  
@endsection