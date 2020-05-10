@foreach ($province->districts as $district)
    <option value="{{ $district->id }}">{{ $district->district_name }}</option>
@endforeach