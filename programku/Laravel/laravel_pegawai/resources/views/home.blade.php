@extends('layouts.app')

@section('content')
<h3 class="border-bottom pb-3 mb-3">Dashboard</h3>

<div class="row mb-3 pb-3">
   <div class="col-sm-6 mb-3">
      <div class="card">
         <div class="card-body bg-warning opacity-75">
            <i class="bi bi-person-square display-3"></i> 
            <span class="display-3 float-end">{{$jmlpegawai}}</span> 
         </div>
         <div class="card-footer bg-warning active">
            <a href="{{route('pegawai.index')}}" class="nav-link text-white">
            Data Pegawai
            <i class="bi bi-arrow-right float-end"></i> 
         </a>  
         </div>
      </div>
   </div>

   <div class="col-sm-6 mb-3">
      <div class="card">
         <div class="card-body bg-success opacity-75">
            <i class="bi bi-star display-3"></i> 
            <span class="display-3 float-end">{{$jmljabatan}}</span> 
         </div>
         <div class="card-footer bg-success active">
            <a href="{{route('jabatan.index')}}" class="nav-link text-white">
            Data Jabatan
            <i class="bi bi-arrow-right float-end"></i> 
         </a>  
         </div>
      </div>
   </div>
</div>
@endsection
