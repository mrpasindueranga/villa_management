@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-white', 'style'=>'color: #FFF;']) }}>
    {{ $value ?? $slot }}
</label>
