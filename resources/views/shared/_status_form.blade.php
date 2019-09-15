<form action="{{ route('status.store') }}" method="POST">
  @csrf
  <textarea class="form-control" rows="3" placeholder="聊聊新鲜事儿..." name="content">{{ old('content') }}</textarea>
  <div class="text-right">
    <button type="submit" class="btn btn-primary mt-3">发布</button>
  </div>
</form>
