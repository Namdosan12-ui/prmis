<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRMIS EPH</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            background: rgba(246, 247, 251, 1);
            margin: 0;
            padding: 0;
        }

        /* Topbar Styles */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #344054;
            color: white;
            padding: 0 1rem;
            height: 57px;
        }

        /* Navbar Styles */
        .navbar {
            display: flex;
            align-items: center;
        }

        .icon {
            display: flex;
            align-items: center;
            padding: 0 1rem;
        }

        .navbar::before {
            content: "";
            height: 19px;
            background-color: #F8796B;
            margin-left: 1rem;
        }

        /* Logo Styles */
        .logo {
            color: white;
            font-size: 15px;
            font-family: sans-serif;
            font-weight: 600;
            padding-left: 1rem;
            letter-spacing: 10px;
        }

        /* Philippine Time Styles */
        .ph-time {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: white;
            font-weight: 600;
            gap: 10px;
        }

        .ph-time-element,
        .ampm {
            font-size: 1rem;
        }

        .date-day {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            color: white;
        }

        #phDay,
        #phFullDate {
            font-size: 1rem;
            font-weight: 600;
        }

        /* Main Content */
        .main-content {
            padding: 20px;
        }

        /* Section Titles */
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        /* Cards */
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .card-text {
            color: #344054;
        }

        /* Footer */
        .footer {
            background-color: #344054;
            color: white;
            padding: 20px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-content .contact-info {
            text-align: left;
        }

        .footer-content .contact-info p {
            margin: 0.5rem 0;
        }

        .footer-content .logo {
            display: flex;
            align-items: center;
        }

        .footer-content .logo img {
            height: 50px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- Topbar -->
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

    <!-- Main Content -->
    <div class="main-content container mx-auto py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold mb-4">Welcome to PRMIS EPH</h2>
            <p class="text-gray-700 text-lg">Explore our easily accessible facility today and uncover comprehensive healthcare solutions at EPH Multi-Specialty and Diagnostic Center Inc.</p>
        </div>

        <!-- Services Section -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card">
                <img src="annual_pe.jpg" alt="Annual PE">
                <div class="card-body">
                    <h3 class="card-title">Annual PE</h3>
                    <p class="card-text">Comprehensive annual physical exams to ensure your health and wellbeing.</p>
                </div>
            </div>
            <div class="card">
                <img src="laboratory.jpg" alt="Laboratory">
                <div class="card-body">
                    <h3 class="card-title">Laboratory</h3>
                    <p class="card-text">State-of-the-art laboratory services for accurate and timely results.</p>
                </div>
            </div>
            <div class="card">
                <img src="consultation.jpg" alt="Consultation">
                <div class="card-body">
                    <h3 class="card-title">Consultation</h3>
                    <p class="card-text">Professional consultations with our experienced medical team.</p>
                </div>
            </div>
            <div class="card">
                <img src="pharmacy.jpg" alt="Pharmacy">
                <div class="card-body">
                    <h3 class="card-title">Pharmacy</h3>
                    <p class="card-text">Quality pharmaceutical services with a wide range of medications.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container mx-auto footer-content">
            <div class="contact-info">
                <h4>Contact</h4>
                <p>Email: <a href="mailto:info@eaglespharmahealth.com" class="underline text-white">info@eaglespharmahealth.com</a></p>
                <p>Phone: <a href="tel:+639171257121" class="underline text-white">+63 917 1257 121</a></p>
                <p>Address: G/F YAP BLDG., TIBANGA HIGHWAY, SANTIAGO, Iligan City 9200 Lanao Del Norte, Philippines</p>
            </div>
            <div class="logo">
                <img src="logo.png" alt="EPH Logo">
                <p>EPH Multi-Specialty & Diagnostic Center</p>
            </div>
        </div>
    </footer>

</body>
</html>
