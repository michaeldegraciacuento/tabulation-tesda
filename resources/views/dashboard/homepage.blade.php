@extends('dashboard.base')

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
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
                    <strong style="font-size:15px;" class="mt-1 text-center"><strong style="color:ffffff;">{{$getJudge->quali_name}}</strong></strong> 
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
            <div class="card mb-0">
               @foreach($getCon as $con)
                <div class="card-header contestant"  data-tti=".append-contestant-{{ $con->tti_id }}" data-url="{{ URL::to('contestantShow/'.$con->tti_id.'/'.$con->quali_id) }}">
                    <h5 class="mb-0">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{asset('public/'.$con->tti_image) }}" width="45" height="40" alt="logo">
                            </div>
                            <div class="col-8">
                                <a>
                               {{$con->tti_name}}
                                </a>
                            </div>
                            <div class="col-2 p-0 align-self-end">
                                <div class="row mb-2"><span class="badge badge-success float-right " style="font-size:10px;">Complete</span></div>
                                <div class="row"><h6 class="mt-auto bd-highlight float-right" style="font-size:10px;">{{$con->tti_abrv}}</h6></div>
                            </div>
                        </div>
                    </h5>
                </div>
                <!-- append start -->
                <div class="append-contestant-{{ $con->tti_id }}"></div>
                <!-- append end -->
               @endforeach
                
            </div>  
    </div>
          
</div>




@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
@section('script')
<script>
    $(".contestant").click(function(){
 
        var tti = $(this).data('tti');
        var div = $(tti);
      
        if($('*').hasClass('activeCon')){
            div.removeClass('activeCon');
            div.empty();
        }else{
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    div.addClass("activeCon");
                    var cc = $('#contestant-card').data('tti');
                    var cc_show = $(cc);
                    cc_show.show();
                }
            });
        }
      
    });

    $(".add_contestant_row").click(function(){
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
});
</script>
@endsection
