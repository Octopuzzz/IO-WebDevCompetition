<nav class="nav-bar">
    <div class="nav-logo">
        <h1>IC Food</h1>
    </div>
    <div class="nav-link">
        <ul class="nav-link-isi">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Recipe</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    @guest
        <div class="nav-button">
            <a href="/login">
                <button>Sign Up</button>
            </a>
        </div>
    @else
        <div class="nav-button">
            <a href="/logout">
                <button>LogOut</button>
            </a>
        </div>
    @endguest
</nav>