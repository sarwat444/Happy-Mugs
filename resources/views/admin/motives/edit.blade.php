<form id="edit-motive" method="post" action="{{route('admin.motives.update',$motive->id)}}"  enctype="multipart/form-data">
                         @csrf

      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Move Image </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg> ... </svg>
          </button>
      </div>
      <div class="modal_body">

           <div class="form-group">

                <label>Motive Name</label>
                <input type="text" name="motive_name" class="form-control" value="{{$motive->motive_name}}">

            </div>


            <div class="form-group">

               <input type="hidden" name="characters" id="characters" >


               <div class="outer-repeater">
                     <div data-repeater-list="outer-group" class="outer">
                         <div data-repeater-item class="outer">
                             <div class="inner-repeater mb-12">

                                 <div data-repeater-list="inner-group" class="inner form-group">
                                     @foreach ($motive->characters as $character )
                                     <div data-repeater-item class="inner mb-3 row">
                                         <div class="col-md-7 col-4">
                                             <input type="text" class="inner form-control inner-in"  name="characters" value="{{$character->character_name}}" placeholder="Add New Character"/>
                                         </div>

                                         <div class="col-md-5 col-4">
                                             <input data-repeater-delete type="button" class="btn btn-primary btn-block inner" value="Delete"/>
                                         </div>

                                     </div>
                                     @endforeach
                                 </div>

                                 <input data-repeater-create type="button" class="btn btn-success inner" value=" Add New Character "/>
                             </div>
                         </div>
                     </div>
                 </div>



            </div>


            <div class="form-group">


              <label> Animal </label>


                  <div class="n-chk">
                          <label class="new-control new-radio radio-success">
                            <input type="radio" class="new-control-input" name="animal[]" value="1" @if($motive->animal == 1 ) checked @endif>
                            <span class="new-control-indicator"></span>Yes
                          </label>
                    </div>

                    <div class="n-chk">
                            <label class="new-control new-radio radio-primary">
                              <input type="radio" class="new-control-input" name="animal[]" value="0" @if($motive->animal == 0 )checked @endif>
                              <span class="new-control-indicator"></span>No
                            </label>
                      </div>


            </div>


            <div class="form-group">

            <label>Upload Motive Image</label>
             <input type="file" name="motive_image" >
            </div>

      </div>
      <div class="modal-footer">
          <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
          <button type="submit" class="btn btn-primary">Update</button>
      </div>

      </form>

      <script src="{{asset('assets/js/jquery-repeater.min.js')}}"></script>
      <script src="{{asset('assets/js/form-repeater.int.js')}}"></script>
      <script>
      $(function(){
          $("#edit-motive").on('submit', function(e) {
              let characters = [];
              // var fd = new FormData($("#create-form"))
              $(".inner-in").each(function(ind, elm) {
                  // fd.append('services[]',elm.value);
                  characters.push(elm.value)
              });
              $("#characters").val(JSON.stringify(characters));

              // return false;
          })
      })
    </script>
