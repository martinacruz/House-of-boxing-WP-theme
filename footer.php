<footer>
        <div class="footer-container">
            <div class="nav-links-container">
                <ul class="nav-links">
                    <li class="nav-link"><a href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li class="nav-link"><a href="<?php echo site_url('/classes'); ?>">Classes</a></li>
                    <li class="nav-link"><a href="<?php echo site_url('/membership'); ?>">Membership</a></li>
                    <li class="nav-link"><a href="<?php echo site_url('/coaches'); ?>">Coaches</a></li>
                    <li class="nav-link"><a href="<?php echo site_url('/events'); ?>">Events</a></li>
                </ul>
            </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13433.448264981676!2d-117.0658559!3d32.6764163!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa667694176a266d9!2sHouse%20of%20Boxing!5e0!3m2!1sen!2sus!4v1652222714983!5m2!1sen!2sus" id="map" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            <div class="terms-copy">
                <div class="terms">
                    <p>PRIVACY POLICY | TERMS OF USE FOR WEBSITE | DISCLAIMER</p>
                </div>
                <div class="copy">
                    <p>
                        COPYRIGHT © 2019 3RD STREET BOXING GYM. ALL RIGHTS RESERVED
                    </p>
                </div>
            </div>
        </div>
    </footer>

<script>
    // Initialize and add the map
function initMap() {
// The location of Uluru
const uluru = { lat: 32.676465567600715, lng: -117.06580746553215 };
// The map, centered at Uluru
const map = new google.maps.Map(document.getElementById("map"), {
zoom: 15,
center: uluru,
});
// The marker, positioned at Uluru
const marker = new google.maps.Marker({
position: uluru,
map: map,
});
}

window.initMap = initMap;

</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPDxcix2lJ-tJp6g_vJ4kop7bf6E1L9hc&callback=initMap">
</script>
<?php wp_footer(); ?>
</body>
</html>