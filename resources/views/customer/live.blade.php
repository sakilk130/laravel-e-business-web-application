<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="assets/customer/js/ajax.js"></script>
</head>

<body>
  {{-- <form method="post">
      <input type="text" name="live" id="live">
      <input type="submit">
  </form> --}}
    
  <input type="text" name="live" id="live">

    <button>serlect</button>
    
    <p id="data">
        
    </p>

    <table id="tbody">

    </table>
    

    <script>
        $(document).ready(function() {

            $('#live').on('keyup', function() {
                var value = $(this).val();
                
                $.ajax({
                    type: 'post',
                    url: '{{ route("liveSearch") }}',
                    data: {
                        'live': value
                    },
                    success: function(data) {
                        var new_data = JSON.parse(data);
                        var tableRow='';
                        $("#tbody").html('');
                    
                        $.each( new_data, function( index, value ){
                            tableRow = "<tr><td><a href="+value.id+">"+value.email+"</a></td></tr>";
                            $("#tbody").append(tableRow);
                        });
                    },

                });
                
                
            });

        });

    </script>
</body>

</html>
