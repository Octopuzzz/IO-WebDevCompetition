<nav class="nav-bar">
    <div class="nav-logo">
        <h1>IC Food</h1>
    </div>
    <div class="nav-link">
        <ul class="nav-link-isi">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="./dashboard">Recipe</a></li>
            <li><a href="#contact-id">Contact</a></li>
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
    {{-- button circle --}}
    <div class="nav-circle">
        <div class="circle"></div>
    </div>
    {{-- responsive --}}
    <div class="nav-responsive">
        <div class="nav-link">
            <ul class="nav-link-isi">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Recipe</a></li>
                <li><a href="#">Contact</a></li>
                @guest
                    <li class="nav-sign-mobile">
                        <a href="/login">
                            <button>Sign Up</button>
                        </a>
                    </li>
                @else
                    <li class="nav-sign-mobile">
                        <a href="/logout">
                            <button>Log Out</button>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>

</nav>
