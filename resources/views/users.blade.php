<h1>User Info</h1>
<table border="2">
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>email</td>
        <td>image</td>
    </tr>
    @foreach($usersCollection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src={{$item['avatar']}} alt="avatar" /></td>

    </tr>
    @endforeach
</table>