@extends('layouts.admin.admin_layout') @section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-detached content-right">
            <div class="content-body">
                <div class="content-overlay"></div>
                <section class="row">
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
                </section>
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
                                            <h4 class="card-title">All Contacts</h4>
                                        </div>
                                        <div class="content-header-right col-md-6 col-12">
                                            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                                                <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                      
                                                    <div class="col-md-6">
                                                        <input type="file" name="uploaded_file" class="form-control">
                                                    </div>
                                       
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-success">Upload CSV </button>
                                                    </div>
                                       
                                                </div>
                                            </form>
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
                                                    <th>Email</th>
                                                    <!-- <th>Subject</th> -->
                                                    <th>Reason For Contact</th>
                                                    <th>Area Of Interest</th>
                                                    <!-- <th>Message</th> -->
                                                    <th>Form</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?>
                                                @foreach ($contacts as $item)

                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body media-middle">
                                                                <a class="media-heading name" href="/contacts-detail/{{$item->id}}">{{$item->fullName}}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="email" href="mailto:email@example.com">{{$item->email}}</a>
                                                    </td>
                                                    <!--  <td class="text-center">
                        {{$item->subject}}
                    </td> -->
                                                    <td>{{$item->reasonOfContact}}</td>
                                                    <td>{{$item->areaOfInterest}}</td>
                                                    <!-- <td> {!!Str::limit($item->message,100) !!}</td> -->
                                                    <td>{{$item->form}}</td>
                                                   
                                                    <td>
                                                        <a href="/contacts-detail/{{$item->id}}" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="/contacts-detail/{{$item->id}}" class="primary edit mr-1"><i class="fas fa-eye"></i></a>
                                                        <a href=" /contacts-delete/{{$item->id}}" onclick="return confirm('Are you sure to delete ?')" class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
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
