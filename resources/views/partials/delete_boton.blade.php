<form
action="{{$route}}"
method="Post"
onsubmit="return confirm('Are you sure you want to DELETE the character: {{$character->name}}')">

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-light"><i class="fa-solid fa-trash-can"></i></button>
</form>
