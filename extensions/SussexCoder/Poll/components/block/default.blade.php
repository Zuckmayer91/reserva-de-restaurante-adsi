<div class="container text-center">
    <div class="row">
        <div class="col-12">
            <h2 class="display-5 mb-3 text-uppercase">{{ $title }}</h2>
        </div>
    </div> 

    <div class="row">
    @if (count($menuItems))
        @foreach ($menuItems as $item)
            <div class="col-sm-{{ round(12 / count($menuItems)) }} mb-3 mb-sm-0">
                <div class="card h-100">
                    @if ($item->hasMedia())
                        <img
                            class="card-img-top"
                            src="{{ $item->getThumb([
                                'width' => 200,
                                'height' => 150,
                            ]) }}" alt="{{ $item->getBuyableName() }}"
                        />
                    @endif
                    <div class="card-body">
                        {!! form_open([
                            'id' => 'vote-form-{{ $item->getBuyableName() }}',
                            'role' => 'form',
                            'method' => 'POST',
                            'data-request' => $__SELF__.'::onVote',
                        ]) !!}
                        <h4 class="card-title">
                            {{ $item->getBuyableName() }}
                        </h4>
                        <p class="card-text">{{ $item['menu_description'] }}</p>
                        <input
                            type="hidden"
                            name="menuItemId"
                            class="form-control"
                            value="{{$item['menu_id']}}"
                        />
                        <input type="submit" onclick="clickVote($(this))" value="{{ $buttonText }}" class="btn btn-primary text-uppercase">
                        {!! form_close() !!}
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-sm-12 mb-6">
            <p>@lang('sussexcoder.poll::default.text_no_poll')</p>
        </div>
    @endif
    </div>
</div>

<script type="application/javascript">
    function clickVote($button) {
        $button.val('Thanks for Voting');
        $button.prop('disabled', true);
        $button.submit();
    }
</script>