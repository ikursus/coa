<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">

        <div class="row mt-5">

            <div class="col">

                <div class="card">
                    <div class="card-header">
                        Senarai Users
                    </div>
                    <div class="card-body">

                        <table class="table">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>MYKAD</th>
                                    <th>EMAIL</th>
                                    <th>TINDAKAN</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($senaraiUsers as $item)
                                <tr>
                                    <td><?php echo $item['id']; ?></td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['mykad'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', ['id' => $item['id']]) }}" class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Baru</a>
                    </div>
                </div>


            </div><!--/.col -->

        </div><!--/.row -->

      </div><!--/.container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
