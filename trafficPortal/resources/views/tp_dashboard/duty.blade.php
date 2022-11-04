@extends('layouts.tpApp')
@section('content')
<style>
    .container-parent{
    display:grid;
    height: 100vh;
    grid-template-columns: auto auto;
    grid-template-rows: auto auto;
}
.child-container-1{
    background-color:rgb(255, 255, 255);
    margin: 10px;
    color: rgb(53, 93, 204);

    
}
#employee{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#employee td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#employee tr:nth-child(even){background-color: #f2f2f2;}

#employee tr:hover {background-color: #ddd;}

#employee th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
}
</style>
<div class="container-parent">
 <div class="child-container-1">
    <h1 class="text-center">Available Employee</h1>
    <hr>
    <div class="d-flex justify-content-center" style="padding: 20px;margin-top:40px">
        
        <table id="employee">
            <tr>
                <th>Employe id</th>
                <th>Employe Name</th>
                <th>Slot</th>
            </tr>
            @foreach($empolye as $empolye)
            <tr>
                <td>{{$empolye->id}}</td>
                <td>Karim</td>
                <td>8 Am - 4 Pm</td>
            </tr>
            @endforeach
            
        </table>
    </div>
    <button onclick="preview()" class="btn btn-secondary m-3">Make duty roster</button>
 </div>
 <div class="child-container-1">
    child 2
    <div id="detils_table">

    </div>
</div>

</div>

<script>
    function preview()
    {
        
    
        var link = "/tpi/generateduty";
        //console.log(id);
        let http = new XMLHttpRequest();
                    http.open('get', link, true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send();
                    http.onreadystatechange = function()
                    {
                        
                        if(this.readyState == 4 && this.status == 200)
                        {
                            console.log(this.responseText);
                            if(this.responseText == "data not found"){
                               // document.getElementById('notfound').innerHTML = "Data not found";
                                //console.log("data not found")
                            }
                            else
                            {
                                
                                 var data =  JSON.parse(this.responseText);
                                 console.log(data);
                                 var html = "";
                                for (var i = 0; i<data.length;i++) {
                                    // var em_id = data[i].id;
                                    // var name = data[i].name;
                                     html+= "<img class='rounded-circle' src='https://mdbcdn.b-cdn.net/img/new/avatars/9.webp' />";

                             }
                                document.getElementById("detils_table").innerHTML = html;
                            }

                        }
                    }
    }
</script>
@endsection