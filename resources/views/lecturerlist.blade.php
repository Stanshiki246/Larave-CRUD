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
      <a href="lectureradd">+ Lecturer</a>
      <br><br>
			<table border="1">
				<tr>
					<th>Lecturer ID</th>
					<th>Name</th>
          <th colspan="2">Option</th>
				</tr>
        				@foreach ($lecturers as $key => $lecturer)
				<tr>
					<td>
					{{ $lecturer->lecturer_id }}
					</td>
					<td>
					{{ $lecturer->name }}
					</td>
          <td>
            <form action="{{ url('/delete', ['id' => $lecturer->id]) }}" method="post">
              <input style="background-color:red; border:1px" type="submit" value="Delete"/>
              @method('delete')
              @csrf
            </form>
          </td>
          <td>
            <a href="lecturerupdate/{{$lecturer->id}}"> <p style="background-color: yellow; border: 1px; font-size:medium">Update</p> </a>
          </td>
				</tr>
				@endforeach
			</table>
    </body>
</html>
