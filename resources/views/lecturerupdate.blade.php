<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
			Hello {{ Session::get('lecturerid') }}, <a href="logout">Logout</a>
			<br><br>
      <form action="{{ url('/lecturerupdatesave', ['id' => $lecturer->id]) }}" method="post">
          @method('POST')
          @csrf
          <label for="lecturer_id">Lecturer Id:</label>
          <input type="text" name="lecturer_id" value={{ $lecturer->lecturer_id }} />
          <label for="name">Name:</label>
          <input type="text" name="name" value={{ $lecturer->name }} />
          <input type="submit" name="submit" value="Save">
      </form>
    </body>
</html>
