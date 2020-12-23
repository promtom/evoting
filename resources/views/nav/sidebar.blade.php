<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('img/profil0.png')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <h4>{{ Auth::user()->name }}</h4>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                id="btn-logout" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} 
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{url('/home')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if(Auth::user()->status==1)                 
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu Admin</h4>
                </li>
                <li class="nav-item">
                    <a href="{{url('/calon')}}">
                        <i class="fas fa-crown"></i>
                        <p>Calon</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/user')}}">
                        <i class="fas fa-users"></i>
                        <p>User</p>
                    </a>
                </li>
                @endif
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu Pemilih</h4>
                </li>
                <li class="nav-item">
                    <a href="{{url('/vote')}}">
                        {{-- <i class="fas fa-plus-circle"></i> --}}
                        <i class="fas fa-check"></i>
                        <p>Vote</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/hasil')}}">
                        <i class="fas fa-trophy"></i>
                        <p>Hasil</p>
                    </a>
                </li>

                @if(Auth::user()->status==1) 
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Developer</h4>
                </li>
                <li class="nav-item">
                    <a href="{{url('/about')}}">
                        <i class="fas fa-flag"></i>
                        <p>About dev</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="mailto:skullhell3@gmail.com?subject=E-Voting&body=" rel="EMAIL" target="_blank">
                        <i class="fas fa-envelope"></i>
                        <p>Suggestion?</p>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->