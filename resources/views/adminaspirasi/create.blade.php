<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <x-jet-welcome /> --}}

    <div class="container">
        

        <div class="card shadow-sm p-2">

            <img class="card-img-top" src=" {{ asset("gambar/$inputaspirasi->gambar") }}" alt="Card image cap">
            <div class="card-header">
                <b>{{$inputaspirasi->kategoris->ket_kategori}}</b>
            </div>
            <div class="card-body">
                <div class="card-text">Dari <b>{{$inputaspirasi->nik}}</b></div>
                <div class="card-text">Di <b>{{$inputaspirasi->lokasi}}</b></div>

                <div class="card-text">{{$inputaspirasi->keterangan}}</div>
            </div>
        </div>

        <div class="card shadow-sm p-2 mt-4">
            <b class="p-2 pl-4">Feedback</b>
            <form action="#" method="post">
                <div class="form-inline">
                    <div class="form-group mb-2 col-9">
                        @csrf
                        <input type="text" name="feedback" id="feedback" class="form-control col-8 mr-3">
                        <select name="status" id="status" class="form-control col-3">
                            <option selected>Pilih status</option>
                            <option value="menunggu">Menunggu</option>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>


                        </select>

                    </div>
                    <div class="form-group  mb-2">
                        <input type="submit" value="Kirim" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

        <div class="card shadow-sm p-2 mt-4">

            <div class="card-body">
                <div class="card-text">

                
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Status</th>
                            <th scope="col">Feedback</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($aspirasi as $as)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $as->status }}</td>
                                    <td>{{ $as->feedback }}</td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>



    </div>

</x-app-layout>