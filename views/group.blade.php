<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>

<div {{ $attributes }}>
    {{ $label }}

    <div class="control">
        {{ $element }}
    </div>

    @if(!empty($errors))
    <p {{ $attributes->errors }}>
        {{ $errors[0] }}
    </p>
    @endif

    @isset($help_text)
    <p {{ $attributes->help_text }}>
        {{ $help_text }}
    </p>
    @endisset

</div>
