@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/chi-siamo',
            'label' => 'Chi siamo',
            'active' => false,
        ],
        [
            'url' => '/contatti',
            'label' => 'Contatti',
            'active' => false,
        ],
    ];
@endphp

<header>
    <nav>
        <ul class="list-unstyled d-flex justify-content-center ">
            @foreach ($links as $link)
                <li>
                    @if ($link['active'])
                        <a class="me-3" href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    @else
                        <del class="me-3">
                            {{ $link['label'] }}
                        </del>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
</header>
