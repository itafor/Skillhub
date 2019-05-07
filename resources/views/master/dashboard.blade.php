<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin Area | Dashboard </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
  
    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <link href="{{ asset('bootstrapcss/style.css') }}" rel="stylesheet">
 <link href="{{ asset('bootstrapcss/jquery.datetimepicker.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
   
    <!-- ckeditor -->
 <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

 <style>
 .invalid-feedback{
     color: brown;
 }
</style>
  </head>
  <body>
    
@include('inc.navbar')
           
@include('inc.success')
@include('inc.errors') 
     
 @yield('content')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript" src="bootstrapjs/jquery.datetimepicker.full.js">
  
</script>

<!-- auto select state and lga -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#sendSMS').hide();
$('.dynamic').change(function() {
if($(this).val() !=''){
    var select = $(this).attr('id');
    var value = $(this).val();
    var dependent =$(this).data('dependent');
    var _token = $('input[name="_token"]').val();

    $.ajax({
    url: "{{route('dynamicdependent.fetch')}}",
    method: 'POST',
    data: {select:select, value:value, dependent:dependent, _token:_token},
    success: function(result){
        $('#'+dependent).html(result);
    }
    });
}
});

$('#fullDetailSMS').click(function(){
    $('#sendSMS').show();
});

$('#cancelSMS').click(function(){
    $('#sendSMS').hide();
});

    });

    $('#datetimepicker').datetimepicker();
    </script>
<!-- auto search by location -->
    <script>
$(document).ready(function(){
  $('#searchlocation').keyup(function(){
    var searchlocat=document.querySelector('#searchlocation')
    console.log(searchlocat.value)
    var query=$(this).val();
    if(query!==''){
      var _token = $('input[name="_token"').val();
      $.ajax({
        url:"{{ route('autocomplete.fetch')}}",
        method:"POST",
        data:{query:query, _token:_token},
        success:function(data){
          console.log(data)
          $('#locationList').fadeIn();
          $('#locationList').html(data);
        }
      })
    }
  }); 

  $(document).on('click', 'li', function(e){  
        $('#searchlocation').val($(this).text());  
        $('#locationList').fadeOut();  
    });  
 
});

</script>

<!-- auto search by skills -->
    <script>
$(document).ready(function(){
  $('#searchskill').keyup(function(){
    var searchskills=document.querySelector('#searchskill')
    
    var query2=$(this).val();
    if(query2!==''){
      var _token = $('input[name="_token"').val();
      $.ajax({
        url:"{{ route('autocomplete.fetchskill')}}",
        method:"POST",
        data:{query2:query2, _token:_token},
        success:function(user){
          console.log(user)
          $('#skillList').fadeIn();
          $('#skillList').html(user);
        }
      })
    }
  }); 

  $(document).on('click', 'li', function(e){  
        $('#searchskill').val($(this).text());  
        $('#skillList').fadeOut();  
    });  
 
});

</script>


<script>
      CKEDITOR.replace( 'editor1' );
    </script>



    <script type="text/javascript">

    $('.addRow').on('click',function(){
        addRow();
    });

    function addRow(){
var tr= '<tr>'+
        '<td><textarea type="text" name="post1[]" id="post1" class="form-control post1"></textarea></td>'+
        '<td><textarea type="text" name="post2[]" id="post2" class="form-control post2"></textarea></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="fa fa-minus"></i></a></td>'+
   ' </tr>';
   ' </tr>';
    $('tbody').append(tr);
    }


    $('body').delegate('.remove','click',function(){
        var l=$('tbody tr').length;
        if(l==1){
alert('You can not remove last row');
        }else{
        $(this).parent().parent().remove();
        }
    });

    </script>


    <script type="text/javascript">
  document.getElementById('searchSkillForm').addEventListener('submit',checkInput);

 function  checkInput(e) {
  let searchskill = document.getElementById('searchskill').value;

  if(!searchskill) {
    alert('Please enter search keyword for skill');
    e.preventDefault();
    return false;
  }
  return true;
  }


  document.getElementById('searchLocationForm').addEventListener('submit',checkLocation);

 function  checkLocation(e) {
  let searchlocation = document.getElementById('searchlocation').value;

  if(!searchlocation) {
    alert('Please enter search keyword for location');
    e.preventDefault();
    return false;
  }
  return true;
  }
</script>


<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>

<script type="text/javascript">
$(function() {
    $(".chzn-select").chosen();
});
</script>
  </body>
</html>
