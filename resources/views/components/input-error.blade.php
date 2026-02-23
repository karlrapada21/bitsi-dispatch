@props(['field' => $for ?? null, 'bag' => 'default'])

@if($field)
    @error($field, $bag)
        <p {{ $attributes->merge(['class' => 'text-sm text-destructive']) }}>{{ $message }}</p>
    @enderror
@endif
