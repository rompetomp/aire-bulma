<?php /** @var \Galahad\Aire\Elements\Attributes\Attributes $attributes */ ?>
<?php /** @var \Galahad\Aire\Support\OptionsCollection $options */ ?>
<div {{ $attributes->wrapper }}>
    <label {{ $attributes->label }}>
        <input {{ $attributes->input }} />
        <span class="file-cta">
            <span class="file-icon">
                <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
            Choose a file…
            </span>
        </span>
    </label>
</div>
