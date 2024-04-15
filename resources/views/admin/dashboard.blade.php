@extends('admin.main')
@section('title')
    Dashboard
@endsection
@section('content')

        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
        </ol>
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
           
        
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    @foreach ($results as $result)
                                            @if ($result->role_name == 'health professional')
                                                Health Professionals
                                             <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $result->count }}</div>
                                            @endif
                                     @endforeach </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                <a href="{{url('/health')}}" class="text-primary">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Students
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $studentCount }}</div>
                                        <a href="{{url('/stu')}}" class="text-info">view details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                   Blogs</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$blogCount}}</div>
                                <a href="{{url('/blog')}}" class="text-success">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                      Profile Created Health Professionals  
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Profile Created Health Professionals  
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                      Profile Created Students  
                    </div>
                    <div class="card-body"><canvas id="myAChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Profile Created Students    
                    </div>
                    <div class="card-body"><canvas id="myChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var _ydata = JSON.parse('{!! json_encode($months) !!}');
            var _xdata = JSON.parse('{!! json_encode($monthCount) !!}');
            var _yaxis = JSON.parse('{!! json_encode($Smonths) !!}');
            var _xaxis = JSON.parse('{!! json_encode($SmonthCount) !!}');
        </script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
@endsection