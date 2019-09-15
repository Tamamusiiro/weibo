<div class="list-group-item">
  <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32>
  <a href="{{ route('user.show', $user) }}">
    {{ $user->name }}
  </a>
  @can('delete', $user)
  <form action="{{ route('user.destroy', $user) }}" method="post" class="float-right">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
  </form>
  @endcan
</div>
