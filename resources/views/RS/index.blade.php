
<title>{{ $datas }}</title>

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight hetf2"><i class="bi bi-box2-fill"></i>
            {{ __('DATA RUMAH SAKIT') }} <button type="button" class="btn btn-success btn-sm" id="buttonadd"> <i class="bi bi-box2-fill"></i> Add RS</button>
        </h2>
    </x-slot>
                                                    {{-- HEADER --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="table-responsive">
                        <table id="RSTable" class="table text-start table-striped align-middle table-bordered table-hover mb-0">
                            <thead>
                                  <th class="align-center">Nama</th>
                                  <th class="align-center">Alamat</th>
                                  <th class="align-center">Email</th>
                                  <th class="align-center">No Telepon</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                                <tfoot>
                                    <tr>
                                        <th class="align-center">Nama</th>
                                        <th class="align-center">Alamat</th>
                                        <th class="align-center">Email</th>
                                        <th class="align-center">No Telepon</th>
                                          <th class="align-center">Action</th>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>                             
                                                                                            <!-- MODAL add -->
    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modaladdTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-lg-start">
                    <h4><i class="icoon"></i></h4>
                    <h4><i class="titlemodal"></i> </h4>
                </div>
                <div class="modal-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form id="formm" enctype="multipart/form-data">
                                @csrf
                                <dl class="row mb-0">
                                    <dt class="col-sm-4">Nama</dt>
                                    <dd class="col-sm-8">: <input required type="text" name="nama" id="nama" class="form-group ">

                                        <dt class="col-sm-4">Alamat</dt>
                                    <dd class="col-sm-8">: <input required type="text" name="alamat" id="alamat" class="form-group ">

                                    <dt class="col-sm-4">Email</dt>
                                    <dd class="col-sm-8">: <input required type="text" name="email" id="email" class="form-group ">

                                        <dt class="col-sm-4">No Telepon</dt>
                                    <dd class="col-sm-8">: <input required type="number" name="tlp" id="tlp" class="form-group ">
                                  
                                    <input type="hidden" name="id" class="editt" data-id="" id="id_name">
                                </dl>
                            
                            </div>
                                <div class="modal-footer">
                                    <button id="closeModalmodaladd" type="button" class="btn btn-secondary closeModalmodaladd btn-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" id="save" class="btn btn-success btn-sm">Save</button>
                                </div>
                            </form>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>

                                                                    <!-- MODAL View -->
    <div class="modal fade" id="modalview" tabindex="-1" role="dialog" aria-labelledby="modaladdTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-lg-start">
                    <h4><i class="icoon"></i></h4>
                    <h4><i class="titlemodal"></i> </h4>
                </div>
                <div class="modal-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form id="formm" enctype="multipart/form-data">
                                @csrf
                                <dl class="row mb-0">
                                    <dt class="col-sm-4">Nama</dt>
                                    <dd class="col-sm-8">: <span name="nama" id="show_nama" class="form-group ">

                                    <dt class="col-sm-4">Alamat</dt>
                                    <dd class="col-sm-8">: <span name="alamat" id="show_alamat" class="form-group ">

                                    <dt class="col-sm-4">Email</dt>
                                    <dd class="col-sm-8">: <span name="email" id="show_email" class="form-group ">

                                    <dt class="col-sm-4">No Telepon</dt>
                                    <dd class="col-sm-8">: <span name="tlp" id="show_tlp" class="form-group ">
                                       
                                </dl>
                            
                            </div>
                                <div class="modal-footer">
                                    <button id="closeModalmodaladd" type="button" class="btn btn-secondary closeModalmodaladd btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" id="editbtn" onclick="editshow()"data-attid="" class="btn btn-success btn-sm">Edit</button>
                                    <button type="button" id="deletebtn" onclick="deleteshow()" data-attid ="" class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </form>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
            <script type="text/javascript">
                /////////////////////////////////////////////   GetData Table ///////////////////////////////////////////
                var url = "{{ asset('/api/rs/getdata') }}";
                function getdata() { 
                    $('#RSTable').DataTable().ajax.url(url).load();
                 }
                
               
    $(document).ready(function(){
         var table = $('#RSTable').DataTable({
            ajax: url,
            columnDefs: [
                 {
                   'targets': 4,
                   'searchable':false,
                   'orderable':false,
                   'className': 'dt-body-center',
                   'render': function (data, type, full, meta){
                       return '<span class="btn btn-info btn-sm" onclick="showdetail('+full[4]+')">details</span>';
                   }
                }, 
            ],
            searching: true,
        }); 
    });
        $("#buttonadd").on('click', function () { 
            $('#modaladd').modal('show');
            $(".titlemodal").html(' Add Rumah Sakit ');
            $('.icoon').html('<i class="bi bi-plus-circle-fill"></i>');
            $("#nama").val("");
            $("#email").val("");
            $("#alamat").val("");

            $("#tlp").val("");
            $("#id_name").val("");
        });
        $("#formm" ).submit(function(e) {
            var id = $('#id_name').val();
            var url= "{{ asset('/rs/store') }}" ;
            if(id != '')
            var url= "{{ asset('/rs/update') }}/" + id ;
            var form = $('#formm');
            e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    dataType: 'JSON',
                    success: function (response) {
                        data = response.data;
                        if(data == 'success') {
                            Swal.fire({
                                title: 'Selamat!',
                                text: "Data Berhasil Disimpan",
                                icon: 'success'
                            });
                            $('#modaladd').modal('hide');
                            reloaddata();
                        }
                        else {
                            $.each(response.errors, function(key, value){
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: value,
                                    icon: 'error'
                                });
                            });
                        }
                        $('#user_group').hide();
                        $('.copy').html("");
                        $(".after-add-more").html("");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
        });  
    
    $(".closeModalmodaladd").click(function() {
        $("#modaladd").modal('hide');
    });

    
    
    //////////////////////////////////////      Modal SHOW DETAIL       //////////////////////////////////////
    function showdetail(id) {
        $("#modalview").modal('show');
        $("#modaladd").modal('hide');
        $(".titlemodal").html("Data Rumah Sakit");
        $(".icoon").html('<i class="bi bi-card-list"></i>');
        $(".table-option").show();
    
        var url = "{{ asset('/rs/detail') }}/" + id;
        // console.log(url);
            $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                data = response.data;

                // console.log(data);
                if (data) {
                    $("#show_nama").html(data.nama);
                    $("#show_alamat").html(data.alamat);
                    // $("#show_logo").html(data.logo);
                    $("#show_email").html(data.email);
                    $("#show_tlp").html(data.tlp);
                //     $("#show_no_tlp").html(data.no_tlp);

                }
                        $('#modalview').modal('show'); 
            }
        }); 
        $("#id_name").val(id);
        $('.editt').val(id);
        $('#editbtn').attr('data-attid',id);
        $('#deletebtn').attr('data-attid',id);
        
    }
    $(".closeModalmodaladd").click(function() {
        $("#modalview").modal('hide');
    }); 
    function deleteshow(){
        $('#modalview').modal('hide'); 
        idx = $('#deletebtn').attr('data-attid');
                    
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                var valuenotedelete = $("textarea#notedelete").val();
                var url = "{{ asset('/rs/delete') }}/" + idx;
                var form = $('#formm');
            // e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    dataType: 'JSON',
                    success: function (response) 
                    {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted',
                            html:'Your file has been <b>Deleted</b>'
                        });
                        var url = "{{ asset('/api/products/getdata') }}";
                        $('#datastable').DataTable().ajax.url(url).load();
                        $('#undeletevbtn').show();
                        $("#activspan").html('Deleted');
                        $("#activspan").css('color', '#dc3545');
                        reloaddata();
                    },
                    error: function(jqXHR, textStatus, errorThrown) 
                    {
                        alert('something wrong');
                        console.log(textStatus, errorThrown);
                    }
                });
            } else {
                $('#view').modal('show');
            }
        });
    }
                
                //////////////////////////////////////      Modal EDIT SHOW       //////////////////////////////////////
        function editshow() {
            id = $('#editbtn').attr('data-attid');
            $('#modaladd').modal('show');
            $(".table-option").show();
            $("#modalview").modal('hide');
            $(".titlemodal").html(' Edit Rumah Sakit')
            $('.icoon').html('<i class="bi bi-pencil-square"></i>');
            var url = "{{ asset('/rs/edit') }}/" + id;
            console.log(url);
                $.ajax({
                url: url,
                type: "GET",
                success: function(response) {
                    data = response.data;

                    // console.log(data);
                    if (data) {
                        $("#nama").val(data.nama);
                        $("#alamat").val(data.alamat);
                        // $("#logo").val(data.logo);
                        $("#email").val(data.email);
                        $("#tlp").val(data.tlp);

                    }
                    $("#id_name").val(id);

                            $('#modalview').modal('show'); 
                }
            }); 
        }
        function reloaddata() {
            var url = "{{ asset('/api/rs/getdata') }}";
            $('#RSTable').DataTable().ajax.url(url).load();}
        </script>
    @endsection
</x-app-layout>
