@if(!empty(config('domains.' .ASSET_DOMAIN)['ads']))
    <?php $ads = config('domains.' . ASSET_DOMAIN)['ads']; ?>
    @foreach($ads as $k => $v)
        @if($k<4)
            <div class="right-adv-box-content">
                <h4>Quảng cáo liên quan đến {{ $q }}</h4>
                    <div class="top-title">
                        <a target="_blank" href="{{ $v['domain'] }}">{{ $v['title'] }}</a>
                    </div>
                    <div class="link-adv-area">
                        <span class="adv-tag">Quảng cáo</span>
                        <a href="#" class="link-website">
                            <span>{{ $v['domain'] }}</span>
                        </a>
                    </div>
                    <div class="link-description">
                        <span>{{ $v['description'] }}</span>
                    </div>
                </div>
        @endif
    @endforeach
@endif
