@foreach($getCo as $as)
    <div id="contestant-card">
        <div class="card-body">
            <div class="row">
                <div class="col-2"><img src="{{ asset('assets/img/sample.jpg') }}" width="45" height="40" alt="logo"></div>
                <div class="col-8 ml-3">
                    <div class="row ml-0">
                        Name: <strong>{{$as->con_name}}</strong>
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
@endforeach