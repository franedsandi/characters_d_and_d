@extends('layout.main')

@section('content')
<form action="{{route('characters.update', $character)}}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="Text" class="form-control" id="name" name="name" value="{{$character->name}}">
    </div>
    <div class="mb-3">
        <label for="height" class="form-label">Height</label>
        <input type="number" step="0.01" class="form-control" id="height" name="height" value="{{$character->height}}">
    </div>
    <div class="mb-3">
        <label for="weight" class="form-label">Weight</label>
        <input type="number" step="0.01" class="form-control" id="weight" name="weight" value="{{$character->weight}}">
    </div>
    <div class="mb-3">
        <label for="background" class="form-label">Background</label>
        <textarea type="text" class="form-control" id="background" name="background" rows="3">{{$character->background}}
        </textarea>
    </div>
    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="Text" class="form-control" id="picture" name="picture" value="{{$character->picture}}">
    </div>
    <div class="mb-3">
        <label for="armor_class" class="form-label">Armor Class</label>
        <input type="number" class="form-control" id="armor_class" name="armor_class" value="{{$character->armor_class}}">
    </div>
    <div class="mb-3">
        <label for="for" class="form-label">For</label>
        <input type="number" class="form-control" id="for" name="for" value="{{$character->for}}">
    </div>
    <div class="mb-3">
        <label for="des" class="form-label">Des</label>
        <input type="number" class="form-control" id="des" name="des" value="{{$character->des}}">
    </div>
    <div class="mb-3">
        <label for="cos" class="form-label">Cos</label>
        <input type="number" class="form-control" id="cos" name="cos" value="{{$character->cos}}">
    </div>
    <div class="mb-3">
        <label for="int" class="form-label">Int</label>
        <input type="number" class="form-control" id="int" name="int" value="{{$character->int}}">
    </div>
    <div class="mb-3">
        <label for="sag" class="form-label">Sag</label>
        <input type="number" class="form-control" id="sag" name="sag" value="{{$character->sag}}">
    </div>
    <div class="mb-3">
        <label for="car" class="form-label">Car</label>
        <input type="number" class="form-control" id="car" name="car" value="{{$character->car}}">
    </div>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-warning"> Submit</button>
        <button type="reset" class="btn btn-danger"> Reset</button>
    </div>

</form>
@endsection

