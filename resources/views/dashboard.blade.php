@extends('admin.main_layout')
	



@section('page_head')
<link rel="stylesheet" href="{{ asset('auth_assets/css/star-animation.css')}}">


    <div class="pad-all text-center">
        <h3>Welcome to {{ $settings->school_name }}</h3>
        <p1>{{ $settings->camp_name }}<p>
        </p1>
    </div>

@endsection

@section('page_content')



    <div class="row">

        <div class="col-lg-12">

            <div class="row">
                 
                
                {{-- <div style="height:100%; width:100%; position:relative; display:flex; justify-content:center; align-items:center;">
    
                    <img src="uploads/trck.jpg" alt="" style="max-width:100%; height:auto; width:100%;">

           
    

                    <div class="col-sm-2 col-lg-2" style="position:absolute; top:10px; left:10px">

                        
                        <a href="{{ asset('ist_weight') }}">
                            <div class="panel panel-warning panel-colorful">
                                <div class="pad-all media">
                                    <div class="" style="">
                                        <img src="uploads/download.jfif" alt="" style="width: 100%">
                                    </div>
                                
                                </div>
        

                                <div class="pad-all" style="font-size:1.2em;   text-align:center;">
                                    1st Weight <span class="text-semibold"></span>
                                </div>
                            </div>
                        </a>

                    </div>
 
                </div> --}}

                <div style="height:100%; width:100%; position:relative; display:flex; justify-content:center; align-items:center;">

                    <img src="uploads/trck.jpg" alt="" style="max-width:100%; height:auto; width:100%;">
                    <div class="star-animation">
                        <div id="stars1"></div>
                        <div id="stars2"></div>
                        <div id="stars3"></div>
                        <div id="stars4"></div>
                        <div id="stars5"></div>
                    </div>
 
                    <!-- Card 1 -->
                    <div class="col-sm-2 col-lg-2" style="position:absolute; top:10px; left:30%">
                        <a href="{{ asset('ist_weight') }}" style="text-decoration:none; color:inherit;">
                            <div class="panel panel-warning panel-colorful">
                                <div class="pad-all media">
                                    <img src="uploads/download.jfif" style="width:100%">
                                </div>
                                <div class="pad-all" style="font-size:1.2em; text-align:center;">
                                    1st Weight
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-sm-2 col-lg-2" style="position:absolute; top:10px; left:55%">
                        <a href="{{ asset('all_weight') }}" style="text-decoration:none; color:inherit;">
                            <div class="panel panel-success panel-colorful">
                                <div class="pad-all media">
                                    <img src="uploads/download.jfif" style="width:100%">
                                </div>
                                <div class="pad-all" style="font-size:1.2em; text-align:center;">
                                    Report/ All Wweights
                                </div>
                            </div>
                        </a>
                    </div>

                </div>


               
                
            </div>					
        </div>
    </div>
 



@endsection



@section('javascript_code')
    <script src="{{ asset('backend/plugins\flot-charts\jquery.flot.min.js') }}"></script>
    <script src="{{ asset('backend/plugins\flot-charts\jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('backend/plugins\flot-charts\jquery.flot.tooltip.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/js\demo\dashboard.js') }}"></script> --}}

<script>
    
</script>
@endsection