<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>

@if($attributes->input->type === 'file')
<div {{ $attributes->file_wrapper }}>
    <label {{ $attributes->file_label }}>
        <input
            {{ $attributes->file_input->only('class') }}
            {{ $attributes->except('class') }}
        />
        <span class="file-cta">
            <span class="file-icon">
                <i {{ $attributes->file_icon }}></i>
            </span>
            <span class="file-label">
                Choose a file…
            </span>
        </span>
    </label>
</div>
@else
<input {{ $attributes }} />
@endif
