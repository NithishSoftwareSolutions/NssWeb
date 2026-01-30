<?php
include_once 'include/loader.php';
include_once 'include/header.php';
include_once 'config.php';
error_reporting(0);
?>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.8;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        color: #333;
    }

    .container {
        max-width: 900px;
        margin: 50px auto;
        background-color: #fff;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1, h2 {
        color: #0056b3;
    }

    ul {
        margin-left: 20px;
    }

    a {
        color: #0056b3;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        .container {
            padding: 20px;
        }
    }
</style>
<body>
    <div class="container">
        <h1>Privacy Policy</h1>
        <p><strong>Effective Date:</strong> <?php echo date("F d, Y"); ?></p>

        <p>At <strong>YKNews</strong>, we are committed to protecting your privacy. This policy explains how we collect, use, and safeguard your personal data when you use our mobile application.</p>

        <h2>1. Information We Collect</h2>
        <p>We collect the following personal information when you create an account or use the app:</p>
        <ul>
            <li>Email Address</li>
            <li>Password (encrypted)</li>
            <li>Phone Number</li>
            <li>Location Data (if permitted)</li>
        </ul>

        <h2>2. How We Use Your Information</h2>
        <p>Your information is used to:</p>
        <ul>
            <li>Manage user accounts and preferences</li>
            <li>Display relevant, location-based news</li>
            <li>Enable commenting and interaction with content</li>
            <li>Support reporting and blocking features</li>
            <li>Maintain the safety and integrity of the platform</li>
        </ul>

        <h2>3. Comments, Blocking, and Reporting</h2>
        <p>Users may comment on news articles, report inappropriate content, or block other users. Any comment or content that is <strong>reported by 10 users</strong> will be automatically removed from the platform.</p>

        <h2>4. Data Storage and Security</h2>
        <p>We implement industry-standard security measures to protect your data. Passwords are securely hashed and not visible to anyone, including our team.</p>

        <h2>5. Location Information</h2>
        <p>If location permissions are enabled, we may collect your device's location to improve your news experience. This can be turned off at any time through your device settings.</p>

        <h2>6. Your Rights</h2>
        <p>You have the right to:</p>
        <ul>
            <li>Access or update your personal information</li>
            <li>Request deletion of your account</li>
            <li>Disable location tracking</li>
        </ul>

        <h2>7. Children's Privacy</h2>
        <p>YKNews does not knowingly collect personal data from children under 13. If we become aware of such data collection, we will delete it immediately.</p>

        <h2>8. Changes to This Policy</h2>
        <p>We may update this Privacy Policy. If we do, changes will be posted here, and major updates will be notified within the app.</p>

        <h2>9. Contact Us</h2>
        <p>If you have any questions, concerns, or requests, please contact us at:</p>
        <ul>
            <li>Email: <a href="mailto:yknews.in@gmail.com">yknews.in@gmail.com</a></li>
            <li>Business Name: YKNews</li>
            <li>Location: Visakhapatnam, Andhra Pradesh</li>
        </ul>
    </div>
























  <?php
include_once 'include/footer.php';
?>
