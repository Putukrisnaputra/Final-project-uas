<x-template-layout>
             <div class="row">
                 <div class="col-md-12">
                    <div class="box box primary">
                        <div class="boc-header with-border">
                            Detail Pegawai
                        </div><br>
                        <div class="class box-body">
                        <table class="table table-bordered">
                         <tr>
                            <td>NIP</td>
                            <td>:</td>
                            <td>{{$pegawai->nip}}</td>
                         </tr>
                         <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$pegawai->nama}}</td>
                         </tr>
                          <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{$pegawai->jabatan}}</td>
                         </tr>
                             <img src="{{asset('storage/'.$pegawai->gambar)}}" width="250" alt="">  
                        </table>
                        </div><br>
                        <div>
                          <a href="{{route('pegawai.index')}}" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
         

</x-template-layout>