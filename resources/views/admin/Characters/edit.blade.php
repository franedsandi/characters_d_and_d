@extends('layout.main')

@section('content')
<div class="my-3 text-warning">
    <form action="{{route('characters.update', $character)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="Text" class="form-control" id="name" name="name" value="{{old('name', $character->name)}}">
            @error('name')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="race_id" class="form-label">Project Type</label>
            <select class="form-control" id="race_id" name="race_id">
                <option value="">Select Type</option>
                @foreach ($races as $race)
                    <option value="{{ $race->id }}" {{ $character->race_id == $race->id ? 'selected' : '' }}>
                        {{ $race->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" step="0.01" class="form-control" id="height" name="height" value="{{old('height', $character->height)}}">
            @error('height')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" step="0.01" class="form-control" id="weight" name="weight" value="{{old('weight', $character->weight)}}">
            @error('weight')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="background" class="form-label">Background</label>
            <textarea type="text" class="form-control" id="background" name="background" rows="3">{{old ('background' ,$character->background)}}</textarea>
            @error('background')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="Text" class="form-control" id="picture" name="picture" value="{{old ('picture', $character->picture)}}">
            @error('picture')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="armor_class" class="form-label">Armor Class</label>
            <input type="number" class="form-control" id="armor_class" name="armor_class" value="{{old('armor_class', $character->armor_class)}}">
            @error('armor_class')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="for" class="form-label">Strength</label>
            <input type="number" class="form-control" id="for" name="for" value="{{old('for', $character->for)}}">
            @error('for')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="des" class="form-label">Dexterity</label>
            <input type="number" class="form-control" id="des" name="des" value="{{old('for', $character->for)}}">
            @error('des')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cos" class="form-label">Constitution</label>
            <input type="number" class="form-control" id="cos" name="cos" value="{{old('for', $character->cos)}}">
            @error('cos')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="int" class="form-label">Intelligence</label>
            <input type="number" class="form-control" id="int" name="int" value="{{old('for', $character->int)}}">
            @error('int')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sag" class="form-label">Wisdom</label>
            <input type="number" class="form-control" id="sag" name="sag" value="{{old('for', $character->sag)}}">
            @error('sag')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="car" class="form-label">Charisma</label>
            <input type="number" class="form-control" id="car" name="car" value="{{old('for', $character->car)}}">
            @error('car')
            <p class="text-danger fw-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-warning"> Submit</button>
            <button type="reset" class="btn btn-danger"> Reset</button>
        </div>

    </form>
</div>
@endsection

