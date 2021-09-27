@extends('layouts.admin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
  <div id="content" class="main-content">
      <div class="container">
          <div class="container">

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



                      <div class="row layout-top-spacing">

                          <div id="basic" class="col-lg-12 layout-spacing">
                              <div class="statbox widget box box-shadow">
                                  <div class="widget-header">
                                      <div class="row">
                                          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                              <h4>Select Type And Upload New Motive </h4>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="widget-content widget-content-area">


                                    <form id="create-motive" action="{{route('admin.motives.store')}}" method="POST" enctype="multipart/form-data">

                                         @csrf

                                       <div class="form-group">



                                         <label>Motive Name</label>
                                          <input type="text" name="motive_name" class="form-control">



                                       </div>


                                       <div class="form-group">

                              <input type="hidden" name="characters" id="characters" >

                                         <div  class="outer-repeater">
                <div data-repeater-list="outer-group" class="outer">
                    <div data-repeater-item class="outer">



                        <div class="inner-repeater mb-12">
                            <div data-repeater-list="inner-group" class="inner form-group">
                                <div data-repeater-item class="inner mb-3 row">
                                    <div class="col-md-10 col-4">
                                        <input type="text" class="inner form-control  inner-in" name="characters" placeholder="Add Character Name  "/>
                                    </div>

                                    <div class="col-md-2 col-4">
                                        <input data-repeater-delete type="button" class="btn btn-primary btn-block inner" value="Delete"/>
                                    </div>

                                </div>
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
                                                       <input type="radio" class="new-control-input" name="animal[]" value="1" >
                                                       <span class="new-control-indicator"></span>Yes
                                                     </label>
                                               </div>

                                               <div class="n-chk">
                                                       <label class="new-control new-radio radio-primary">
                                                         <input type="radio" class="new-control-input" name="animal[]" value="0" checked>
                                                         <span class="new-control-indicator"></span>No
                                                       </label>
                                                 </div>


                                       </div>





                                        <div class="form-group">

                                        <label>Upload Motive Image</label>
                                         <input type="file" name="motive_image" >
                                        </div>

                                            <button type="submit" class="btn btn-primary"> UPload</button>

                                       </form>

                                      <div class="code-section-container show-code">


                                          <div class="code-section text-left">

                                          </div>
                                      </div>


                                  </div>
                              </div>
                          </div>



                      </div>

                </div>


                </div>


                    </div>


@endsection
