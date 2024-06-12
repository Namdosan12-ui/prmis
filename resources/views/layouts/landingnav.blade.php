<div class="topbar">
    <div class="navbar">
        <div class="icon">
            <div class="logo">EPH</div>
        </div>
    </div>
    <div class="ph-time">
        <div class="ph-time-element" id="phTime">10:30</div>
        <div class="ampm" id="ampm">AM</div>
    </div>
    <div class="date-day">
        <div id="phDay">Monday</div>
        <div id="phFullDate">June 12, 2023</div>
    </div>
    <div>
        <a href="{{ route('login') }}" class="text-white hover:underline">Login</a>
    </div>
</div>

<script>
    function updateTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';

        document.getElementById('phTime').textContent = `${hours % 12 || 12}:${minutes}:${seconds}`;
        document.getElementById('ampm').textContent = ampm;

        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const date = now.toLocaleDateString(undefined, options);
        document.getElementById('phDay').textContent = date.split(',')[0];
        document.getElementById('phFullDate').textContent = date.split(',').slice(1).join(',').trim();
    }

    updateTime();
    setInterval(updateTime, 1000);
</script>
