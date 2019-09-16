@can('follow', $user)
  <div class="text-center mt-2 mb-4">
      <form action="{{ route('user.follow_toggle', $user->id) }}" method="post">
        @csrf
        @if (Auth::user()->isFollowing($user->id))
        <button type="submit" class="btn btn-sm btn-outline-primary">取消关注</button>
        @else
        <button type="submit" class="btn btn-sm btn-primary">关注</button>
        @endif
      </form>
  </div>
@endcan