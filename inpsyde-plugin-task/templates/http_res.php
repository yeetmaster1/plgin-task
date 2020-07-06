<?php


/**
 * Http GET request 
 */
  $response = wp_remote_get( "https://jsonplaceholder.typicode.com/users", array() );
 
  $data = json_decode($response['body'], true);
  $user = json_encode($data);
  $name = $data[0]['name'];
  $username = $data[0]['username'];
  $Email1 = $data[0]['email'];

  $user1 = $data[1]['id'];
  $name1 = $data[1]['name'];
  $username1 = $data[1]['username'];
  $Email2 = $data[1]['email'];

  $user2 = $data[2]['id'];
  $name2 = $data[2]['name'];
  $username2 = $data[2]['username'];
  $Email3 = $data[2]['email'];
 ?> 
 <html>
 <head>


</head>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
 <username>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script>
$(document).ready(function(){
    let y = 0;
    
     $(".tl1, .tl2, .tl3, .usn1, .usn2 , .usn3, .em1, .em2, .em3 ").hide();
     $("#here").append('<td class="border border-primary id1" ><a href="javascript:;" class="sh1">1</a></td><td class="border border-primary" ><p class="tl1"></p></td>heelo<td class="border border-primary "><p class="usn1"></p></td><td class="border border-primary "><p class="em1"></p></td>');
      $('.sh1').on('click',function(e){
	  
  ;
      $.ajax({
				method:'GET',
				url: 'https://jsonplaceholder.typicode.com/users',
				dataType: 'json'
			}).done(function(data){
				
				console.log(data)
                    console.log(y);
                    var sizearr = data.length;
                    console.log(sizearr);
                    $('.sh1').empty();
                    $('.show').hide();
                    $('.sh1').append('<a class="show">'+data[y]['id']+'</a>');
                    $('.tl1').append('<p class="show">'+data[y]['name']+'</p>');
                    $('.usn1').append('<p class="show">'+data[y]['username']+'</p>');
                    $('.em1').append('<p class="show">'+data[y]['email']+'<p>');
                    y++;
                if(y >= sizearr){
                    return y = 0;
                }    

            
        });
    });
});
</script>
     <table class='table'>
 <tr>
 <style>
 th{
     padding: 10px;
 }
 </style>
 <th class="border border-primary ">UserId</th>
 <th class="border border-primary ">name</th>
 <th class="border border-primary ">username</th>
 <th class="border border-primary ">E-mail</th>
 </tr>
 <tr id='here'>
 <div class='app'>

 </div>
 
<div class='result'>
</div>

 </body>
 
 
 </html>



