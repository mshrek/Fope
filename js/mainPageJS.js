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

        }
    );
}