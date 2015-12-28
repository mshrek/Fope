/**
 * Created by srikanthmannepalle on 12/28/15.
 */
var channelName ='TechGuyWeb';
$(document).ready(function(){

    $.get("https://www.googleapis.com/youtube/v3/channels", {
        part: 'contentDetails',
        forUsername: channelName,
        key: 'AIzaSyAYVmp1339Gvva8j9Kc5HebekzTS2cLRa4'
    },
        function(data) {
            $.each(data.items, function (i,item) {
                console.log(item);
                pid = item.contentDetails.relatedPlaylists.uploads;
                getVids(pid);
            })
        }
    );

    function getVids(pid){
        $.get("https://www.googleapis.com/youtube/v3/playlistItems", {
                part: 'snippet',
                maxResults: 10,
                playlistId: pid,
                key: 'AIzaSyAYVmp1339Gvva8j9Kc5HebekzTS2cLRa4'},

            function(data) {
                var output;
                var index=1;
                $.each(data.items, function (i,item) {
                    //console.log(item);
                    vidTitle = item.snippet.title;
                    videoId = item.snippet.resourceId.videoId;
                    //section to append
                    output='<tr><td>'+index+'</td><td class="titleCol">'+vidTitle+'</td><td>01:20:34 h</td><td>'+
                            '<span col-xs-6 class="pull-left text-success">1000</span>'+
                            '<span col-xs-6 class="pull-right text-danger">10</span>'+
                            '</td><td><span col-xs-4 class="text-danger">2.0/5</span>'+
                            '<span col-xs-4 class="text-warning qualityCenter">3.0/5</span>'+
                            '<span col-xs-4 class="text-success">5.0/5</span></td></tr>';
                    index+=1;
                    console.log(output);
                    //Append to results listStyleType
                    $('#playlistItems').append(output);
                })
            }
        );
    }
});