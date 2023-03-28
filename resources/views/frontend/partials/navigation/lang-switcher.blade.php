<div class="lang-switcher d-none d-sm-block dropdown">
    <a href="#" class="text-uppercase" data-bs-toggle="dropdown">
        <span class="me-1">
            <i class="fa-solid fa-globe"></i>
        </span>
        {{ app()->getLocale() }}
    </a>
    <div class="dropdown-menu dropdown-menu-end">
        <ul>
            {{-- TODO:: Fix output of loop variables // chech frontend --}}
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
