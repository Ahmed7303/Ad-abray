<h2 class="road_map-main-title">
    {{ __('strings.border_title_'.$province) }}
  </h2>

<div class="road_map-tabs">
    @if (count($borders->where('district', $province)) > 0)
        @foreach ($borders->where('district', $province) as $item)
            <div class="road_map-tabs-title {{$province}}Tab {{ $loop->index == 0 ? 'active' : '' }}"
                data-tab="#{{ preg_replace('/\s+/', '', $item->border) }}">
                {{ $item->border }}
            </div>
        @endforeach
    @endif
</div>
@if (count($borders->where('district', $province)) > 0)
    @foreach ($borders->where('district', $province) as $border_item)
        <div class="road_map-info {{$province}}Item
             {{ $loop->index == 0 ? 'active' : '' }}" id="{{ preg_replace('/\s+/', '', $border_item->border) }}">

            <div class="road_map-col">
                <h4 class="road_map-col-title in">
                    {{ __('strings.border_in') }}
                </h4>
                @if (count($border_item->items->where('type', 'in')) > 0)
                    @foreach ($border_item->items->where('type', 'in') as $item)
                        <div class="road_map-info-row">
                            <span>
                                <img src="{{ asset('storage/' . $item->image) }}" alt="icon">
                            </span>
                            <p>{{ $item->title }}</p>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="road_map-col">
                <h4 class="road_map-col-title out">
                    {{ __('strings.border_out') }}
                </h4>
                @if (count($border_item->items->where('type', 'out')) > 0)
                    @foreach ($border_item->items->where('type', 'out') as $item)
                        <div class="road_map-info-row">
                            <span>
                                <img src="{{ asset('storage/' . $item->image) }}" alt="icon">
                            </span>
                            <p>{{ $item->title }}</p>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    @endforeach
@endif