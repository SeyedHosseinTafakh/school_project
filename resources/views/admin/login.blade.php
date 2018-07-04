<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{url('admin')}}" method="post">
    {{csrf_field()}}
    First name:<br>
    <input type="text" name="name">
    <br>
    Last name:<br>
    <input type="password" name="password" >
    <br><br>
    <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>