<x-guest-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include('sweetalert::alert')
    
    <div class="container-fluid my-5 pt-3 px-5">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">
                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="card-body  border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div class="pr-3" style="width: 100%">
                                        <div class="mb-2">
                                            <a href="{{url('/aspirasi')}}" class="h5 font-weight-bolder text-dark pl-3" >Pengiriman aspirasi dari {{$nik}}</a>
                                            <table class="table mt-2">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Lokasi</th>
                                                    <th scope="col">Keterangan</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($aspirasi as $as)
                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$as->ket_kategori}}</td>
                                                        <td><a href="{{ asset("gambar/$as->gambar") }}">{{ $as->gambar }} </td>
                                                        <td>{{$as->lokasi}}</td>
                                                        <td>{{$as->keterangan}}</td>
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
                </div>

                <div class="card shadow-sm mt-4">
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="card-body border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> --}}
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="{{url("aspirasi/create")}}" class="h5 font-weight-bolder text-dark">Click disini untuk mengirimkan aspirasi</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



</x-guest-layout>