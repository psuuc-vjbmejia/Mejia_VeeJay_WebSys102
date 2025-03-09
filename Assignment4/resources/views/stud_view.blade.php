
<html>
<style>
  .container {
    margin:50px;
    padding: 10px;
    justify-content: center;
    border: 1px solid black;
    margin: 0 auto;
    max-width: 300px;
}
.tabl {
        width: 90%;
        margin: 20px;
        text-align: center;
        }
td {
        border: 1px solid black;
        padding: 5px;
        }        

</style>
<body >
    <div class="container">
<form action = "/stud_view" method = "post" >
         @csrf

        Name: <input type='text' name='stud_name' /></td>
        <input type = 'submit' value = "Add student"/>
      </form>

    <table class="tabl">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td> <a href="edit/{{$user->id}}">Edit </a></td>
            <td><a href="delete/{{$user->id}}">Delete</a></td>


        </tr>
        @endforeach
    </table>
    </div>
</body>

</html>