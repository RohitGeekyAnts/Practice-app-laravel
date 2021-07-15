<h1>Add Members</h1>

<form action="add" method='POST'>
    @csrf
    <input type='text' name='name' placeholder="add name..." /><br /><br />
    <input type='text' name='email' placeholder="add email..." /><br /><br />
    <input type='text' name='address' placeholder="add address..." /><br /><br />
    <button type="submit">Add Member</button>
</form>