<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport"/>
        <title>Studyworld app</title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></link>
        <link rel="stylesheet" type="text/css" href="/css/style.css"></link>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid" >
                <div class="form-wrapper">
                <h1>Studyworld admin panel</h1>
                    </br>
                @if(Session::has("error_message"))
                    <h4 style="color:red">{{Session::get("error_message")}}</h4>
                @endif
                @if(Session::has("logout_message"))
                    <h4 style="color:red">{{Session::get("logout_message")}}</h4>
                @endif
                    <h3>Please login to proceed</h3>
                    <br>
                    
                        {{Form::open(["url"=>"login","method"=>"post"])}}
                            {{Form::label("username")}}
                            {{Form::text("username","",["class"=>"form-control","placeholder"=>"enter username"])}}
</br>
                            {{Form::label("password")}}
                            {{Form::password("password",["class"=>"form-control","placeholder"=>"enter password"])}}
                            </br>
                            {{Form::submit("Submit",["class"=>"btn btn-primary pull-right"])}}
                        {{Form::close()}}
                </div>
            </div>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
</html>



