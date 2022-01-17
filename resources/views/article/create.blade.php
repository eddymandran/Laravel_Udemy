@extends('base')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Poster un nouvel article</h1>
        <form method="POST" action=" {{ route('articles.store') }}">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" class="form-control" placeholder="Titre de votre article"/>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Sous-titre</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Sous-titre de votre article"/>
                    <small class="form-text text-muted">Décrivez le contenu de votre article, le thème traitré ...</small>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Contenu</label>
                    <textarea id="tinycme-editor" name="content" class="form-control w-100"></textarea>
                </div>
                <script>
                    tinymce.init({
                        selector: '#tinycme-editor'
                    });
                </script>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button type="submit " class="btn btn-primary mt-3">Poster l'article</button>
            </div>
        </form>
    </div>
@endsection
