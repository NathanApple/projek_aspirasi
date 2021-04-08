<x-guest-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include('sweetalert::alert')
    
    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9 ">
                <table>
                    <td>
                        <div class="col-3">
                            <img src="https://www.flaticon.com/svg/vstatic/svg/813/813414.svg?token=exp=1617782041~hmac=07cee1daea0b0ad7cb8390923625149b" height="100px" class="mb-2">
                        </div>
                    </td>
                    <td>
                        <div class="col-9">
                            <h2 class="">Penguajuan aspirasi masyarakat</h2>
                        </div>
                    </td>
                </table>

                <div class="card shadow-sm mt-3">
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="card-body  border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    </div>
                                    <div class="pl-3" style="width: 80%">
                                        <div class="mb-2">
                                            <a href="" class="h5 font-weight-bolder text-dark" >Silahkan tulis NIK anda</a>
                                        </div>
                                        <form action="{{route("inputaspirasi.view")}}" method="post">
                                        <p class="text-muted small">
                                            <div class="form-inline">
                                                <div class="form-group mb-2 col-9">
                                                    @csrf
                                                    <input type="text" name="nik" id="nik" class="form-control col-12">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <input type="submit" value="Cari " class="btn btn-primary">
                                                </div>
                                            </div>

                                        </p>
                                    </form>
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