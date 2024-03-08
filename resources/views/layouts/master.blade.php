<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .input-group{
            display:table;
            width:100%;
        }
        .input-group .input-field,
        .input-group .input-group-addon{
            display:table-cell;
        }
        #modded {
	.progress {
		min-height: 30px;
		overflow: hidden;
		position: relative;
		span {
			position: relative;
			float:left;
			color: #fff;
			padding: 4px;
			z-index: 99999;
			i {
				width: inherit;
				font-size: inherit;
				position: relative;
				top: 2px;
				margin-left: 8px;
			}
		}
		.determinate {
			width: 0;
			transition: width 1s ease-in-out;
			padding: 4px;
			position: relative;
			color: #fff;
			text-align: right;
			white-space: nowrap;
		}
	}
	ul.collapsible {
		padding: 0;
		border: none;
		border-radius: 0;
		box-shadow:none;
		li {
			margin-bottom: 14px;
		}
		.collapsible-header {
			padding: 0;
			border-bottom: 0;
			.progress {
				margin: 0;
				border-radius: 0;
			}
		}
		.collapsible-body {
			padding: 16px;
			box-shadow: rgba(0, 0, 0, 0.137255) 0px 2px 2px 0px, rgba(0, 0, 0, 0.117647) 0px 3px 1px -2px, rgba(0, 0, 0, 0.2) 0px 1px 5px 0px;
		}
	}
}
@keyframes grow {
  from {
    width: 0;
  }
}
    </style>
</head>
<body>
    @yield("content")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>


