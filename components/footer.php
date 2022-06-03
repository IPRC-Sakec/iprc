<!-- Footer -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 ">
                <h2>Our College</h2>
                <hr>
                <p><i class="fas fa-map-marker-alt"></i> Mahavir Education Trust Chowk, W.T Patil Marg, D P Rd, next to Duke's Company, Chembur, Mumbai, Maharashtra 400088</p>
                <p><i class="fas fa-phone"></i> 022-25580854, 022-67978100</p>
                <p><i class="fas fa-envelope"></i> ipr@sakec.ac.in</p>
            </div>
            <div class="col-sm-3">
                <h2>Quick Links</h2>
                <hr>
                <p>ipr@sakec.ac.in</p>
                <p>ipr@sakec.ac.in</p>
                <p>ipr@sakec.ac.in</p>
                <p>ipr@sakec.ac.in</p>
            </div>
            <div class="col-sm-3">
                <h2>Recent News and Courses</h2>
                <hr>
                <p><a href="<?php  //echo $news['links']; ?>" target="new" style="text-decoration: none;"><?php  //echo $news['headlines'];?></a></p>
            </div>
            <div class="col-sm-3">
                <h2>Get In Touch For Any Query</h2>
                <hr>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="mb-3 form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="mb-3 form-group">
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Query"></textarea>
                    </div>
                    <button type="submit" name="contactUs" class="mb-2 btnp">Send Message</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="copyright">
            <div class="row justify-content-between">
                <div class="col-4">
                    © IPR SAKEC, All Right Reserved.
                </div>
                <div class="col-4 text-center">
                    Follow Us : &nbsp
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- footer ends -->