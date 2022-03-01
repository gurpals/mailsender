@extends('layouts.admin.admin_layout')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="users-view">
                    <div class="row">
                        <div class="col-12 col-sm-7">
                            <div class="media mb-2">
                                <a class="mr-1" href="#">
                                    <img src="{{url('admin/css/images/User-Profile-PNG-Image.png')}}" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                </a>
                                <div class="media-body pt-25">
                                    <h4 class="media-heading">
                                        <span class="users-view-name">Name  :</span> {{$data->fullName}}</h4>
                                        <h4><span>Email &nbsp;:</span>
                                            <span class="users-view-id">{{$data->email}}</span></h4>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>Created:</td>
                                                    <td>{{$data->created_at}}</td>
                                                </tr>

                                                <tr>
                                                    <td>Subject:</td>
                                                    <td>{{$data->subject}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Reason For Contact:</td>
                                                    <td>{{$data->reasonOfContact}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Area Of Interest:</td>
                                                    <td>{{$data->areaOfInterest}}</td>
                                                </tr>

                                                <tr>
                                                    <td>Message:</td>
                                                    <td>{{$data->message}}</td>
                                                </tr>
                                                


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
    <!-- END: Content-->
    @endsection
