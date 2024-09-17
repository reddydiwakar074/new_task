{{-- @extends('master') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}} ">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <title>Search Asteroids</title>
    <style>
        .forminput {
            width: 150px;
            margin: 15px;
        }
        .error {
            color: red;
        }
        .btn-default {
            margin-left: 10%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="mt-5">


                <h3>Select Dates To Get Astroid By Date</h3>

                <br><br>

                <form method="post" action="/neo-data-by-api">
                    {{-- <form action="{{route('neo-data-by-api')}}" method="post"> --}}
                    {{ csrf_field() }}
                    <div class="formgroup">
                        <label for="startdate">Start Date: </label> 
                        <input type="text" autocomplete="off" value="{{old('fromdate')}}" class=" ml-3 forminput" name="fromdate" id="fromDate">
                            @if($errors->has('fromdate'))
                                <span class="error">{{ $errors->first('fromdate') }}</span>
                            @endif
                    </div>
                    <div class="formgroup">
                        <label for="startdate">End Date: </label> 
                        <input type="text" autocomplete="off" value="{{old('todate')}}" class=" ml-3 forminput" name="todate" id="toDate">
                            @if($errors->has('todate'))
                                <span class="error">{{ $errors->first('todate') }}</span>
                            @endif
                    </div>
                    <div class="formgroup">
                        {{-- <input type="button" value="filter" name="filter" id="filter" class="ml-3 btn btn-info" /> --}}
                        <input type="submit" value="Submit" name="filter" id="filter" class="btn-default">
                    </div>
                </form>
            </div>
        </div>





    </div>
    <script src="{{asset('js/app.js')}} "></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
                $.datepicker.setDefaults({
                    dateFormat:'yy-mm-dd',
                    changeMonth: true,
                      changeYear: true,
                      yearRange: "2012:2020"
                });
                $("#fromDate").datepicker();
                $("#toDate").datepicker();
                $("#filter").click(function(){
                // alert($("#fromDate").val());exit;
                var fromDate = $('#fromDate').val();
                var toDate = $('#toDate').val();
                
            });
        });
    </script>
</body>

</html>