<!-- resources/views/layouts/sidebar.blade.php -->
<div class="sidebar">
    <div class="sidebar-header">
        PRMIS
    </div>
    <nav>
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="icon">🏠</span>
                    {{ __('Dashboard') }}
                </a>
            </li>
            <li>
                <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <span class="icon">👥</span>
                    {{ __('Users') }}
                </a>
            </li>
            <li>
                <a href="{{ route('patients.index') }}" class="{{ request()->routeIs('patients.*') ? 'active' : '' }}">
                    <span class="icon">🧍</span>
                    {{ __('Patients') }}
                </a>
            </li>
            <li>
                <a href="{{ route('appointments.index') }}" class="{{ request()->routeIs('appointments.*') ? 'active' : '' }}">
                    <span class="icon">📅</span>
                    {{ __('Appointments') }}
                </a>
            </li>
            <li>
                <a href="{{ route('laboratory_results.index') }}" class="{{ request()->routeIs('laboratory_results.*') ? 'active' : '' }}">
                    <span class="icon">🧪</span>
                    {{ __('Laboratory Results') }}
                </a>
            </li>
            <li>
                <a href="{{ route('payments.index') }}" class="{{ request()->routeIs('payments.*') ? 'active' : '' }}">
                    <span class="icon">💰</span>
                    {{ __('Payments') }}
                </a>
            </li>
            <li>
                <a href="{{ route('laboratory_services.index') }}" class="{{ request()->routeIs('laboratory_services.*') ? 'active' : '' }}">
                    <span class="icon">🩺</span>
                    {{ __('Laboratory Services') }}
                </a>
            </li>
            <li>
                <a href="{{ route('transactions.index') }}" class="{{ request()->routeIs('transactions.*') ? 'active' : '' }}">
                    <span class="icon">🔄</span>
                    {{ __('Transactions') }}
                </a>
            </li>
            <li>
                <a href="{{ route('queues.index') }}" class="{{ request()->routeIs('queues.*') ? 'active' : '' }}">
                    <span class="icon">🔢</span>
                    {{ __('Queues') }}
                </a>
            </li>
            <li>
                <a href="{{ route('profiles.index') }}" class="{{ request()->routeIs('profiles.*') ? 'active' : '' }}">
                    <span class="icon">👤</span>
                    {{ __('Profiles') }}
                </a>
            </li>
        </ul>
    </nav>
</div>
