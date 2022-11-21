<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Weibo 微聊</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav jsutify-content-end">
                <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">幫助指南</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">登入</a></li>
            </ul>
        </div>
    </div>
</nav>
