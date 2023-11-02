<div>

    <div class="row">

        @if (session()->has('message'))
            <div class="col-md-12 mt-3 position-relative">
                <div class="box">
                    <div class="box-body">
                        <div style="background:#18d26b;color:white;" class="alert">
                            <a href="#" class="close text-white" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

            @foreach ($posts as $post)
                <div class="col-md-3 mt-3 position-relative">
                    <div class="box pt-3">
                        <div class="box-header with-border">
                            <h4 class="box-title">{{ $post->title }}</h4>
                        </div>
                        <div class="box-body">
                            <div style="">
                                <img src="{{ asset('storage/Posts/' . $post->photo) }}" class="w-75 h-75 img-responsive"
                                    width="100%" alt="">
                            </div>
                            <p class="box-title mt-3"><a href="{{ $post->link }}">{{ $post->content }}</a></p>
                            <p class="m-3">

                                <a href="{{ $post->link }}" target="_blank"
                                    onclick="event.preventDefault();
        if(confirm('Continue with Claiming?')){
        document.getElementById('form-delete-{{ $post->id }}').submit()}"
                                    class="btn btn-sm" title="Claim record"
                                    style="background:#99409a;color:white">Claim</a>
                            <form style="display: none;" action="{{ route('home.dailypost.claim', $post->id) }}"
                                id="{{ 'form-delete-' . $post->id }}" method="post">
                                @csrf
                                @method('post')
                            </form>


                        </div>

                    </div>
                </div>
            @endforeach
       

    </div>
    {{ $posts->links() }}

</div>
