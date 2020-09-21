<div class="fl-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="fl-sideleft-menu">
        @if(auth()->user()->user_type == 1)
            @include('backend.include.admin-menu')
            @endif

            @if(auth()->user()->user_type == 2)
                @include('backend.include.vendor-menu')
            @endif
    </ul><!-- fl-sideleft-menu -->

    <br>
</div><!-- fl-sideleft -->
