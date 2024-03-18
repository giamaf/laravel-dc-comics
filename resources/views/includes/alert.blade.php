@if (session('message'))
    <div class="alert alert-{{ session('type', 'info') }} alert-dismissible fade show m-0">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
