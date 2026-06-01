<?php include('header.php'); ?>

<style>
    /* Section styling */
    .about-section {
        background: #f9f9f9;
        padding: 50px 0;
    }
    .about-title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        color: #2c3e50;
    }
    .about-text {
        font-size: 16px;
        line-height: 1.7;
        color: #555;
        margin-bottom: 20px;
    }
    .highlight {
        color: #007bff;
        font-weight: bold;
    }
    .about-img {
        border-radius: 10px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease-in-out;
    }
    .about-img:hover {
        transform: scale(1.02);
    }

    /* Mission Section */
    .mission-section {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-top: 30px;
    }
    .mission-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #2c3e50;
    }

    /* Team Section */
    .team-section {
        padding: 50px 0;
    }
    .team-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        padding: 20px;
        text-align: center;
        transition: 0.3s;
    }
    .team-card:hover {
        transform: translateY(-5px);
    }
    .team-img {
        border-radius: 50%;
        width: 120px;
        height: 120px;
        object-fit: cover;
        margin-bottom: 15px;
    }
    .team-name {
        font-weight: bold;
        font-size: 18px;
    }
    .team-role {
        color: #777;
        font-size: 14px;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .about-title {
            font-size: 24px;
        }
        .about-text {
            font-size: 14px;
        }
        .mission-section {
            padding: 20px;
        }
    }
</style>

<div class="about-section container">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=800&q=80" alt="About Us" class="about-img">
        </div>
        <div class="col-md-6">
            <h2 class="about-title">About <span class="highlight">Our Real Estate</span></h2>
            <p class="about-text">
                Welcome to <span class="highlight">Our Real Estate</span>, where we believe finding your dream home should be an exciting journey. 
                With years of experience in the real estate industry, we offer trusted guidance, transparent deals, 
                and properties that truly match your lifestyle and budget.
            </p>
            <p class="about-text">
                Whether you're buying, selling, or renting, our dedicated team ensures your experience is smooth, 
                stress-free, and successful.
            </p>
        </div>
    </div>

    <div class="mission-section">
        <h3 class="mission-title">Our Mission</h3>
        <p>
            To connect people with their perfect properties through expert advice, innovative technology, and 
            genuine customer care. We aim to make real estate transactions simple, fast, and reliable.
        </p>
    </div>
</div>

<?php include('footer.php'); ?>
