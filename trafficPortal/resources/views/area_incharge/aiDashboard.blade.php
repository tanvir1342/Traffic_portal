<!-- Modal -->
@extends('layouts.aiApp')
@section('content')
<link href="{{ asset('css/ai_dashboard.css') }}" rel="stylesheet">
<div id="popup">
    <button class="btn popup-exit" onclick="cnclemail()"><i class="fa-solid fa-xmark"></i></button>
    <form action="index.html" method="post">
        
        <h1>Email Form</h1>
        
        <fieldset>
         
          
          <label for="name">Subject:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email Body:</label>
          <input type="email" id="mail" name="user_email">
        </fieldset>
          
        <button type="submit">Sign Up</button>
        
      </form>
</div>
<div class="container-parent">
    
    <div class="child-container-1">
        
        <div style="padding:10px">
            <h1>Traffic Point</h1>
        </div>
        <hr>
        <div style="padding: 10px">
            <table id="trafficpoint">
                <tr>
                    <th>Traffic Point ID</th>
                    <th>Traffic Point Name</th>
                    <th>Traffic Point Incharge Name</th>
                </tr>
                @foreach($trafficpoint as $trafficpoint)
                <tr ondblclick="details(<?php echo $trafficpoint->id?>)">
                    <td>{{$trafficpoint->id}}</td>
                    <td>{{$trafficpoint->name}}</td>
                    <td>anarkoli</td>
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