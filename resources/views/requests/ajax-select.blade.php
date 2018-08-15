<option value="0" disabled="true" selected="true">Select modality</option>
@if(!empty($modalities))
    @foreach($modalities as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
@endif