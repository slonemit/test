@section('title')
Theta - Order List
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Contact</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">

        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Tout</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelect">

                                          <option>Tout</option>
                                          @foreach( App\Models\grille::all() as $grille)
                                          <option>{{ $grille->activite }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Forme</th>
                                    <th>Raison_social</th>
                                    <th>Objet_social</th>
                                    <th>Adresse</th>


                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( App\Models\structure::all() as $structure)
                                <tr>
                                    <th scope="row">#{{ $structure->id }}</th>
                                    <td>{{ $structure->form_jurid }}</td>
                                    <td>{{ $structure->raison_social }}</td>
                                    <td>{{ $structure->objet_social }}</td>
                                    <td>{{ $structure->adresse }}</td>

                                    <td><span class="badge badge-primary-inverse">Processing</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{ route("users.show",$structure->personne()->first()->id) }}"class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
