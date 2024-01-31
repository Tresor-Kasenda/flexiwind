@push('scripts')
    <script type="module">
        
    </script>
@endpush

<div data-accordion data-default-value="accordion-1" data-type="single" {{ $attributes }}>
    {{ $slot }}
</div>
