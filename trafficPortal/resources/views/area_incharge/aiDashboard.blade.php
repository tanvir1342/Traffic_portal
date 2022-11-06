<!-- Modal -->
@extends('layouts.aiApp')
@section('content')
<link href="{{ asset('css/ai_dashboard.css') }}" rel="stylesheet">

<div class="container-parent">
    
    <div class="child-container-1">
        
        <div style="padding:10px">
            <h1>Traffic Point</h1>
        </div>
        <hr>
        <div style="padding: 10px">
            <table id="trafficpoint">
            <tr>
            <th>traffic point id</th>
            <th>traffic point name</th>
            <th>traffic point incharge</th>
        </tr>
        @foreach($trafficpoint as $trafficpoint)
        <tr>
            <td>{{$trafficpoint->tp_id}}</td>
            <td>{{$trafficpoint->tp_name}}</td>
            <td>{{$trafficpoint->tp_incharge_name}}</td>
        </tr>
        @endforeach
                
            </table>
        </div>
    </div>
    {{-- 2nd grid --}}
    <div style="background-color:rgb(255, 255, 255);margin:10px">
        
        <div  id="detils_table" class="p-3 text-center">
            
           

        </div>
        
    </div>

    {{-- 3rd --}}
    <div class="d-flex justify-content-center" style="background-color:rgb(255, 255, 255); margin:10px;padding 10px;">
        <div style="width:500px">
            <canvas id="myChart"></canvas>
        </div>
        
    </div>
    <div style="background-color:rgb(255, 255, 255); margin:10px;padding 10px;">
        <div style="width:500px">
            <canvas id="2ndchart"></canvas>
        </div>
    </div>
</div>


  
  

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="{{asset('js/ai_dashboard.js')}}"></script>
@endsection