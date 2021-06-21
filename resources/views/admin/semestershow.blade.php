<x-template-layout>
             <div class="row">
                 <div class="col-md-12">
                    <div class="box box primary">
                        <div class="boc-header with-border">
                            Detail semester
                        </div><br>
                        <div class="class box-body">
                        <table class="table table-bordered">
                         <tr>
                            <td>Tahun</td>
                            <td>:</td>
                            <td>{{$semester->tahun}}</td>
                         </tr>
                         <tr>
                            <td>File</td>
                            <td>:</td>
                             <td><a href="{{asset('storage/' .$semester->file)}}" alt="">{{$semester->file}}</a></td>
                         </tr>
                        </table>
                        </div><br>
                        <div>
                          <a href="{{route('semester.index')}}" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
         

</x-template-layout>