@php
    $items = [
        [
            'image' => 'resources/img/buy-comics-digital-comics.png',
            'text' => 'digital comics',
        ],
        [
            'image' => 'resources/img/buy-comics-merchandise.png',
            'text' => 'dc merchandise',
        ],
        [
            'image' => 'resources/img/buy-comics-subscriptions.png',
            'text' => 'subscription',
        ],
        [
            'image' => 'resources/img/buy-comics-shop-locator.png',
            'text' => 'comic shop locator',
        ],
        [
            'image' => 'resources/img/buy-dc-power-visa.svg',
            'text' => 'dc power visa',
        ],
    ];
@endphp

<div class="icons-container">
    <div class="icons-content">
        @foreach ($items as $item)
            <div class="icons-item">
                <img src="{{ Vite::asset($item['image']) }}" alt="" />
                <span>{{ $item['text'] }}</span>
            </div>
        @endforeach
    </div>
</div>
