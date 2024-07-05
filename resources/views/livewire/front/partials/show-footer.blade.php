<footer id="footer" class="footer">

    <div class="container">
        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">gidigood.com</strong> <span>All Rights
                    Reserved</span></p>
        </div>
        <div class="social-links d-flex justify-content-center">
            @if (getSetByName('twitter') !== null)
                <a href="{{getSetByName('twitter')->value}}" target="_blank"><i class="bi bi-twitter-x"></i></a>
            @endif
            @if (getSetByName('instagram') !== null)
                <a href="{{getSetByName('instagram')->value}}" target="_blank"><i class="bi bi-instagram"></i></a>
            @endif
            @if (getSetByName('linkedin') !== null)
                <a href="{{getSetByName('linkedin')->value}}" target="_blank"><i class="bi bi-linkedin"></i></a>
            @endif
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer>
