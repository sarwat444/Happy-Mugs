@extends('layouts.admin')

@section('css')


<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{asset('assets/admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/admin/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')




 <!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">


                              @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif

                              @include('admin.includes.alerts.success')
                              @include('admin.includes.alerts.errors')
                  <select class="selectpicker form-control" id="type"  data-size="5" >

                          <option value="mugs">Mugs</option>
                          <option value="hautfarbe">Hautfarbe</option>
                          <option value="kleidung_unter_teil">Kleidung UnterTeil</option>
                          <option value="kleidung_boer_teil">Kleidung OberTeil</option>
                          <option value="hinterground">HinterGround</option>
                          <option value="hairstyle">HairStyle</option>

                   </select>
                    <div class="table-responsive mb-4 mt-4 images_view">
                        <table id="images" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Motive</th>
                                    <th>Section</th>
                                    <th>Gender</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                        @if(!empty($datas))

                             <?php foreach ($datas as $key => $data): ?>


                                      <tr>
                                          <td><img src="{{asset('assets/images/' . $data->image ) }}" style="width:100px;height:100px;"></td>
                                          <td>@if(!empty( $data->motive->motive_name )) {{$data->motive->motive_name}}  @else Motive Deleted  @endif </td>
                                            <td>@if(!empty( $data->section->section_name )) {{$data->section->section_name }}  @else Section Deleted  @endif </td>
                                          <td>  @if($data->gender == "1") Mann @elseif ($data->gender == "2")   Fabru  @else No Thing  @endif </td>

                                    <td ><button class="btn btn-primary btn-move-image"  data-id=" {{ $data -> id }} " >   Move  </button>
                                          <button class="btn btn-success btn-edit-image"  data-id=" {{ $data -> id }} " >   Edit  </button>
                                           <a href="javascript:;" class="btn btn-danger" data-id="{{ $data->id }}" style="color:#fff;">delete</a>   </td>

                                      </tr>

                                  <?php endforeach; ?>
                          @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Photo</th>
                                    <th>Type</th>
                                    <th>Gender</th>
                                    <th class="invisible"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        </div>

<!--  END CONTENT AREA  -->



<!-- Modal -->
<div class="modal fade" id="MoveImageModal" tabindex="-1" role="dialog" aria-labelledby="MoveImageModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content move_image_modal">

     </div>
 </div>
</div>


<!-- Modal -->
<div class="modal fade" id="EditImageModal" tabindex="-1" role="dialog" aria-labelledby="EditImageModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content edit_image_modal">

     </div>
 </div>
</div>





@endsection


@section('script')




<script>

    $(document).ready(function() {

       $('#type').change(function(){


                 var type = $(this).val();

         //alert(brand_id);

                 $.ajax({


                     type : 'POST',
                     url : "{{ route('admin.images2') }}",
                     data : { type : type , _token : '{{ csrf_token() }}' },
                     success : function (data) {


                              $('.images_view').empty().html(data.options);



                     }
                 });
       });




    });


    </script>



<script>
$(document).ready(function () {

            $(document).on('click', '.btn-move-image', function (event) {


                      //  alert('hello');
                         event.preventDefault();
                         var id = $(this).data('id');

                           $.ajax({

                               type: "post",
                               url: "{{route('admin.images.move')}}", // need to create this post route
                               data: {id : id , _token : '{{ csrf_token() }}'},
                               cache: false,
                               success: function (data) {


                                    $('#MoveImageModal').modal('show');
                                     $(".move_image_modal").html(data);
                               },
                               error: function (jqXHR, status, err) {


                               },

                          });




                     });


                     $(document).on('click', '.btn-edit-image', function (event) {


                               //  alert('hello');
                                  event.preventDefault();
                                  var id = $(this).data('id');

                                    $.ajax({

                                        type: "post",
                                        url: "{{route('admin.images.edit')}}", // need to create this post route
                                        data: {id : id , _token : '{{ csrf_token() }}'},
                                        cache: false,
                                        success: function (data) {


                                             $('#EditImageModal').modal('show');
                                              $(".edit_image_modal").html(data);
                                        },
                                        error: function (jqXHR, status, err) {


                                        },

                                   });




                              });





                      // Delete Image


                     $(document).on('click','.btn-danger' ,  function (e) {
                             if (!confirm("Are You Sure You Will Delete This Record")) {
                                 e.preventDefault();
                                 return false;
                             }

                              var selector = $(this);
                             var id = $(this).data('id');



                             $.ajax({
                                 type: 'POST',
                                 url: '{{ route('admin.images.delete') }}',
                                 data: {id: id, _token: '{{ csrf_token() }}'},
                                 success: function (data) {

                                             selector.closest('tr').hide('slow');
                                             toastr.success(data.msg);


                                 }
                             });
                         });
     });
</script>




@stop
