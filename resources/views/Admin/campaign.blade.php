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
                     <!-- <li class="breadcrumb-item"><a href="/">Home</a>
                     </li> -->
                     <li class="breadcrumb-item"><a href="{{url('home')}}">Contacts</a>
                     </li>
                     <li class="breadcrumb-item active"><a href="{{url('getCampaingn')}}">Campaingns</a>
                     </li>
                  </ol>
               </div>
            </div>
            <h3 class="content-header-title mb-0">Create Campaingn</h3>
         </div>
      </div>
      <div class="content-body">
         <section id="page-account-settings">
            <div class="row">
               <div class="col-md-3 mb-2 mb-md-0">
                  <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                     <li class="nav-item">
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                        <i class="feather icon-lock"></i> Create  Campaingn
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
                                 <form method="POST" action="{{ url('createCampaingn') }}">
                                    @csrf
                                    @if(session('message'))
                                    <div class="alert alert-success">{{session('message')}}</div>
                                    @endif
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group">
                                             <div class="controls">
                                                <label for="account-old-password">Campaingn</label>
                                                <input type="text" class="form-control"
                                                   name="name"id="account-old-password" required placeholder="Campaingn Name" data-validation-required-message="This field is required">
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