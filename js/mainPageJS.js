/**
 * Created by srikanthmannepalle on 12/28/15.
 */

//    Scrollbar addition section
if(typeof jQuery !="undefined") {
    $(document).ready(function () {
        //var oTable = $('#playList').DataTable();
        //pagination();
        //
        //function pagination(){
        //    $('#playList').dataTable({
        //        "sPaginationType":"full_numbers",
        //        "aaSorting":[[2, "desc"]],
        //        "bJQueryUI":true
        //    });
        //}

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


        //section to retrieve playlist Items
        var channelName = 'TechGuyWeb';
        var index = 1;
        $.get("https://www.googleapis.com/youtube/v3/channels", {
                part: 'contentDetails',
                forUsername: channelName,
                key: 'AIzaSyAYVmp1339Gvva8j9Kc5HebekzTS2cLRa4'
            },
            function (data) {
                $.each(data.items, function (i, item) {
                    console.log(item);
                    pid = item.contentDetails.relatedPlaylists.uploads;
                    getVids(pid);
                })
            }
        );

        function getVids(pid) {

            $.get("https://www.googleapis.com/youtube/v3/playlistItems", {
                    part: 'snippet',
                    maxResults: 10,
                    playlistId: pid,
                    key: 'AIzaSyAYVmp1339Gvva8j9Kc5HebekzTS2cLRa4'
                },

                function (data) {

                    $.each(data.items, function (i, item) {
                        console.log(item);
                        videoId = item.snippet.resourceId.videoId;
                        getStats(videoId,index);
                        index += 1;
                    })
                }
            );
        }

        //videoDuration
        function getStats(videoID,index){
            var output='';

            $.get("https://www.googleapis.com/youtube/v3/videos?id="+videoID, {
                    part: 'snippet,contentDetails,statistics,status',
                    key: 'AIzaSyAYVmp1339Gvva8j9Kc5HebekzTS2cLRa4'
                },
                function (data) {
                    $.each(data.items, function (i, item) {
                        console.log(item);
                        vidTitle = item.snippet.title;
                        duration = item.contentDetails.duration;
                        likes=item.statistics.likeCount;
                        dislike=item.statistics.dislikeCount;
                        comments=item.statistics.commentCount;

                        output = '<tr><td data-sort-value='+index+'>'+index +'</td><td class="titleCol">' + vidTitle + '</td><td>'+duration.split("PT")[1]+'</td><td>' +
                            '<span col-xs-6 class="pull-left text-success">'+likes+'</span>' +
                            '<span col-xs-6 class="pull-right text-danger">'+dislike+'</span>' +
                            '</td><td><span col-xs-4 class="text-danger" style="padding-left:25px;">2.0/5</span>' +
                            '<span col-xs-4 class="text-warning qualityCenter">3.0/5</span>' +
                            '<span col-xs-4 class="text-success">5.0/5</span>'+
                            '<span class="glyphicon glyphicon-alert" aria-hidden="true"></span></td>'+
                            '</tr>';

                        //Append to results listStyleType
                        $('#playlistItems').append(output);
                        $("#playList").tablesorter({sortList: [[0,0]]});
                    })

                }

            );
        }
    });
}

