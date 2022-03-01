@extends('layouts.admin.admin_layout') @section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-detached content-right">
            <div class="content-body">
                <div class="content-overlay"></div>
                <!-- <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="bug-list-search">
                                    <div class="bug-list-search-content">
                                        <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu font-large-1"></i></div>
                                        <form action="#">
                                            <div class="position-relative">
                                                <input type="search" id="search-contacts" class="form-control" placeholder="Search contacts..." />
                                                <div class="form-control-position">
                                                    <i class="fa fa-search text-size-base text-muted la-rotate-270"></i>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <section class="row all-contacts">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-head">
                                <div class="card-header">
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-12">
                                            <h4 class="card-title">All Campaign</h4>
                                        </div>
                                        <div class="content-header-right col-md-6 col-12">
                                            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                                            
                                                    <div>
                                                      <button type="button"  class="btn btn-success" onclick="window.location='{{ url("create-campaign-view") }}'" >Add Campaign</button>
                                                       
                                                    </div>

                                            
                                            </div>
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
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?>
                                                @foreach ($Campaigns as $item)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body media-middle">
                                                                <a class="media-heading name" href="/campaingn-detail/{{$item->id}}">{{$item->name}}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                        
                                                    <td>
                                                        <a href="/importView/{{$item->id}}" class="primary edit mr-1"><i class="fas fa-eye"></i></a>
                                                        <a href="/campaingn-detail/{{$item->id}}" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href=" /campaingn-delete/{{$item->id}}" onclick="return confirm('Are you sure to delete ?')" class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
                                                    </td>
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
</div>
<!-- END: Content-->
@endsection
