
!(function($) {
  "use strict";

  //groub 1 ....
  const activeImage = document.querySelector(".editor  .mug-modal .hinterground .active");
  const noimage = document.querySelector(".editor  .mug-modal .hinterground .noimage");

  const productImages = document.querySelectorAll("#content1 .list-images ul li img");
  function changeImage(e) {
    activeImage.src = e.target.src;
    $(activeImage).css('display' , "block");
  }
  productImages.forEach(image => image.addEventListener("click", changeImage));
  $('.noimage').click(function(){
    $(activeImage).css('display' , "none");
  })

    //groub 2....
    const activeImage2 = document.querySelector(".editor  .mug-modal .Körper .active2");
    const productImages2 = document.querySelectorAll("#content2 .list-images ul li img");
    function changeImage2(e) {
      activeImage2.src = e.target.src;
      $(activeImage2).css('display' , "block");
    }
    productImages2.forEach(image => image.addEventListener("click", changeImage2));
    

        //groub 3....
        const activeImage3 = document.querySelector(".editor  .mug-modal .Unbenannt .active3");
        const productImages3 = document.querySelectorAll("#content3 .list-images ul li img");
        function changeImage3(e) {
          activeImage3.src = e.target.src;
          $(activeImage3).css('display' , "block");
        }
        productImages3.forEach(image => image.addEventListener("click", changeImage3));

        //groub 4....
        const activeImage4 = document.querySelector(".editor  .mug-modal .Unbenannt2 .active4");
        const productImages4 = document.querySelectorAll("#content4 .list-images ul li img");
        function changeImage4(e) {
          activeImage4.src = e.target.src;
          $(activeImage4).css('display' , "block");
        }
        productImages4.forEach(image => image.addEventListener("click", changeImage4));

          //groub 5....
          const activeImage5 = document.querySelector(".editor  .mug-modal .jeans .active5");
          const productImages5 = document.querySelectorAll("#content5 .list-images ul li img");
          function changeImage5(e) {
            activeImage5.src = e.target.src;
            $(activeImage5).css('display' , "block");
          }
          productImages5.forEach(image => image.addEventListener("click", changeImage5));

           //groub 6....
           const activeImage6 = document.querySelector(".editor  .mug-modal .jeans2 .active6");
           const productImages6 = document.querySelectorAll("#content6 .list-images ul li img");
           function changeImage6(e) {
           activeImage6.src = e.target.src;
                      $(activeImage6).css('display' , "block");
            }
           productImages6.forEach(image => image.addEventListener("click", changeImage6));
          
         //groub 7....
                    const activeImage7 = document.querySelector(".editor  .mug-modal .spruch .active7");
                    const productImages7 = document.querySelectorAll("#content7 .list-images ul li img");
                    function changeImage7(e) {
                    activeImage7.src = e.target.src;
                               $(activeImage7).css('display' , "block");
                     }
         productImages7.forEach(image => image.addEventListener("click", changeImage7));
                    



         /* Start Font Typing */
        $('.typingdiloge #typing').on('keyup', function(){
          var x  = $(this).val() ;
           $('#typed p').text(x);
        });
        $('.typingdiloge #fontfamily').on('change', function(){
          var z  = $(this).val() ;
           $('#typed p').css('font-family' , z); 
        });
        $('.typingdiloge #fsize').on('change', function(){
          var N  = $(this).val() ;
           $('#typed p').css('font-size' , N+'px'); 
        });
        $('.typingdiloge #fcolor').on('change', function(){
          var N  = $(this).val() ;
           $('#typed p').css('color' , N); 
        });
        
         /*End Typing */

    /* Start  Model  2 */
   // Couple Background

    const couplebackground = document.querySelector(".couplempodel  .mug-modal .hinterground .couplebackgroundimage");
    const couplenoimage = document.querySelector(".couplempodel  .mug-modal .hinterground .noimage");
    const coupleproductimages = document.querySelectorAll("#coupleimagescontent1 .list-images ul li img");
    function couplechangeImage(e) {
        couplebackground.src = e.target.src;
        $(couplebackground).css('display' , "block");
    }
    coupleproductimages.forEach(image => image.addEventListener("click", couplechangeImage));

    $('.couplenoimage').click(function(){
        $(couplebackground).css('display' , "none");
    })
    //END Couple Background
    /*START  Mannn */
    const mannimage = document.querySelector(".couplempodel  .mug-modal .mann .mannimage");
    const mannimages = document.querySelectorAll(".couplempodel #content2 .list-images ul li img");
    function changemannimages(e) {
        mannimage.src = e.target.src;
        $(mannimage).css('display' , "block");
    }
    mannimages.forEach(image => image.addEventListener("click", changemannimages));
    /*End Mann */

    /*START  Frau */
    const frauimage = document.querySelector(".couplempodel  .mug-modal .frau .frauimage");
    const frauimages = document.querySelectorAll(".couplempodel #fraucontent .list-images ul li img");
    function changefrauimages(e) {
        frauimage.src = e.target.src;
        $(frauimage).css('display' , "block");
    }
    frauimages.forEach(image => image.addEventListener("click", changefrauimages));



    //groub 3....
    const couple1unbenantimage = document.querySelector(".couplempodel  .mug-modal .Unbenannt .couple1unbenantimage");
    const couple1unbenantimages = document.querySelectorAll(".couplempodel #couple1Unbenannt .list-images ul li img");
    function changecouple1unbenantimage(e) {
        couple1unbenantimage.src = e.target.src;
        $(couple1unbenantimage).css('display' , "block");
    }
    couple1unbenantimages.forEach(image => image.addEventListener("click", changecouple1unbenantimage));

    //groub 4....
    const couple2unbenantimage = document.querySelector(".couplempodel  .mug-modal .Unbenannt2 .couple2unbenantimage");
    const couple2unbenantimages = document.querySelectorAll(".couplempodel #couple2Unbenannt  .list-images ul li img");
    function changecouple2unbenantimage(e) {
        couple2unbenantimage.src = e.target.src;
        $(couple2unbenantimage).css('display' , "block");
    }
    couple2unbenantimages.forEach(image => image.addEventListener("click", changecouple2unbenantimage));

    /* Start Font Typing */
    $('.typingdiloge #coupletyping').on('keyup', function(){
        var o  = $(this).val() ;
        $('#coupletyped p').text(o);
    });
    $('.typingdiloge #fontfamily').on('change', function(){
        var p  = $(this).val() ;
        $('#coupletyped p').css('font-family' , p);
    });
    $('.typingdiloge #fsize').on('change', function(){
        var q  = $(this).val() ;
        $('#coupletyped p').css('font-size' , q+'px');
    });
    $('.typingdiloge #fcolor').on('change', function(){
        var r  = $(this).val() ;
        $('#coupletyped p').css('color' , r);
    });

    /*End Typing */
    /*End Frau */
    /* End Model  2 */
    /*Start  Model 3 */
    // Couple Background

    const fraumitbackground = document.querySelector(".fraumit  .mug-modal .hinterground .fraumitbackgroundimage");
    const fraumitnoimage = document.querySelector(".fraumit  .mug-modal .hinterground .noimage");
    const fraumitproductimages = document.querySelectorAll("#fraumitimagescontent1 .list-images ul li img");
    function fraumitchangeImage(e) {
        fraumitbackground.src = e.target.src;
        $(fraumitbackground).css('display' , "block");
    }
    fraumitproductimages.forEach(image => image.addEventListener("click", fraumitchangeImage));

    $('.fraumitnoimage').click(function(){
        $(fraumitbackground).css('display' , "none");
    })
    //END Couple Background

    /* START  Fraumit */
    const fraumitimage = document.querySelector(".fraumit  .mug-modal .fraumit .faumitimage");
    const fraumitimages = document.querySelectorAll(".fraumit #fraumitcontent2 .list-images ul li img");
    function changefraumitimages(e) {
        fraumitimage.src = e.target.src;
        $(fraumitimage).css('display' , "block");
    }
    fraumitimages.forEach(image => image.addEventListener("click", changefraumitimages));
    /*End Fraumit */

    /*START  Dog */
    const dogimage = document.querySelector(".fraumit  .mug-modal .dog .dogimage");
    const dogimages = document.querySelectorAll(".fraumit #dogcontent .list-images ul li img");
    function changedogimages(e) {
        dogimage.src = e.target.src;
        $(dogimage).css('display' , "block");
    }
    dogimages.forEach(image => image.addEventListener("click", changedogimages));


    //dress 3....
    const dressimage = document.querySelector(".fraumit  .mug-modal .dress .dressimage") ;
    const dressimages = document.querySelectorAll(".fraumit #dress .list-images ul li img");
    function changedressimage(e) {
        dressimage.src = e.target.src;
        $(dressimage).css('display' , "block");
    }
    dressimages.forEach(image => image.addEventListener("click", changedressimage));

    //groub 4....
    const scritimage = document.querySelector(".fraumit  .mug-modal .scrit .scritimage");
    const scritimages = document.querySelectorAll(".fraumit #scrit  .list-images ul li img");
    function changescritimages(e) {
        scritimage.src = e.target.src;
        $(scritimage).css('display' , "block");
    }
    scritimages.forEach(image => image.addEventListener("click", changescritimages));

    //Hair  Images....
    const hairimage = document.querySelector(".fraumit  .mug-modal .hair .hairimage");
    const hairimages = document.querySelectorAll(".fraumit #hair  .list-images ul li img");
    function changehairimages(e) {
        hairimage.src = e.target.src;
        $(hairimage).css('display' , "block");
    }
    hairimages.forEach(image => image.addEventListener("click", changehairimages));


    /* START  Fraumit */

    const fraumitmannimage = document.querySelector(".fraumit  .mug-modal .fraumit .faumitimage");
    const fraumitmannimages = document.querySelectorAll(".fraumit #manncontent2 .list-images ul li img");
    function changefraumitmannimages(e) {
        fraumitmannimage.src = e.target.src;
        $(fraumitmannimage).css('display' , "block");
    }
    fraumitmannimages.forEach(image => image.addEventListener("click", changefraumitmannimages));


    /*Start  Model  4  just Murried */
    // married Background

    const marriedbackground = document.querySelector(".married  .mug-modal .hinterground .marriedbackgroundimage");
    const marriednoimage = document.querySelector(".married  .mug-modal .hinterground .noimage");
    const marriedimages = document.querySelectorAll("#marriedimages .list-images ul li img");
    function marriedchangeImage(e) {
        marriedbackground.src = e.target.src;
        $(marriedbackground).css('display' , "block");
    }
    marriedimages.forEach(image => image.addEventListener("click", marriedchangeImage));


    //Married Hair  Images....
    const marriedhairimage = document.querySelector(".married  .mug-modal .marriedhair .marriedhairimage");
    const marriedhairimages = document.querySelectorAll(".married #marriedhair  .list-images ul li img");
    function changemarriedhairimages(e) {
        marriedhairimage.src = e.target.src;
        $(marriedhairimage).css('display' , "block");
    }
    marriedhairimages.forEach(image => image.addEventListener("click", changemarriedhairimages));

    //married typing


    /* Start Font Typing */
    $('#marriedctyping #marriedtypingtext').on('keyup', function(){
        var u  = $(this).val() ;
        console.log(u) ;
        $('#marriedtyped p').text(u);
    });



    $('#marriedfontfamily').on('change', function(){
        var jj  = $(this).val() ;
        $('#marriedtyped p').css('font-family' , jj);
    });
    $('#marriedfontsize').on('change', function(){
        var qq  = $(this).val() ;
        $('#marriedtyped p').css('font-size' , qq+'px');
    });
    $('#marriedcolor').on('change', function(){
        var rr  = $(this).val() ;
        $('#marriedtyped p').css('color' , rr);
    });

    /*End Typing */


})(jQuery);