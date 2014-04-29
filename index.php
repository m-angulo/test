<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 101 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <h1>Hello, world!</h1>
        
        <link rel="stylesheet" href="css/plugins/imageselect/ImageSelect.css">
        <link rel="stylesheet" href="css/plugins/imageselect/chosen.css">
        
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/plugins/imageselect/chosen.jquery.js"></script>
        <script src="js/plugins/imageselect/ImageSelect.jquery.js"></script>

        <div id="container">
            <div id="ajax_container">
                 <select  multiple="multiple" class="my-select">
                    <option data-img-src="img/adnan.png">Adnan Sagar</option> 
                    <option data-img-src="img/rena.png">Rena Cugelman</option> 
                    <option data-img-src="img/tavis.png">Tavis Lochhead</option> 
                    <option data-img-src="img/brian.png">Brain Cugelman</option> 
                </select>
            </div>
        </div>
        <a href="content.php" id="btn">click me</a>
        
        <script>
            $(function(){   
                
                $('.my-select').chosen({
                    width:"100%"
                });
                
                $('#btn').click(function(e){
                    e.preventDefault();
                    $('#container').html('<img id="spinner" src="images/ajax-loader.gif" alt="loading...">');
                    $('#container').load(e.target.href + ' #ajax_container', function(){
                        $('#spinner').fadeOut('slow', function()
                        {
                            $(this).remove();
                        });
                    });
                });
            });
        </script>
        
    </body>
</html>