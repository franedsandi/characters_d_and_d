@extends('layout.main')

@section('content')
<div class="my-3">
    <form action="{{route('characters.store')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="Text" class="form-control" id="name" name="name" style="width: 100%">
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" step="0.01" class="form-control" id="height" name="height">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" step="0.01" class="form-control" id="weight" name="weight">
        </div>
        <div class="mb-3">
            <label for="background" class="form-label">Background</label>
            <textarea type="text" class="form-control" id="background" name="background" rows="3">
            </textarea>
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="Text" class="form-control" id="picture" name="picture">
        </div>
        <div class="mb-3">
            <label for="armor_class" class="form-label">Armor Class</label>
            <input type="number" class="form-control" id="armor_class" name="armor_class">
        </div>
        <div class="mb-3">
            <label for="for" class="form-label">For</label>
            <input type="number" class="form-control" id="for" name="for">
        </div>
        <div class="mb-3">
            <label for="des" class="form-label">Des</label>
            <input type="number" class="form-control" id="des" name="des">
        </div>
        <div class="mb-3">
            <label for="cos" class="form-label">Cos</label>
            <input type="number" class="form-control" id="cos" name="cos">
        </div>
        <div class="mb-3">
            <label for="int" class="form-label">Int</label>
            <input type="number" class="form-control" id="int" name="int">
        </div>
        <div class="mb-3">
            <label for="sag" class="form-label">Sag</label>
            <input type="number" class="form-control" id="sag" name="sag">
        </div>
        <div class="mb-3">
            <label for="car" class="form-label">Car</label>
            <input type="number" class="form-control" id="car" name="car">
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-warning"> Submit</button>
            <button type="reset" class="btn btn-danger"> Reset</button>
        </div>

    </form>
</div>
@endsection
