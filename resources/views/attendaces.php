<form action="{{ route('form') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="date" class="col-form-label">日時を入力</label>
    <input type="datetime-local" class="form-control" id="date" name="date">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">送信</button>
  </div>
</form>