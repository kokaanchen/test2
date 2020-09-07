<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
    {!! Form::open([ "name"=>"menu_form", "class" => "form-horizontal", "url" => "/posting", "files" => true, "method" => "POST", "id" => "menu_form"]) !!}
		<div class="card">
			<div class="card-header bg-grey">
				<span class="h6">{!! trans('locale.details') !!}</span>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<div>
							<div class="form-group">
								<label>att</label>
								<input type="file" name="attachment" id="attachment"/>
							</div>
						</div>				
					</div>
				</div>
			</div>
            <button type="submit">submit</button>
		</div>
			
	{!! Form::close() !!}

    </body>
</html>
