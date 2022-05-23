@extends('layouts.template')
@section('isi')
<div class="container-fluid py-4">
<div wire:poll.keep-alive>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-center text-capitalize ps-3">Laporan table</h6>
              </div>
            </div>

            <?php $i = 0; ?>
            <div class="card-body text-end px-3 pb-1">
            <a href="{{url('coba')}}" type="button" class="btn  bg-gradient-secondary active">
               <i class="fa-solid fa-arrows-rotate"></i>
            </a>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">spedometer sebelum</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">spedometer sesudah</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">keterangan</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Km</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">total liter</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($data as $laporan)
                   <tr>
                    <td class="text-secondary text-xs font-weight-bold">
                      <div class="d-flex px-3 py-1">{{ ++$i }}</div></td>
                    <td class="text-secondary text-xs font-weight-bold"><img src="{{ asset('storage/' . $laporan->spedometersblm) }}" width="150" height="100"></td> 
                    <td class="align-middle text-center"><img class="test-popup-link" src="{{ asset('storage/' . $laporan->spedometersudah) }}" width="150" height="100"></td>
                    <td class="align-middle text-center"><textarea class="text-center" rows="3.5" cols="20" readonly> {{ $laporan->keterangan}} </textarea></td>
                    <td class="align-middle text-center">{{ $laporan->tanggalpenggunaan }}</td>
                    <td class="align-middle text-center">{{ $laporan->totalkm }}</td>
                    <td class="align-middle text-center">{{ $laporan->liter }}</td>
                    <td class="align-middle text-center"><button wire:click="show({{ $laporan->id }})"
                      class="btn btn-info"><i class="fa-solid fa-eye text-right"></i></button></td>
                </tr>
              @endforeach  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      @endsection




