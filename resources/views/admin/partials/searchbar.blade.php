<div class="container-custom w-50 m-auto">

    <form class="d-flex" action="{{ route('admin.characters.index') }}" method="GET" class="mx-5">
        <input class="form-control me-2" type="text" name="search" placeholder="Search characters by name">
        <button class="btn btn-success" type="submit">Search</button>
    </form>

</div>
