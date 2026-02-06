<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card border-0 card-body">
        <h1 class="h6">Créer une publication</h1>
        <div class="form-group mb-3">
            <textarea name="content" class="form-control bg-light" placeholder="Commencer à écrire..."
                style="resize: none"></textarea>
        </div>
        <div class="d-flex gap-3 align-items-center">
            <div class="form-group col-md-10">
                <input type="file" name="image" class="form-control w-100">
            </div>
            <button class="btn btn-dark">Publier</button>
        </div>
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</form>
