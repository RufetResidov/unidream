<!--breadcrumb area start-->
{{-- {{ dd($breadcrumbs)  }} --}}
<section class="breadcrumb-area bg-primary-gradient">
    <div class="container">

        <div class="breadcrumb-content text-center d-flex justify-content-between align-items-center">
            <h2 class="mb-3">{{ $breadcrumbs[count($breadcrumbs) - 1]->title }}</h2>
            @if (count($breadcrumbs) > 1)
                <nav>
                    <ol class="breadcrumb">
                        @foreach ($breadcrumbs as $item)
                            @if ($item->url && !$loop->last)
                                <li class="breadcrumb-item"><a href="{{ $item->url }}">{{ $item->title }} </a> &nbsp;/
                                </li>
                            @elseif(!$loop->first)
                                <li class="breadcrumb-item">{{ $item->title }}</li>
                            @endif
                        @endforeach
                    </ol>
                </nav>
            @endif
        </div>

    </div>
</section>
<!--breadcrumb area end-->
