@extends('layouts.admin.admin_layout')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
               <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a>
                     </li>
                     <li class="breadcrumb-item"><a href="#">Contacts</a>
                     </li>
                     <li class="breadcrumb-item active">Campaingn
                     </li>
                  </ol>
               </div>
            </div>
            <h3 class="content-header-title mb-0">Edit Campaingn</h3>
         </div>
      </div>
      <div class="content-body">
         <section id="page-account-settings">
            <div class="row">
               <div class="col-md-3 mb-2 mb-md-0">
                  <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                     <li class="nav-item">
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#" aria-expanded="false">
                        <i class="fa fa-pencil"></i> Edit  Campaingn
                        </a>
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" onclick='imp({{Request::segment(2)}})' aria-expanded="false">
                        <i class="fa fa-file"></i> import  CSV
                        </a>
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" onclick="window.location='{{ url("create-campaign-view")}}'" aria-expanded="false">
                        <i class="fa fa-plus"></i> Add A New Campaign
                        </a>
                     </li>
                  </ul>
               </div>

               <div class="col-md-9">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <div class="tab-content">
                              <div class="tab-pane fade active show " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                 <form method="POST" enctype="multipart/form-data" action="{{ url('update-Campaingn') }}">
                                    @csrf
                                    @if(session('message'))
                                    <div class="alert alert-success">{{session('message')}}</div>
                                    @endif
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group">
                                             <div class="controls">
                                                <label for="account-old-password">Campaign</label>
                                                <input type="text" class="form-control"
                                                   name="name"id="account-old-password" value="{{$data->name}}" required placeholder="Campaingn Name" data-validation-required-message="This field is required">
                                                    <input type="hidden" id="custId" name="campaign_id" value="{{Request::segment(2)}}">

                                                <span class="text-danger">
                                                @error('name')
                                                {{$message}}
                                                @enderror
                                                @if(session('error'))
                                                {{session('error')}}
                                                @endif
                                                </span>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                          </div>
                                       <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                          changes</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
@endsection
<script type="text/javascript">
function imp(id)
   {
      
       window.location='/importView/'+id;
   }
   
</script>