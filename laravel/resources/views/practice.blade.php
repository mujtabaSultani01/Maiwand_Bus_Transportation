<html>
<head>
	<title></title>
</head>
<body>
<center>
   <form method="post" action="">
   	{{csrf_field()}}

      First_Name:<input type="text" name="Fname"><br>
      Last_Name:<input type="text" name="Lname"><br>
      Message:<textarea rows="20" cols="30" name="message"></textarea><br>
      <button type="submit">Add</button>


   </form>
   <table border="2">
   	<tr>
   		<th>ID</th>
     <th>Fname</th>
     <th>Lname</th>
     <th>Message</th>
 </tr>
    @foreach($shows as $show)
     <tr><td>{{$show->id}}</td>
     	<td>{{$show->Fname}}</td>
          <td>{{$show->Lname}}</td>
          <td>{{$show->message}}</td>
     </tr>
     @endforeach

   </table>

</center>
</body>
</html>