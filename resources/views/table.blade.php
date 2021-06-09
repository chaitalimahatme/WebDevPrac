<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>


  <h2>STUDENT TABLE</h2>
  <a class="btn btn-primary" href="{{route('export')}}">{{_('Export Csv')}}</a><br /><br />
  <div class=" float-right ">
    <a href="{{ route('student.form') }}" class="btn btn-primary">{{_('Back')}}</a>
  </div>
  <br />
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for..." name="search">
    <span class="input-group-btn">
      <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
    </span>
  </div><br />

  <table>


    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Time</th>
      <th>Action</th>

    </tr>
    @if(count($data) > 0)
    @foreach($data as $d)
    <tr>
      <td>{{$d->id}}</td>
      <td>{{$d->title}}</td>
      <td>{{$d->description}}</td>
      <td>{{$d->created_at}}</td>
      <td>
        <a href={{route('student.form.edit',$d->id )}}>Edit</a>
        <a href={{route('student.form.delete',$d->id )}}>Delete</a>
      </td>

    </tr>

    @endforeach
    @else
    <h1>No Data Found</h1>
    @endif
  </table>
  {{$data->links()}}
</body>

</html>