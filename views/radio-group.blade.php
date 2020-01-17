<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>
<?php /** @var \Galahad\Aire\Support\OptionsCollection $options */ ?>

@isset($prepend_empty_option)
<label {{ $attributes->label }}>
    <input
        {{ $attributes->except('id', 'value', 'checked') }}
        value="{{ $prepend_empty_option->value }}"
        {{ $attributes->isValue($prepend_empty_option->value) ? 'checked' : '' }}
    />
    {{ $prepend_empty_option->label }}
</label>
@endisset

@foreach($options->getOptions() as $option_value => $option_label)

<label {{ $attributes->label }}>
    <input
        {{ $attributes->except('id', 'value', 'checked') }}
        value="{{ $option_value }}"
        {{ $attributes->isValue($option_value) ? 'checked' : '' }}
    />
    {{ $option_label }}
</label>

@endforeach
