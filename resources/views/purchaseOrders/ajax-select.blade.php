@if(!empty($cost))
    <input type="number" readonly class="form-control" id="cost" name="cost" value="{{ $cost->value }}" required>
@endif