@props(['title','route','value','icon'])
<ul class="mt-2">
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg " aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
            href="{{ route($route) }}">

            <span class="ml-5 flex text-white {{ $value }}">
                <x-icon name="{{ $icon }}" class="mr-4" />{{ $title }}
            </span>
        </a>
    </li>
</ul>