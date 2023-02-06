@extends('layouts.app')

@section('content')
    <h3 class="text-center py-3">Inserisci nuovo progetto</h3>

    <div class="row justify-content-center my-3">
        <div class="col-7">
            <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nome Progetto</label>
                    <input type="text" class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror" 
                    name="title" value="{{$errors->has('title') ? '' : old('title')}}">

                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"> {{old('description')}}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Immagine</label>
                    <input type="file" class="form-control @error('image') is-invalid @elseif(old('image')) is-valid @enderror" name="image">

                    @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Link GitHub</label>
                    <input type="text" class="form-control @error('link_github') is-invalid @elseif(old('link_github')) is-valid @enderror" name="link_github"
                    value="{{$errors->has('link_github') ? '' : old('link_github')}}">

                    @error('link_github')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Salva Progetto</button>
                <a href="{{route('admin.projects.index')}}" class="btn btn-outline-secondary">Annulla</a>
            </form>
        </div>
    </div>
@endsection