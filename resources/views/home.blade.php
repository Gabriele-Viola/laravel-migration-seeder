@extends('layout.main')

@section('content')

<div class="container-md">
<div class="card custom-card">
    <div class="card-body custom-c-body">
        <ul class="list-unstyled row gap-2 justify-content-center custom-title">
    
            <li class="col-2 text-uppercase fw-semibold fs-6">
                train
            </li>
            <li class="col-1 text-uppercase fw-semibold fs-6">
                n coach
            </li>
            <li class="col-2 text-uppercase fw-semibold fs-6">
                from
            </li>
            <li class="col-1 text-uppercase fw-semibold fs-6">
                time
            </li>
            <li class="col-2 text-uppercase fw-semibold fs-6">
                to
            </li>
            <li class="col-1 text-uppercase fw-semibold fs-6">
                time
            </li>
            <li class="col-1 text-uppercase fw-semibold fs-6">
                on_time
            </li>
            <li class="col-1 text-uppercase fw-semibold fs-6">
                delete
            </li>
           
            
        </ul>

            @foreach ($trains as $train)

            
            
                <ul class="list-unstyled row gap-2 custom-ul justify-content-center">

                    <li class="col-1">
                        {{$train['corporate']}}
                    </li>
                    <li class="col-1">
                        {{$train['code']}}
                    </li>
                    <li class="col-1">
                        {{$train['coach']}}
                    </li>
                    <li class="col-2">
                        {{$train['departures']}}
                    </li>
                    <li class="col-1">
                        {{substr($train['departures_time'], 0, 5)}}
                    </li>
                    <li class="col-2">
                        {{$train['arrives']}}
                    </li>
                    <li class="col-1">
                        {{substr($train['arrives_time'], 0, 5)}}
                    </li>
                    <li class="col-1">
                        {{$train['on_time']}}
                    </li>
                    <li class="col-1">
                        {{$train['delete'] ? 'Deleted' : ' '}}
                    </li>
                   
                    
                </ul>
                
       
            @endforeach
        
    </div>
</div>
</div>
    
@endsection