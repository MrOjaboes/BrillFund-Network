<div class="d-flex align-items-center logo-box justify-content-start d-none d-sm-block">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
        <!-- logo-->
        <div class="logo-mini w-50">
            <span class="light-logo">
                @if (Auth::user()->profile_photo == null)
                <img src="/FrontEnd/rockie/images/logo.svg" class="w-50" alt="">
                @else
                <img src="{{ asset('/storage/Profiles/'.Auth::user()->profile_photo)}}" class="w-50" alt="">nj
                @endif
                 
            </span>

        </div>
        <div class="logo-lg h-50">
            <span class="light-logo">
                {{ Auth::user()->name }}

            </span>
        </div>
    </a>
</div>
