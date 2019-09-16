<li class="media mt-4 mb-4">
  <a href="{{ route('user.show', $user->id )}}">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3 gravatar" />
  </a>
  <div class="media-body">
    <h5 class="mt-0 mb-1">{{ $user->name }} <small> / {{ $status->created_at->diffForHumans() }}</small></h5>
    {{ $status->content }}
  </div>
  @can('delete', $status)
    <form action="{{ route('status.destroy', $status->id) }}" method="POST" onsubmit="confirm('您确定要删除该条微博吗？')">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-sm btn-danger">删除</button>
    </form>
  @endcan
</li>