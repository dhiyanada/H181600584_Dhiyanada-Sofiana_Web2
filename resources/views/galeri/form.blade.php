@csrf
<br>
<div class="form-group row">
        <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>
           
            <div class="col-md-6">
                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required>
           
                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
</div>
<div class="form-group row">
        <label for="kategori_galeri_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Berita ID') }}</label>
            
            <div class="col-md-6">

{!! form::select('kategori_galeri_id', $kategoriGaleri,null,["class"=>"form-control", "required"])!!}
            
                @error('kategori_galeri_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
</div>
<div class="form-group row">
        <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('Isi') }}</label>
            
            <div class="col-md-6">
                {!! form::textarea('isi', null ['class'=>'rorm-control']); !!}

                @error('isi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
</div>
        <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::user()->id }}" required autocomplete="users_id" autofocus>

<div class="form-group row mb-0">
        <div class="col-md-10 offset-md-2">
             <button type="submit" class="btn btn-primary">
                Simpan Data
            </button>
            <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
            Batal
            </a>
        </div>
</div>