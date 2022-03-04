@extends('layouts.admin.admin_layout')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-md-6 col-12 mb-2">
            <br>
            <div>
               <h3 class="content-header-title mb-0">Upload CSV</h3>
            </div>
         </div>
         
      </div>
      <div class="content-body">
         <section id="page-account-settings">
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <div class="tab-content">
                              <div class="tab-pane fade active show " id="account-vertical-password" role="tabpanel"
                                 aria-labelledby="account-pill-password" aria-expanded="false">
                                 <form method="POST" action="{{ route('admin.import.contacts') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if(session('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                    @endif
                                    <div class="row">
                                       <div class="col-6">
                                          <div class="form-group">
                                             <div class="controls">
                                                <table class="text-center">
                                                   <tr>
                                                      <th>Total Uploads By Date</th>
                                                      <th>Total Email Sent</th>
                                                      <th>Total Email Pending</th>
                                                   </tr>
                                                   <tr>
                                                      <td>{{count($contacts)}}</td>
                                                      <td> {{$totalSentEmails}}</td>
                                                      <td>{{$totalPendingEmails}}</td>
                                                   </tr>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-6">
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
                                                   <input type="hidden" id="custId" name="campaign_id"
                                                      value="{{Request::segment(2)}}">
                                                   <div class="col-md-4">
                                                      <button type="submit" class="btn btn-success">Upload CSV </button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           
                        <div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <div class="col-12">
      <div class="card">
         <div class="card-head">
            <div class="card-header">
               <div class="content-header row">
                  <div class="content-header-left col-md-6 col-12">
                     <h4 class="card-title">{{$campaign_name->name}} - All Contacts</h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-content">
            <div class="card-body">
               <div class="row">
                  <div class="col-lg-12">
                     <p class="d-none">{{$i=0}}<p>
                     @forelse($contacts as $key => $contact)
                     <div class="col-md-3 float-left">
                        <h1 class="display-1"><a
                              href="{{ route('admin.contact.detail', ['year' => $contact->format('Y-m-d'),'campaign' => $campaign_name->id]) }}"><i
                                 class="fa fa-folder"></i></h1><span>{{$contact->format('d M, Y')}}</span><br>
                        <small>Total Sent: {{$unityArray['sent'.$i]}}</small><br>
                        <small>Total Pending: {{$unityArray['pending'.$i++]}}</small>
                     </div>
                     @empty
                     <p>No Record Found.</p>
                     @endforelse
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@section('script')
@if(session('qerror'))
<script>
   alert('{{ session('
      qerror ') }}');
</script>
@endif
@endsection
@endsection