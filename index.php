<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <style>
        .div {
            width: 200px;
            height: 170px;
            background-color: #EEE;
        }
    </style>
</head>

<body>
    <div class="div">
    </div>
    <button>Ação</button>

    <script src="jquery.min.js"></script>
    <script>
        $(function() {

            $('button').bind('click', function() {

               
                $('.div').load('teste.html');  

            })
        })
    </script>
</body>

</html>