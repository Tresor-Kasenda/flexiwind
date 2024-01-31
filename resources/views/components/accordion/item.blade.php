@props([
    'label' => '',
    'type' => 'default',
    'variant' => [
        'solid' => 'rounded-md bg-gray-100 dark:bg-gray-900',
        'ghost' => 'rounded-md bg-gray-100/5 dark:bg-gray-900/5 border border-gray-200/30 dark:border-gray-800/20 data-[state=open]:bg-gray-100/80 dark:data-[state=open]:bg-gray-900/60 data-[state=open]:border-gray-200/50 dark:data-[state=open]:border-gray-800/40',
        'outline' => 'rounded-md border border-gray-200 dark:border-gray-800',
        'link' => '',
        'soft' => 'rounded-xl bg-gray-100 dark:bg-gray-900 shadow-md shadow-gray-200/30 dark:shadow-gray-800/20',
        'default' => 'border-b border-b-gray-100 dark:border-b-gray-900'
    ],
    'index' => 0,
    'style' => [
        'solid' => 'px-4 w-full flex justify-between items-center py-2 text-gray-800 dark:text-gray-200 font-medium text-lg ease-linear hover:bg-gray-200 dark:hover:bg-gray-800 rounded-md [&[aria-expanded=true]>svg]:rotate-180',
        'ghost' => 'px-4 w-full flex justify-between items-center py-2 text-gray-800 dark:text-gray-200 font-medium text-lg ease-linear hover:bg-gray-200/50 dark:hover:bg-gray-800/40 rounded-md [&[aria-expanded=true]>svg]:rotate-180',
        'outline' => 'px-4 w-full flex justify-between items-center py-2 text-gray-800 dark:text-gray-200 font-medium text-lg [&[aria-expanded=true]>svg]:rotate-180',
        'link' => 'px-4 pb-2 w-full flex justify-between items-center text-gray-800 dark:text-gray-200 font-medium text-lg hover:underline [&[aria-expanded=true]>svg]:rotate-180',
        'soft' => 'px-4 w-full flex justify-between items-center py-2 text-gray-800 dark:text-gray-200 font-medium text-lg ease-linear rounded-xl [&[aria-expanded=true]>svg]:rotate-180',
        'default' => 'px-4 w-full  flex justify-between items-center py-2 text-gray-800 dark:text-gray-200 font-medium text-lg [&[aria-expanded=true]>svg]:rotate-180'
    ]
])
<div data-accordion-item
     data-accordion-value="accordion-{{ $index }}" {{ $attributes->merge(['class' => $variant[$type]]) }}>
    <button type="button" data-accordion-trigger
            aria-label="toggle button" {{ $attributes->merge(['class' => $style[$type]]) }}>
        {{ $label }}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
             class="size-5 ease-linear duration-300">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </button>
    <div aria-hidden="true" data-accordion-content
         class="text-gray-700 dark:text-gray-300 duration-200 ease-linear overflow-hidden">
        <p class="p-4">
            {{ $slot }}
        </p>
    </div>
</div>
