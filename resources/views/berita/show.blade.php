@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berita</div>

            <div class="card-body">
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">ID</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$berita->id!!} </label>
            </div>
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Judul</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$berita->judul!!} </label>
            </div>
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Isi</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$berita->isi!!} </label>
            </div>
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">User ID</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$berita->users_id!!} </label>
            </div>
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Kategori Berita ID</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$berita->kategori_berita_id!!} </label>
            </div>
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Create</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$berita->created_at->format('d/M/Y H:i')!!} </label>
            </div>
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Update</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$berita->updated_at->format('d/M/Y H:i')!!} </label>
            </div>
  

            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{!! route('berita.index')!!}" class="btn btn-primary">Kembali</a>
                                    
                            </div>
                        </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Berita</title>
</head>
<body>

</body>
</html>