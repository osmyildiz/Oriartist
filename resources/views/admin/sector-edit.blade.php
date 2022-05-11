@extends('admin.layouts.master')

@section('title') Admin Panel @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Özet Bilgi Güncelle @endslot
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

    <div class="card">
        <form method="POST" class="form-horizontal" action="/update-sector/{{$sector->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Sektör Bilgisi Güncelle</h4>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 row">
                                    <label for="name" class="col-md-3 col-form-label">Başlık</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="name" name="name" value="{{$sector->name}}">
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="priority" class="col-md-3 col-form-label">Priority</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="priority" name="priority" value="{{$sector->priority}}">
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="avatar">Kapak Resmi</label>
                                    <div class="media">
                                        <div class="me-3">
                                            <img src="{{url($sector->icon==NULL?"":$sector->icon)}}" alt=""
                                                 style="display:block;" width="50%" height="50%">
                                        </div>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="icon" name="icon" >

                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <label for="url">Dosya</label>
                                    <label for="url" class="col-md-3 col-form-label">{{$sector->url}}</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" accept="application/pdf" class="form-control" id="url" name="url" >

                                    </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">


                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Güncelle</button>
                                                <a href="{{route('admin_sector')}}"  class="btn btn-xs btn-warning text-white">Sektör Bölümü</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>



@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('/assets/js/pages/datatables.init.js') }}"></script>
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
@endsection