<h1> Create a new student </h1>

<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <label for='fname'>First Name: </label>
    <br>
    <input name='fname' id='fname' type="text" required >
    <br>
    <br>
    <label for='lname'>Last Name: </label>
    <br>
    <input name='lname' id='lname' type="text" required >
    <br>
    <br>
    <label for="email">Email: </label>
    <br>
    <input name='email' id='email' type='email' required >
    <br>
    <button type='submit'>Create Student</button>
</form>