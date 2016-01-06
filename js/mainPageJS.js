/**
 * Created by srikanthmannepalle on 12/28/15.
 */

//    Scrollbar addition section
if (typeof jQuery == "undefined") {
} else {
    $(document).ready(function () {
            //clicked video sorted_id
            var clickedId;

            //Star rating section
            //audio
            var $star_ratingA = $('.star-ratingA .fa');

            var SetRatingStarA = function () {
                return $star_ratingA.each(function () {
                    if (parseInt($star_ratingA.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                        return $(this).removeClass('fa-star-o').addClass('fa-star');
                    } else {
                        return $(this).removeClass('fa-star').addClass('fa-star-o');
                    }
                });
            };

            $star_ratingA.on('click', function () {
                $star_ratingA.siblings('input.rating-value').val($(this).data('rating'));
                return SetRatingStarA();
            });

            //video
            var $star_ratingV = $('.star-ratingV .fa');

            var SetRatingStarV = function () {
                return $star_ratingV.each(function () {
                    if (parseInt($star_ratingV.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                        return $(this).removeClass('fa-star-o').addClass('fa-star');
                    } else {
                        return $(this).removeClass('fa-star').addClass('fa-star-o');
                    }
                });
            };

            $star_ratingV.on('click', function () {
                $star_ratingV.siblings('input.rating-value').val($(this).data('rating'));
                return SetRatingStarV();
            });

            //content
            var $star_ratingC = $('.star-ratingC .fa');

            var SetRatingStarC = function () {
                return $star_ratingC.each(function () {
                    if (parseInt($star_ratingC.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                        return $(this).removeClass('fa-star-o').addClass('fa-star');
                    } else {
                        return $(this).removeClass('fa-star').addClass('fa-star-o');
                    }
                });
            };

            $star_ratingC.on('click', function () {
                $star_ratingC.siblings('input.rating-value').val($(this).data('rating'));
                return SetRatingStarC();
            });

            //Add scrollbar
            $('#playList').DataTable({
                select: {
                    style: 'os'
                },
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": true
            });

            //assigns id on row click
            $('body').delegate('.sendIdOnClick', 'click', function () {
                clickedId = $(this).closest('tr').find('td:first').text();
                fetchfromMysqlDatabase(clickedId);
            });

        $('body').delegate('.warning', 'click', function (){
                alert('hello!');
                $(this).css("color", "#FF3300");
                warningId=($(this).closest('tr').find('span:last').attr('id')).split('g')[1];
                reportBroken(warningId);
            })

            //onclick event , sends selected id of the row to the fetchvideourl.php script
            function fetchfromMysqlDatabase(onClickId) {
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    data: {"id": onClickId},
                    url: "../php/fetchVideoURL.php",
                    cache: false,
                    beforeSend: function () {
                        $('#videoPreview').html('<iframe src="http://www.youtube.com/embed/" width="100%" height="289px" frameborder="0" allowfullscreen></iframe>');
                        //alert(onClickId);
                    },
                    success: function (htmldata) {
                        $('#videoPreview').html(htmldata);
                    }
                });
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    data: {"id": onClickId},
                    url: "../php/rightDashboardStats.php",
                    cache: false,
                    beforeSend: function () {
                        $('#viewcount').html('NA');
                        //alert(onClickId);
                    },
                    success: function (htmldata) {
                        $('#viewcount').html(htmldata);
                    }
                });
            }


            $('#audioRating').on('click',function(){
                valueA=parseInt($star_ratingA.siblings('input.rating-value').val());
                setRatingValue("audioRating",valueA,clickedId);
            })

            $('#videoRating').on('click',function(){
                valueV=parseInt($star_ratingV.siblings('input.rating-value').val());
                setRatingValue("videoRating",valueV,clickedId);
            })

            $('#contentRating').on('click',function(){
                valueC=parseInt($star_ratingC.siblings('input.rating-value').val());
                setRatingValue("contentRating",valueC,clickedId);
            })

            $('#favicon').on('click',function(){
                getcolor=rgbToHex($('#favicon').css("color"));

                if(getcolor=="#676a6c")
                    setColor("#cc433d");
                else
                    setColor("#676a6c");

                function rgbToHex(a){
                    a=a.replace(/[^\d,]/g,"").split(",");
                    return"#"+((1<<24)+(+a[0]<<16)+(+a[1]<<8)+ +a[2]).toString(16).slice(1)
                }
                function setColor(colorcode){
                    $('#favicon').css("color",colorcode);
                }
                setRatingValue("favrating",1,clickedId);
            })


            function setRatingValue(ratingfor,value,clickedId){
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    data: {"ratingfor":ratingfor,"value":value,"elementID":clickedId},
                    url: "../php/ratingFavs.php",
                    cache: false,
                    beforeSend: function () {
                        //$('#viewcount').html('NA');
                        //alert(onClickId);
                    },
                    success: function (htmldata) {
                        //$('#viewcount').html(htmldata);
                    }
                });
            }

            function reportBroken(clickedId){
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    data: {"elementID":clickedId},
                    url: "../php/linkBroken.php",
                    cache: false,
                    beforeSend: function () {
                        //$('#viewcount').html('NA');
                        //alert(onClickId);
                    },
                    success: function (htmldata) {
                        //$('#viewcount').html(htmldata);
                    }
                });
            }
        }//end of ready function
    );//end of ready function
}//end of else