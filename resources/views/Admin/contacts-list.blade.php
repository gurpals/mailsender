@extends('layouts.admin.admin_layout')
@section('content')
<style>
   .pagination{
      justify-content:center;
   }
</style>
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
   </div>
   <div class="col-12">
      <div class="card">
         <div class="card-head">
            <div class="card-header">
               <div class="content-header row">
                  <div class="content-header-left col-md-6 col-12">
                     <h4 class="card-title">{{$campaign_name->name}} - All Contacts</h4>
                  </div>
                  <div class="content-header-right col-md-6 col-12">
                     <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
         
                        <div class="btn-group mb-1" role="group">
                           <a href="{{ route('admin.schedule.emails', ['id' => request('campaign'), 'year' => request('year')]) }}"
                              class="btn btn-xs btn-info pull-right">Send All Email's in Queue</a>&nbsp;
                        </div>
         
                        <div class="btn-group mb-1" role="group">
                           <a href="{{ route('admin.schedule.emails', ['id' => request('campaign'), 'year' => request('year')])}}"
                              class="btn btn-xs btn-warning pull-right">Resend Pending Email's</a>
                        </div><br>
                     </div>
                     <form action="{{url()->current()}}" class=" col-md-10 float-right p-0">
                        <div class="input-group">
                           <input type="search"  class="form-control" name="search" value="{{request('search')}}" placeholder="Search name,email,status">
                           <input type="hidden"  class="form-control" name="campaign" value="{{request('campaign')}}">
                           <input type="hidden"  class="form-control" name="year" value="{{request('year')}}">
                           <div class="input-group-append">
                             <button class="btn btn-secondary" type="submit">
                               <i class="fa fa-search"></i>
                             </button>
                           </div>
                         </div>                    
                     </form> 
                  </div>
               </div>
            </div>
         </div>
         <div class="card-content">
            <div class="card-body">
               <div class="table-responsive">
                  <table id=""
                     class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
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
                           <td>{{$item->street}} ,{{$item->city}} ,{{$item->state}} ,{{$item->postal_code}}
                              ,{{$item->country}}</td>
                           <td>{{$item->telephone}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
            {{$contacts->links()}}
         </div>
      </div>
   </div>
</div>
@endsection