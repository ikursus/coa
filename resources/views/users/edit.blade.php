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

                <form method="POST">
                @csrf
                {{-- <input type="hidden" name="_method" value="PATCH"> komen --}}
                @method('PATCH')

                <div class="card">
                    <div class="card-header">
                        {{ $pageTitle }}  Rekod COA ID: {{ $id }}
                    </div>
                    <div class="card-body">

                            <div class="form-group">
                                <label>Kod Akaun</label>
                                <input type="text" name="kod_akaun" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Keterangan Akaun</label>
                                <input type="text" name="keterangan_akaun" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Amaun</label>
                                <input type="number" name="amaun" min="0" step="0.01" class="form-control" required>
                            </div>

                        </form>

                    </div>
                    <div class="card-footer">
                        <a href="/coa" class="btn btn-light">Kembali</a>
                        <button type="submit" class="btn btn-primary">Kemaskini</button>
                    </div>
                </div>

                </form>


            </div><!--/.col -->

        </div><!--/.row -->

      </div><!--/.container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
