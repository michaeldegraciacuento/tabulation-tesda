@extends('dashboard.base')

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TTI Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Content
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card">
            <div class="card-header" style="background-image: url('assets/img/vgd.png');width: 100%;height: 90px; margin-left: auto;margin-right: auto; display: block;">
                <div class="card mt-3" style="height:30px; opacity: 0.9;">
                    <strong style="font-size:15px;" class="mt-1 text-center"><strong style="color:ffffff;">VISUAL GRAPHICS DESIGN</strong></strong> 
                </div>
            </div>
            <div class="row justify-content-end pt-1" >
                <div class="col-11">
                    <h6 class="float-right" style="font-size:12px;">Status: &nbsp;<span class="badge badge-danger float-right px-0" style="width:40px;">Ongoing</span></h6>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="card-body pt-0" style="height: 40px !important;">
                <div class="d-flex justify-content-around">
                    Contestant:<strong>11</strong>Judge:<strong>14</strong>Expert:<strong>14</strong>
                </div>
            </div>
    </div>
    <div class="card">
        <div class="accordion" id="accordion" role="tablist">
        <div class="card mb-0">
            <div class="card-header" id="headingOne" role="tab">
            <h5 class="mb-0">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('assets/img/rtciligan.png') }}" width="45" height="40" alt="logo">
                    </div>
                    <div class="col-8">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Regional Training Center- Iligan
                        </a>
                    </div>
                    <div class="col-2 p-0 align-self-end">
                        <div class="row mb-2"><span class="badge badge-success float-right " style="font-size:10px;">Complete</span></div>
                        <div class="row"><h6 class="mt-auto bd-highlight float-right" style="font-size:10px;">RTC-Iligan</h6></div>
                    </div>
                </div>
            </h5>
            </div>
            <div class="collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"><img src="{{ asset('assets/img/sample.jpg') }}" width="45" height="40" alt="logo"></div>
                        <div class="col-8 ml-3">
                            <div class="row ml-0">
                               Name: <strong> Michael G. Cuento</strong>
                            </div>
                            <div class="row">
                                <div class="col-5"> Age: <strong> 24</strong></div>
                                <div class="col-7"> Gender: <strong> Male</strong></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-2"><img src="{{ asset('assets/img/sample.jpg') }}" width="45" height="40" alt="logo"></div>
                        <div class="col-8 ml-3">
                            <div class="row ml-0">
                               Name: <strong> Michael G. Cuento</strong>
                            </div>
                            <div class="row">
                                <div class="col-5"> Age: <strong> 24</strong></div>
                                <div class="col-7"> Gender: <strong> Male</strong></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-block btn-info btn-sm float-right mb-2" type="button" data-toggle="modal" data-target="#exampleModal" style="width: 80px !important;">View Score</button>
                </div>
            </div>
        </div>
        <div class="card mb-0">
       
            <div class="card-header" id="headingTwo" role="tab">
            <h5 class="mb-0">
            <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('assets/img/lnnais.jfif') }}" width="45" height="40" alt="logo">
                    </div>
                    <div class="col-8">
                        <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Lanao Norte National Agro-Industrial School
                        </a>
                    </div>
                    <div class="col-2 p-0 align-self-end">
                        <div class="row mb-2"><span class="badge badge-danger float-right " style="font-size:10px;">Ongoing</span></div>
                        <div class="row"><h6 class="mt-auto bd-highlight float-right" style="font-size:10px;">LNNAIS</h6></div>
                    </div>
                </div>
            </h5>
            </div>
            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <div class="row">
                        <div class="col-2"><img src="{{ asset('assets/img/sample.jpg') }}" width="45" height="40" alt="logo"></div>
                        <div class="col-8 ml-3">
                            <div class="row ml-0">
                               Name: <strong> Michael G. Cuento</strong>
                            </div>
                            <div class="row">
                                <div class="col-5"> Age: <strong> 24</strong></div>
                                <div class="col-7"> Gender: <strong> Male</strong></div>
                            </div>
                            
                           
                        </div>
                       
                    </div>
                    <hr>
                 <button class="btn btn-block btn-info btn-sm float-right mb-2" type="button" style="width: 60px !important;">Score</button>
            </div>
        </div>       
    </div>
          
</div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
