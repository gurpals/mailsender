@extends('layouts.admin.admin_layout') @section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-detached content-right">
            <div class="content-body">
                <div class="content-overlay"></div>
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
                                            <h4 class="card-title">All Campaigns</h4>
                                        </div>
                                        <div class="content-header-right col-md-6 col-12">
                                            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                                            
                                                    <div>
                                                      <button type="button"  class="btn btn-success" onclick="window.location='{{ route("admin.create.campaign") }}'" >Add Campaign</button>
                                                       
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

                                                @forelse ($Campaigns as $key => $item)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body media-middle">
                                                                <a class="media-heading name" href="{{ route('admin.detail.campaign', ['id' => $item->id]) }}">{{$item->name}}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                        
                                                    <td>
                                                        <a href="{{ route('admin.detail.campaign', ['id' => $item->id]) }}" class="primary edit mr-1"><i class="fas fa-eye"></i></a>
                                                        <a href="{{ route('admin.edit.campaign', ['id' => $item->id]) }}" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ route('admin.delete.campaign', ['id' => $item->id]) }}" onclick="return confirm('Are you sure to delete ?')" class="danger mr-1"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                @empty
                                                    <tr><td colspan="3">No Record Found.</td></tr>
                                                @endforelse
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
@endsection
