<div>
    @foreach ($art as $a)
        <div class="card mt-5 mb-5">
            <div class="card-header bg-warning justify-content-center d-flex">
                <strong>Your Latest Article</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $a->judul }}</h5>
                <p class="card-text">{{ $a->deskripsi }}</p>
            </div>
        </div>
    @endforeach
</div>
