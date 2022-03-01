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
                     <li class="breadcrumb-item"><a href="{{url('/getCampaingn')}}">Campaign</a>
                     </li>
                     &nbsp;
                     <li class="breadcrumb-item"><a href="{{url('/home')}}">Contacts</a>
                     </li>
                  </ol>
               </div>
            </div>
            <br>
            <div>
               <h3 class="content-header-title mb-0">Upload CSV</h3>
            </div>
         </div>
      </div>
      <div class="content-body">
         <section id="page-account-settings">
            <div class="row">
               <!-- <div class="col-md-3 mb-2 mb-md-0">
                  <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                     <li class="nav-item">
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" onclick='edit({{Request::segment(2)}})' aria-expanded="false">
                        <i class="feather icon-lock"></i> Edit  Campaingn
                        </a>
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" aria-expanded="false">
                        <i class="feather icon-lock"></i> import  CSV
                        </a>
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" onclick="window.location='{{ url("create-campaign-view")}}'" aria-expanded="false">
                        <i class="feather icon-lock"></i> Add A New Campaign
                        </a>
                     </li>
                  </ul>
                  </div> -->
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <div class="tab-content">
                              <div class="tab-pane fade active show " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                 <form method="POST"  action="{{url('import-contacts')}}" enctype="multipart/form-data">
                                    @csrf
                                    @if(session('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                    @endif
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group">
                                             <div class="controls">
                                                <label for="account-old-password">Upload Contacts</label>
                                                <div class="row">
                                                   <div class="col-md-8">
                                                      <input type="file" name="uploaded_file" class="form-control">
                                                      <span class="text-danger">
                                                      @if($errors->any())
                                                       {{ implode('', $errors->all(':message')) }}
                                                     @endif
                                                      </span>
                                                   </div>
                                                   <input type="hidden" id="custId" name="campaign_id" value="{{Request::segment(2)}}">
                                                   <div class="col-md-4">
                                                      <button type="submit" class="btn btn-success">Upload CSV </button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           </form>

                           <table>
                             <tr>

                               <th>Total Contacts</th>
                               <th></th>
                               <th>Total Email Sent</th>
                               <th></th>
                               <th>Total Email Pending</th>
                               <th></th>
                              <th> </th>

                             </tr>
                             <tr>
            
                               <td>{{$totalContactsCount}}</td>
                               <td></td>
                               <td> {{$totalEmailSend}}</td>
                                 <td></td>
                               <td>{{$totalEmailPending}}</td>
                            <td></td>
                             @php
                              $id=Request::segment(2); 
                              @endphp
                             
                          <td> <a href="{{ url('resent-email/'.$id)}}" class="btn btn-xs btn-info pull-right">Resent Email</a></td>
                             </tr>
                             
                           </table>
                           <div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
   <div class="col-12">
   <div class="card">
   <div class="card-head">
   <div class="card-header">
   <div class="content-header row">
   <div class="content-header-left col-md-6 col-12">
   <h4 class="card-title">All Contacts</h4>
   </div>
   </div>
   </div>
   </div>
   <div class="card-content">
   <div class="card-body">
   <div class="table-responsive">
   <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Minimum date:</td>
            <td><input type="text" id="min" name="min"></td>
        </tr>
        <tr>
            <td>Maximum date:</td>
            <td><input type="text" id="max" name="max"></td>
        </tr>
    </tbody></table>
   <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
   <thead>
   <tr>
   <th>S.NO</th>
   <th>Name</th>
   <th>Email</th>
   <th>Is Email Sent</th>
   <th>Created At</th>
   <th>Domain</th>
   <th>organization</th>
   <th>Address</th>
   <th>Telephone</th>
   </tr>
   </thead>
   <tbody>
   <?php $i=1; ?>
   @foreach($contacts as $item)
   <tr>
   <td>{{$i}}</td>
   <td>
   <div class="media">
   <div class="media-body media-middle">
   <a class="media-heading name">{{$item->name}}</a>
   </div>
   </div>
   </td>
   <td class="text-center">
   <a class="email" href="mailto:email@example.com">{{$item->email}}</a>
   </td>
   <td>{{$item->is_email_sent}}</td>

   <td>{!! date('Y/m/d', strtotime($item->created_at)) !!}</td>
    <td>{{$item->domain}}</td>
    <td>{{$item->organization}}</td>
    <td>{{$item->street}} ,{{$item->city}} ,{{$item->state}} ,{{$item->postal_code}} ,{{$item->country}}</td>
    <td>{{$item->telephone}}</td>
   </tr>
   <?php $i++; ?>
   @endforeach
   </tbody>
   </table>
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

