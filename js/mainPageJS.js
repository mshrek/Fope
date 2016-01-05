/**
 * Created by srikanthmannepalle on 12/28/15.
 */

//    Scrollbar addition section
if (typeof jQuery == "undefined") {
} else {
    $(document).ready(function () {

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
                var clickedId = $(this).closest('tr').find('td:first').text();
                fetchfromMysqlDatabase(clickedId);
            });


            //onclick event , sends selected id of the row to the fetchvideourl.php script
            function fetchfromMysqlDatabase(onClickId) {
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    data: {"id": onClickId},
                    url: "fetchVideoURL.php",
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
                    url: "rightDashboardStats.php",
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

        }//end of ready function
    );//end of ready function
}//end of else