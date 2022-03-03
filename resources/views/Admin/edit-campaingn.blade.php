@extends('layouts.admin.admin_layout')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Edit Campaingn</h3>
         </div>
      </div>
      <div class="content-body">
         <section id="page-account-settings">
            <div class="row">
               <div class="col-md-9">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <div class="tab-content">
                              <div class="tab-pane fade active show " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                 <form method="POST" enctype="multipart/form-data" action="{{ route('admin.update.campaign') }}">
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
                                                   name="name"id="account-old-password" value="{{$data->name}}" required placeholder="Campaingn Name" maxlength="45" data-validation-required-message="This field is required">
                                                    <input type="hidden" id="custId" name="campaign_id" value="{{ request('id') }}">
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