/**
 * Created by srikanthmannepalle on 1/1/16.
 */


if (typeof jQuery == "undefined"){
    var vidTitle;
    var duration;
    var likes;
    var dislikes;
    var comments;
    var viewcount;


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
                    getStats(videoId, index);
                    index += 1;
                })
            }
        );
    }


//videoDuration
    function getStats(videoID, index) {
        var output = '';

        $.get("https://www.googleapis.com/youtube/v3/videos?id=" + videoID, {
                part: 'snippet,contentDetails,statistics,status',
                key: 'AIzaSyAYVmp1339Gvva8j9Kc5HebekzTS2cLRa4'
            },
            function (data) {
                $.each(data.items, function (i, item) {
                    console.log(item);
                    vidTitle = item.snippet.title;
                    duration = item.contentDetails.duration;
                    likes = item.statistics.likeCount;
                    dislikes = item.statistics.dislikeCount;
                    comments = item.statistics.commentCount;
                    viewcount = item.statistics.viewCount;


                    eachVideoViewCount = viewcount;
                    output = '<tr><td data-sort-value=' + index + '>' + index + '</td><td class="titleCol">' + vidTitle + '</td><td>' + duration.split("PT")[1] + '</td><td>' +
                        '<span col-xs-6 class="pull-left text-success">' + likes + '</span>' +
                        '<span col-xs-6 class="pull-right text-danger">' + dislikes + '</span>' +
                        '</td><td><span col-xs-4 class="text-danger" style="padding-left:25px;">2.0/5</span>' +
                        '<span col-xs-4 class="text-warning qualityCenter">3.0/5</span>' +
                        '<span col-xs-4 class="text-success">5.0/5</span>' +
                        '<span class="glyphicon glyphicon-alert" aria-hidden="true"></span></td>' +
                        '</tr>';

                    postParams(vidTitle, duration, likes, dislikes, viewcount, comments);
                    //Append to results listStyleType
                    $('#playlistItems').append(output);
                    $("#playList").tablesorter({sortList: [[0, 0]]});

                })
            }
        );


        //function to send data into sql
        function postParams(vidTitle, duration, likes, dislikes, viewcount, comments) {
            $.post("phpconnection.php", {
                    ptitle: "\'" + vidTitle + "\'",
                    pduration: "\'" + duration + "\'",
                    plikes: likes,
                    pdislikes: dislikes,
                    pviewcount: viewcount,
                    pcommentscount: comments
                }, function (data) {
                    console.log("value of data=" + data);
                    if (data != null) {
                        console.log("Insertion of record " + vidTitle + " was successfull");
                    }
                    else {
                        console.log("Insertion of record " + vidTitle + " was not successfull");
                    }
                }
            );
        }
    }

}


