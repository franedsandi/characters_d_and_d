<form
action="{{route('characters.destroy', $character) }}"
method="Post"
onsubmit="return confirm('Are you sure you want to DELETE the character: {{$character->name}}')">

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
</form>
