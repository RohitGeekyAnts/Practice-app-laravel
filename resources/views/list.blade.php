<h1>Members</h1>

<table border="2">
    <tr>
        <td>Id</td>
        <td>name</td>
        <td>address</td>
        <td>operation</td>
    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['address']}}</td>
        <td><a href="delete/{{$member['id']}}">Delete</a>
            <a href="edit/{{$member['id']}}">Edit</a>
        </td>


    </tr>
    @endforeach
</table>