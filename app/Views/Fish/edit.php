<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>
  <body>
  <h1 style="text-align: center;">TEGUH RIAN HIDAYAT</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                    <form action="<?php echo base_url('fish/update/'.$fish['record']) ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="form-group">
                                <label>LEARN</label>
                                <input type="text" class="form-control" name="learn" rows="5" placeholder="Masukkan Title">
                            </div>
                            <div class="form-group">
                                <label>WORRY</label>
                               <textarea class="form-control" name="worry" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>SOMETIMES</label>
                               <textarea class="form-control" name="sometimes" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>SINCE</label>
                               <textarea class="form-control" name="since" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                            <label>SOCIAL</label>
                            <textarea class="form-control" name="social" rows="5" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>