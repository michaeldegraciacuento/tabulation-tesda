@extends('dashboard.base')
@section('content')
@include('criteria._create')
<div class="container-fluid">
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
  
    <li class="breadcrumb-item"><a href="">Qualification</a></li>
    <li class="breadcrumb-item active" aria-current="page">Criteria</li>
  </ol>
</nav>
    <div class="fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex">
                    <h4>
                        <i class="fa fa-align-justify"></i>
                        Criteria for {{ $quali->quali_name }}</h4>
                       @if($sum == 100)
                       <button class="btn btn-primary ml-auto" type="button" data-toggle="modal" data-target="#createModal" ata-toggle="tooltip" data-placement="top" title="Can't create criteria objective total is 100!!"disabled>
                            <i class="cil-plus"></i>
                            Create
                        </button>
                       @else
                       <button class="btn btn-primary ml-auto" type="button" data-toggle="modal" data-target="#createModal" >
                            <i class="cil-plus"></i>
                            Create
                        </button>
                       @endif        		
                    </div>											
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Criteria Name</th>
                                    <th width="25%" style="text-align:center;">Objective</th>
                                    <th width="9%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($crit as $crits)
                                        <tr>
                                            <td>{{ $loop->iteration ?? '' }}</td>
                                           
                                            <td>{{ $crits->crit_name ?? '' }} </td>
                                            <td style="text-align:center;" id="total">{{ $crits->crit_total?? '' }}%</td>
                                            <td style="width: 9%;">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="cil-cog"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button type="button" class="dropdown-item btn btn-edit" data-url="">
                                                            <i class="cil-pencil"></i>
                                                            &nbsp;Update
                                                        </button>
                                                        <a type="button" href="{{ URL::to('/viewCrits/'.$crits->crit_id.'/'.$crits->id)}}"class="dropdown-item btn" data-url="">
                                                            <i class="cil-magnifying-glass"></i>
                                                            &nbsp;View Guidlines
                                                        </a>
                                                        <form action="" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button type="button" class="dropdown-item btn btn-danger float-right btn-delete">
                                                                <i class="cil-trash"></i>
                                                                &nbsp;Delete
                                                            </button>
                                                        </form>	   
                                                    </div>
                                                </div>    
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                           
                        </table>
                        <div class="text-right">TOTAL: <strong>{{ $sum }}%</strong> </div>
                    </div>
                </div>
            </div>
        </div>

<div class="append-criteria"></div>
@endsection
@section('script')
   
@endsection

