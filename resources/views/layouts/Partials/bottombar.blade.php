<div class="sc-bottom-bar">
    <a href="{{ route('home') }}" class="sc-menu-item sc-current">
        <i data-feather="home"></i>
    </a>
    <a class="sc-menu-item" href="">
        <i data-feather="repeat"></i>
    </a>
    <a href="javascript:void(0);" data-toggle="push-menu" role="button" class="sc-menu-item">
        <i data-feather="list"></i>
    </a>
    {{-- <a class="sc-menu-item" href="https://www.learnify.ng/logout">
        <i data-feather="log-out"></i>
    </a> --}}
    <a id="logout" href="{{ route('logout') }}" class="sc-menu-item"
        onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
        <i data-feather="log-out"></i>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </a>
</div>
