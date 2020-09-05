<footer>
        <!-----------------------------footer--------------------------------->
            <section class="foot row">
                <div class="row footer">
                    <div class="col-xs-12 col-sm-6 col-md-3 foot-cont wow fadeInUp" data-wow-duration="1s">
                        <img src="http://www.sedia-furniture.com/images/footer-logo.png" alt="footer-logo">
                        <p class="foot-p1">Sedia Furniture , is manufacturer of fine classic and contemporary furniture to the most established and innovative italian and european furniture designers with combination of exceptional quality.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 foot-cont wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <p class="foot-head">Subscribe</p>
                        <input type="text" class="col-xs-12">
                        <p class="foot-p">Subscribe to receive all our new.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 foot-cont wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <p class="foot-head">Explore</p>
                        <p class="foot-p">Inside Us</p>
                        <p class="foot-p">Flickr</p>
                        <p class="foot-p">Google</p>
                        <p class="foot-p">Forum</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 foot-cont wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                        <p class="foot-head">Support</p>
                        <p class="foot-p">Contact Us</p>
                        <p class="foot-p">Market Blog</p>
                        <p class="foot-p">Help Center</p>
                        <p class="foot-p">Pressroom</p>
                    </div>
                </div>
            </section>
        <!-----------------------------footer--------------------------------->
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".num").counterUp({delay:10,time:2000});
            const el = document.querySelector('.num');
            new Waypoint( {
                element: el,
                handler:function() {
                    counterUp( el )
                    this.destroy()
                },
                offset:'bottom-in-view'
            })
        });
        
    </script>
    <script src="js/mixitup.min.js"></script>
    <script>
		var containerEl2 = document.querySelector('.filter22');

		var mixer = mixitup(containerEl2);
    </script>
    <script src="js/wow.min.js"></script>
    <script>
		new WOW().init();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                $("#sub").click(function(e){
                                    e.preventDefault();
                                    var name = $("#name").val();
                                    var email = $("#email").val();
                                    var mess = $("#mess").val();
                                    var url = "after_submit.php";
                                    $.post(url, {name:name,email:email,mess:mess},function(res){
                                        if(res == "valid"){
                                            $(".sent").text("Message Sent").css("animation","fade 3s ease-in-out forwards");
                                            $(".no-name").hide();
                                            $(".no-email").hide();
                                            $(".no-mess").hide();
                                        }
                                        else{
                                            $(".no-name").show();
                                            $(".no-email").show();
                                            $(".no-mess").show();
                                            var errorarr = res.split("-");
                                            if(errorarr[0] != ""){
                                                $(".no-name").text(errorarr[0]);
                                            }else if(errorarr[1] != ""){
                                                $(".no-name").text(errorarr[1]);
                                            }else{
                                                $(".no-name").text("");
                                            }

                                            if(errorarr[2] != ""){
                                                $(".no-email").text(errorarr[2]);
                                            }else if(errorarr[3] != ""){
                                                $(".no-email").text(errorarr[3]);
                                            }else{
                                                $(".no-email").text("");
                                            }

                                            if(errorarr[4] != ""){
                                                $(".no-mess").text(errorarr[4]);
                                            }else{
                                                $(".no-mess").text("");
                                            }
                                        }
                                    });
                                });
                            });
                        </script>
    <script src="js/script.js"></script>
</body>
</html>