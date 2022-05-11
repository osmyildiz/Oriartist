@extends('admin.layouts.master')

@section('title') ŞURALAR @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') ÖNCEKİ ŞURALAR BÖLÜMÜ @endslot
    @endcomponent


    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has($msg))
                <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ Session::get($msg) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif
        @endforeach
    </div>
    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Rapor Ekle</h4>
                    @if($data==0)
                        <p>Henüz bir şura yok. Önce bir şura ekleyiniz.</p>
                    @else
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('report.add')}}">
                            @csrf

                            <div class="mb-4 row">
                                <label for="time" class="col-md-3 col-form-label">Şura</label>

                                <div class="col-sm-9">
                                    <select id="time" class="form-select" name="sura" required>
                                        <option value="0" selected>Şura Seçiniz</option>
                                        @foreach($suras as $sura)
                                            <option value="{{$sura->id}}">{{$sura->name}}</option>
                                        @endforeach
                                    </select>

                                </div>



                            </div>

                            <div class="mb-4 row">
                                <label for="url1" class="col-sm-3 col-form-label">Dosya</label>
                                <div class="col-sm-9">
                                    <div class="input-group ">
                                        <input type="file" accept="application/pdf" class="form-control" id="url1" name="url1" >

                                    </div>
                                    <span class="text-danger">Sadece pdf uzantılı dosya yükleyebilirsiniz.</span>
                                    <span class="text-danger">Dosyanın büyüklüğüne göre işlem biraz zaman alabilir.</span>
                                    <span class="text-danger">İşlem bitene kadar sayfayı kapatmayınız.</span>

                                </div>


                            </div>



                            <div class="row mb-4">
                                <div class="row justify-content-end">
                                    <div class="col-sm-9">


                                        <div>
                                            <button type="submit" class="btn btn-primary">Dosya Ekle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yeni Şura Ekle</h4>
                    <form method="POST" class="form-horizontal" action="{{route('add.sura')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 row">
                            <label for="name" class="col-md-3 col-form-label">Şura Adı</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="priority" class="col-md-3 col-form-label">Kaçıncı Şura</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" id="priority" name="priority" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Şura Ekle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Şuralar</h4>
                    <p class="card-title-desc">Tüm şura isimlerrini bu tablodan inceleyebilirsiniz.
                    </p>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Şura Adı</th>
                                <th>Kaçıncı Şura</th>
                                <th>Düzenle/Sil</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($data==0)
                                <td colspan="8">Herhangi bir kayıt bulunamadı.</td>
                            @else

                                @foreach($suras as $key=>$sura)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$sura->name}}</td>
                                        <td>{{$sura->priority}}</td>
                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('sura.edit',$sura->id)}}" title="edit" class="btn btn-xs btn-warning text-white"><i class="bx bxs-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <form method="POST" action="{{ route('sura.delete',$sura->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-xs btn-danger  show_confirm" data-toggle="tooltip" title='Delete'><i class="bx bxs-trash"></i></button>
                                                    </form>
                                                <!--<a href="{{route('sura.delete',$sura->id)}}" title="delete"><i class="bx bxs-trash"></i></a>-->
                                                </li>

                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif

                            </tbody>

                        </table>




                    </div></div>

            </div>

        </div> <!-- end col -->

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Raporlar</h4>
                    <p class="card-title-desc">Tüm raporları bu tablodan inceleyebilirsiniz.
                    </p>
                    <form method="POST" class="form-horizontal" onsubmit="return submitForm()" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="mb-4 row">
                                    <label for="time" class="col-md-3 col-form-label">Şura Adı</label>
                                    @if($data==0)
                                        <td colspan="8">Herhangi bir kayıt bulunamadı.</td>
                                    @else

                                        <div class="col-sm-9">
                                            <select id="select-action" class="form-select" name="action">
                                                <option value="{{$sura1->id}}" selected>{{$sura1->name}}</option>
                                                @foreach($suras as $sura)
                                                    @if($sura->id !=$sura1->id)
                                                        <option value="{{$sura->id}}">{{$sura->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>

                                        </div>
                                </div>



                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">


                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Getir</button>
                                            </div>
                                        </div>
                                    </div>




                            <!-- end card -->
                            </div>
                            <!-- end col -->


                        </div>
                </div>
                </form>

                <div class="table-responsive">

                    <table id="today_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Dosya Adı</th>
                            <th>Aktif/Pasif</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($reports->count()==0)
                            <td colspan="8">Herhangi bir kayıt bulunamadı.</td>
                        @else

                            @foreach($reports as $key=>$report)
                                <tr>
                                    <td>{{$key+1}}</td>

                                    <td>{{$report->url}}</td>

                                    <td>{{$report->is_active==1?"Aktif":"Pasif"}}</td>



                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">

                                            <li class="list-inline-item px-1">
                                                <a href="{{route('report.edit',$report->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item px-1">
                                                <a href="{{route('report.delete',$report->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                        @endif

                        </tbody>

                    </table>
                    {{$reports->links("pagination::bootstrap-4")}}


                    @endif

                </div></div>



        </div>

    </div> <!-- end col -->

    </div> <!-- end row -->
    <div class="d-flex justify-content-center"></div>



@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script language="javascript" type="text/javascript">
        function limitText(limitField, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            }
        }


    </script>
    <script>
        $(document).ready(function(){
            $('.alert-success').fadeIn().delay(3000).fadeOut('slow');
            $('.alert-danger').fadeIn().delay(3000).fadeOut('slow');
        });
    </script>
    <script type="text/javascript">

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Bu kaydı silmek istediğinizden emin misiniz?`,
                text: "Onayladığınızda kayıt tamamen silinecektir.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>
    <script type="text/javascript">

        function submitForm() {

            var selectedOption = $('#select-action').val();
            var url = "/admin-report/"+selectedOption;

            location.href=url;
            return false;
        }
    </script>


@endsection
