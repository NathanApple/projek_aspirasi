<x-guest-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">
                <form action="{{route("aspirasi.store")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow-sm">
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="card-body  border-bottom p-3 h-100">
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div class="pl-3" style="width: 80%">
                                            <div class="mb-2">
                                                <label href="" class="h5 font-weight-bolder text-dark" for="nik">NIK</label>
                                            </div>
                                            <p class="text-muted small">
                                                <input type="text" name="nik" id="nik" class="form-control">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div class="pl-3" style="width: 80%">
                                            <div class="mb-2">
                                                <label href="" class="h5 font-weight-bolder text-dark" for="kategori">Kategori</label>
                                            </div>
                                            <p class="text-muted small">
                                                <select class="form-control" aria-label="Kategori" id="kategori" name="kategori">
                                                    <option selected>Pilih kategori</option>
                                                    @foreach ($kategori as $kt)

                                                    <option value="{{$kt->id_kategori}}">{{$kt->ket_kategori}}</option>

                                                        
                                                    @endforeach
                                                  </select>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div class="pl-3" style="width: 80%">
                                            <div class="mb-2">
                                                <label href="" class="h5 font-weight-bolder text-dark" for="lokasi">Lokasi</label>
                                            </div>
                                            <p class="text-muted small">
                                                <input type="text" name="lokasi" id="lokasi" class="form-control">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div class="pl-3" style="width: 80%">
                                            <div class="mb-2">
                                                <label href="" class="h5 font-weight-bolder text-dark" for="gambar">Gambar</label>
                                            </div>
                                            <p class="text-muted small">
                                                <input type="file" name="gambar" id="gambar" class="form-control-file">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div class="pl-3" style="width: 80%">
                                            <div class="mb-2">
                                                <label href="" class="h5 font-weight-bolder text-dark" for="keterangan">Keterangan</label>
                                            </div>
                                            <p class="text-muted small">
                                                <textarea name="keterangan" id="keterangan" name="keterangan" cols="30" rows="10" class="form-control"></textarea>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div class="pl-3" style="width: 80%">
                                            <div class="mb-2">
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>



</x-guest-layout>