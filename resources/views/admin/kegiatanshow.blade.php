<x-template-layout>
             <div class="row">
                 <div class="col-md-12">
                    <div class="box box primary">
                        <div class="boc-header with-border">
                            Detail Kegiatan
                        </div><br>
                        <div class="class box-body">
                        <table class="table table-bordered">
                         <tr>
                            <td>NamaKegiatan</td>
                            <td>:</td>
                            <td>{{$kegiatan->nama}}</td>
                         </tr>
                         <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>{{$kegiatan->waktu}}</td>
                         </tr>
                          <tr>
                            <td>deskripsi</td>
                            <td>:</td><br>
                            <td>{{$kegiatan->description}}</td>
                         </tr>
                             <img src="{{asset('storage/'.$kegiatan->gambar)}}" width="250" alt="">  
                        </table>
                        </div><br>
                        <div>
                          <a href="{{route('kegiatan.index')}}" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
         

</x-template-layout>