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
                     <li class="breadcrumb-item"><a href="{{ route('admin.read.campaigns')}}">Campaign</a>
                     </li>
                     &nbsp;
                     <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Contacts</a>
                     </li>
                     <li class="breadcrumb-item"><a href="{{ url()->current() }}?year={{request('year')}}">List Contacts</a>
                     </li>
                  </ol>
               </div>
            </div>
            <div class="d-none">
               <h3 class="content-header-title mb-0">Upload CSV</h3>
               
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
   <h4 class="card-title">{{$campaign_name->name}} - All Contacts</h4>
   </div>
   </div>
   </div>
   </div>
   <div class="card-content">
   <div class="card-body">
   <div class="table-responsive">
   <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
   <thead>
   <tr>
   <th>S.NO</th>
   <th>Name</th>
   <th>Email</th>
   <th>Is Email Sent</th>
   <th>Created At</th>
   <th>Domain</th>
   <th>Organization</th>
   <th>Address</th>
   <th>Telephone</th>
   </tr>
   </thead>
   <tbody>
   @foreach($contacts as $key => $item)
   <tr>
   <td>{{++$key}}</td>
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