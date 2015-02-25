@extends('layouts.admin-default')

@section('content')

        <div class="row">
            <div class="col-sm-12">

                @include('layouts.partials.admin-breadcrumbs', array('table'=> $table ))

                <section class="panel">
                    <header class="panel-heading">
                       {{ $table }}
                    </header>

                    <div class="panel-body">
                    <div class="adv-table">

                    <div class="clearfix">
                        <div class="btn-group">
                            <a href="#userAddModal" data-toggle="modal" class="btn btn-primary add-btn" >
                                New
                            </a>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>



                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0</td>
                        <td>
                            {{--<span class="label label-primary"> Activated </span>--}}
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td>
                            <a href='#' class='btn btn-default tooltips'
                             data-placement="top" data-toggle="tooltip"
                             data-original-title="Resend Email">
                                <i class='fa fa-paper-plane-o'></i>
                            </a>

                            <a href='#' class='btn btn-success tooltips btnUpdate'
                             data-placement="top" data-original-title="Resend Email"
                             data-toggle="modal tooltip" data-target="#userUpdateModal"
                             data-backdrop="static">
                                <i class='fa fa-pencil'></i>
                            </a>

                            <a href='#' class='btn btn-danger tooltips btnDelete'
                             data-placement="top" data-toggle="tooltip"
                             data-original-title="Delete">
                                <i class='fa fa-trash'></i>
                            </a>
                        </td>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>

        @include('layouts.admin.users.add-modal')

        @stop
