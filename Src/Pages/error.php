<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Oops !</title>

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet"> 
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>OOPS</h1>
			</div>
			<p>Could not find the travel you're looking for please try again after a while.</p>
			<a href="http://localhost/worldcoast/index.php">home page</a>
		</div>
	</div>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }

        #notfound {
            position: relative;
            height: 100vh;
            background-color: #222;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 460px;
            width: 100%;
            text-align: center;
            line-height: 1.4;
        }

        .notfound .notfound-404 {
            height: 158px;
            line-height: 153px;
        }

        .notfound .notfound-404 h1 {
            text-align: center;
            font-family: 'Josefin Sans', sans-serif;
            color: #222;
            font-size: 140px;
            margin: 0px;
            text-shadow: 2px 2px 0px #B68D40, -2px -2px 0px #B68D40;
        }

        .notfound p {
            font-family: 'Josefin Sans', sans-serif;
            color: #c9c9c9;
            font-size: 16px;
            font-weight: 400;
            margin-top: 0px;
            margin-bottom: 15px;
        }

        .notfound a {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
            background: transparent;
            color: #c9c9c9;
            border-radius: 10px;
            border: 2px solid #c9c9c9;
            display: inline-block;
            padding: 10px 25px;
            font-weight: 700;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .notfound a:hover {
            color: #B68D40;
            border-color: #B68D40;
        }

        @media only screen and (max-width: 480px) {
        .notfound .notfound-404 {
            height: 122px;
            line-height: 122px;
        }

        .notfound .notfound-404 h1 {
            font-size: 100px;
        }
        }
    </style>

</body>
</html>