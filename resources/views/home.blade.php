@extends('layout.main')

@section('content')

<div class="container">
<div class="card custom-card">
    <div class="card-body custom-c-body px-4">
        <ul class="list-unstyled row  justify-content-between custom-title">
    
            <li class="col-2 text-uppercase fw-semibold fs-6">
                train
            </li>
            <li class="col-1 text-uppercase fw-semibold fs-6">
                code
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
            <li class="col-1 text-uppercase fw-semibold fs-6">
                date
            </li>
           
            
        </ul>

            @foreach ($trains as $train)
            @php
                
                // dd($train);
            @endphp    
            
            
                <ul class="list-unstyled row  custom-ul justify-content-between">

                    <li class="col-2">
                        {{$train['corporate']}}
                    </li>
                    <li class="col-1">
                        {{$train['code']}}
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
                    <li class="col-1 mw-100">
                        {{$train['on_time'] ? ' ' : 'Delay'}}
                    </li>
                    <li class="col-1 mw-100" >
                        {{$train['delete'] ? 'Delete' : ''}}
                    </li> 
                    <li class="col-1">
                        @php
                            $formatDate = date('d-m-Y', strtotime($train['date']));
                        @endphp
                        {{$formatDate}}
                    </li>                 
                    
                </ul>
                
       
            @endforeach
        
    </div>
</div>
</div>
    
@endsection