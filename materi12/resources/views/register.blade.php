<!-- resources/views/register.blade.php -->

<h1>Registration Form</h1>
<form method="post" action="{{ route('register.submit') }}">
    @csrf
    <label for="first_name">First Name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>
    
    <label for="last_name">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>

    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email"><br>

    <label for="gender">Gender:</label><br>
    <input type="text" id="gender" name="gender"><br>
    <!-- Add other fields here -->
    <input type="submit" value="Register">
</form>