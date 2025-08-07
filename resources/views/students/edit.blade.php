<h1>Edit {{ $student->fname}} {{$student->lname}}</h1>

<form method="POST" action="{{ route('students.update', $student) }}">
    @csrf
    @method('PUT')
    <label for='fname'>First Name: </label>
    <br>
    <input name='fname' id='fname' type="text" value="{{ old('fname', $student->fname) }}" required >
    <br>
    <br>
    <label for='lname'>Last Name: </label>
    <br>
    <input name='lname' id='lname' type="text" value="{{ old('fname', $student->lname) }}" required >
    <br>
    <br>
    <label for="email">Email: </label>
    <br>
    <input name='email' id='email' type='email' value="{{ old('fname', $student->email) }}" required >
    <br>
    <button type='submit'>Update Student</button>
</form>