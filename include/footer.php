<style>
  footer {
  background-color: #326FA7;
  color: white;
  padding: 20px 0;
  text-align: center;
  font-family: 'Bitter';
}
 
.footer-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}
 
.contact-info {
  margin-bottom: 10px;
}
 
.contact-info a {
  color: white;
  text-decoration: none;
}
 
.social-media {
  display: flex;
  align-items: center;
  position: relative;
}

.social-media::before,
.social-media::after {
  content: '';
  flex: 1;
  height: 1px;
  background-color: white;
  margin: 0 10px;
}

.social-media a img {
  width: 24px;
  height: 24px;
  margin: 0 10px;
}
 
.company-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 10px;
}
 
.company-info img {
  /* width: 50px;
  height: 50px; */
  margin-bottom: 10px;
}
 
.footer-nav a {
  color: white;
  text-decoration: none;
  margin: 0 5px;
}
 
.footer-nav a:hover {
  text-decoration: underline;
}
.contact-info1 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.contact-left{
  margin-left: 15%;
}
.contact-right{
  margin-right:15%;
}
.email{
  color:white;
}
.phone{
  color:white;
}
</style>
<footer>

<div class="social-media">
<a href="
https://www.instagram.com/nss_software?igsh=c3RxOHExcGc4cTMz"
target="_blank"><img src="assets/img/Vector.png" alt="Instagram"></a>
<a href="
https://www.facebook.com/profile.php?id=61560461565737"
target="_blank"><img src="assets/img/Vector (1).png" alt="Facebook"></a>
<a href="
https://whatsapp.com/channel/0029VaXwNMdInlqItVQOL332"
target="_blank"><img src="assets/img/Vector (2).png" alt="WhatsApp"></a>
</div>
<div class="footer-container">
<!-- <div class="contact-info">
<p>Contact: <a href="mailto:info@nss.org.com">info@nss.org.com</a></p>
<p>Phone: <a href="tel:+91891406856">0891-406856</a></p>
</div> -->
<div class="contact-info1">
  <p class="contact-left">Contact: <a href="mailto:info@nssorg.com" class="email">info@nssorg.com</a></p>
  <p class="contact-right">Phone: <a href="tel:+91891406856" class="phone">0891-406856</a></p>
</div>
<div class="company-info">
<img src="assets/img/Group 90.png" alt="Nitish Software Solutions Logo">
<p>&copy; 2023 Nitish Software Solutions Pvt. Ltd.</p>
</div>
<nav class="footer-nav">
<a href="index.php">Home</a> |
<a href="technologies.php">Technologies</a> |
<a href="our_people.php">Our People</a> |
<a href="job.php">Internships</a> |
<a href="solutions.php">Solutions</a> |
<a href="contact.php">Contact Us</a>
</nav>
</div>
</footer>
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
  const socialMediaLinks = document.querySelectorAll('.social-media a');
  socialMediaLinks.forEach(link => {
    link.setAttribute('target', '_blank');
  });
});
</script>
