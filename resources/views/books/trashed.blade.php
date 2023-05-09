<form
  method="POST" 
  action="{{route('books.delete-permanent', [$book->id])}}"
  class="d-inline"
  onsubmit="return confirm('Delete this book permanently?')"
>

@csrf 
<input type="hidden" name="_method" value="DELETE">

<input type="submit" value="Delete" class="btn btn-danger btn-sm">
</form>