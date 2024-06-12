import './bootstrap';
import { createApp } from 'vue';

// Ensure the sidebar is visible when the document is fully loaded
document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.querySelector(".sidebar");
    if (sidebar) {
        sidebar.style.left = "0"; // Ensure sidebar is shown
    }

    function updateTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';

        document.getElementById('phHours').textContent = hours % 12 || 12;
        document.getElementById('phMinutes').textContent = minutes;
        document.getElementById('phSeconds').textContent = seconds;
        document.getElementById('phAMPM').textContent = ampm;

        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const date = now.toLocaleDateString(undefined, options);
        document.getElementById('phDate').textContent = date;
    }

    updateTime();
    setInterval(updateTime, 1000);
});

// Create a new Vue instance
const app = createApp({});

// Register components here if you have any
// app.component('example-component', require('./components/ExampleComponent.vue').default);

// Mount the app to the DOM
app.mount('#app');
