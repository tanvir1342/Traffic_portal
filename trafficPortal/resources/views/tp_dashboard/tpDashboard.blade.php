@extends('layouts.app')
@section('content')
<link href="{{ asset('css/tp_dashboard.css') }}" rel="stylesheet">
<div class="container-parent">
    <div class="child-container-1">
        
        <div style="padding:10px">
            <h1>Duty employee</h1>
            <p class="fs-5">Total Employe: 16</p>
            <p class="fs-5">Available  Employe: 15</p>
        </div>
        <hr>
        <div style="padding: 10px">
            <table id="employee">
                <tr>
                    <th>Employe id</th>
                    <th>Employe Name</th>
                    <th>Slot</th>
                </tr>
                @foreach($empolye as $empolye)
                <tr ondblclick="details(<?php echo $empolye->id?>)">
                    <td>{{$empolye->id}}</td>
                    <td>Karim</td>
                    <td>8 Am - 4 Pm</td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
    {{-- 2nd grid --}}
    <div style="background-color:rgb(255, 255, 255);margin:10px">
        <div>
            <table class="table">
                <tr>
                    <td>Employe id</td>
                    <td>Employe Name</td>
                    <td>Slot</td>
                </tr>
                <tbody  id="detils_table">

                </tbody>            
            </table>
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
<script type="text/javascript" src="{{asset('js/tp_dashboard.js')}}"></script>
@endsection