<div class="appBottomMenu">
    <a href="{{ route('tpk.index') }}" class="item {{ Request::is('tpk/dashboard') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>HOME</strong>
        </div>
    </a>
    <a href="{{ route('tpk.catin.index') }}" class="item {{ Request::is('tpk/catin') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="people-outline"></ion-icon>
            <strong>CATIN</strong>
        </div>
    </a>
    <a href="{{ route('tpk.bumil.index') }}" class="item {{ Request::is('tpk/bumil') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="heart-outline"></ion-icon>
            <strong>BUMIL</strong>
        </div>
    </a>
    <a href="{{ route('tpk.pps.index') }}" class="item {{ Request::is('tpk/pps') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="sparkles-outline"></ion-icon>
            <strong>PPS</strong>
        </div>
    </a>
    <a href="{{ route('tpk.baduta.index') }}" class="item {{ Request::is('tpk/baduta') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="happy-outline"></ion-icon>
            <strong>BADUTA</strong>
        </div>
    </a>
</div>