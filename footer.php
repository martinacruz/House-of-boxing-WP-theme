<footer>
        <div class="footer-container">
            <div class="nav-links-container">
                <ul class="nav-links">
                    <li class="nav-link"><a href="#">About</a></li>
                    <li class="nav-link"><a href="#">Classes</a></li>
                    <li class="nav-link"><a href="#">Membership</a></li>
                    <li class="nav-link"><a href="#">Coaches</a></li>
                    <li class="nav-link"><a href="#">Events</a></li>
                </ul>
            </div>
            <div id="map"></div>
            <div class="terms-copy">
                <div class="terms">
                    <p>PRIVACY POLICY | TERMS OF USE FOR WEBSITE | DISCLAIMER</p>
                </div>
                <div class="copy">
                    <p>
                        COPYRIGHT © 2022 HOB BOXING GYM. ALL RIGHTS RESERVED.
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