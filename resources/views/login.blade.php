<h1>User login</h1>


<form action="user" method='post' enctype="multipart/form-data">
    @csrf
    <input type='file' name='doc' /><br /><br />

    <button type="submit">add</button>
</form>