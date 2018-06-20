<footer>
    @if (Auth::check())
        {!! link_to_route('events.index', 'TOPへ戻る') !!}
        {!! link_to_route('events.create', '新規Eventの投稿') !!}
        {!! link_to_route('events.profile', 'プロフィール') !!}
        @endif
</footer>