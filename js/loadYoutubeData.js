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

                    postParams(vidTitle, duration, likes, dislikes, viewcount, comments);
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


