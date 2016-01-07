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
            });//end of audio

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
            });// end of video


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
            });// end of content

            //Add scrollbar and initialize the data table
            $('#playList').DataTable({
                select: {
                    style: 'os'
                },
                "scrollY": "200px",
                "scrollCollapse": true,
                "fnInitComplete": function() {
                    selectFirstRow();
                },
                "paging": true
            });

            //selects first row as default after initialization
            function selectFirstRow() {
                resetRatingValues();
                fetchfromMysqlDatabase(1);
            }

            //assigns id on row click
            $('body').delegate('.sendIdOnClick', 'click', function () {
                clickedId = $(this).closest('tr').find('td:first').text();
                resetRatingValues();
                fetchfromMysqlDatabase(clickedId);
            });

            //row click handled across pagination
            $('body').delegate('.warning', 'click', function (){
                //$(this).css("color", "#FF3300");
                $clickedElement=$(this);

                getcolor=rgbToHex($(this).css("color"));
                if(getcolor=="#676a6c")
                {
                    setColor("#cc433d");
                    brokenVal=1
                }
                else
                {
                    setColor("#676a6c");
                    brokenVal=0;
                }

                function setColor(colorcode){
                    $clickedElement.css("color",colorcode);
                }
                warningId=($(this).closest('tr').find('span:last').attr('id')).split('g')[1];
                resetRatingValues();
                reportBroken(warningId,brokenVal);
            })


            //onclick event , sends selected id of the row to the fetchvideourl.php script
            function fetchfromMysqlDatabase(onClickId) {

                //for right section iframe
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

                //for left side of the dashboard
                $.ajax({
                    type: "POST",
                    dataType: "text",
                    data: {"id": onClickId},
                    url: "../php/rightDashboardStats.php",
                    cache: false,
                    beforeSend: function () {
                        $('#viewcount').html('NA');
                    },
                    success: function (data) {
                        dataVal = data.split(",");
                        $('#viewcount').html(dataVal[0]);
                        starArr=[$star_ratingA,$star_ratingV,$star_ratingC];
                        for(j=0;j<starArr.length;j++){
                            starArr[j].siblings('input.rating-value').val(dataVal[j+1]);
                            starArr[j].each(function () {
                                if (parseInt(starArr[j].siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                                    $(this).removeClass('fa-star-o').addClass('fa-star');
                                }
                            });
                        }
                        favrating=dataVal[4];
                        if(favrating==1)
                        {
                            $('#favicon').css("color","#cc433d");
                        }

                    }
                });
            }

            //Section for capturing user clicked values and storing them in db
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

                if(getcolor=="#676a6c") {
                    setColor("#cc433d");
                    favVal=1;
                }
                else {
                    setColor("#676a6c");
                    favVal=0;
                }

                function rgbToHex(a){
                    a=a.replace(/[^\d,]/g,"").split(",");
                    return"#"+((1<<24)+(+a[0]<<16)+(+a[1]<<8)+ +a[2]).toString(16).slice(1)
                }
                function setColor(colorcode){
                    $('#favicon').css("color",colorcode);
                }
                setRatingValue("favrating",favVal,clickedId);
            })

            //function for rgb to hex code conversion
            function rgbToHex(a){
                a=a.replace(/[^\d,]/g,"").split(",");
                return"#"+((1<<24)+(+a[0]<<16)+(+a[1]<<8)+ +a[2]).toString(16).slice(1)
            }

            //For setting the int values for audio,video,content and fav
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

            //resetting star values on video change
            function resetRatingValues(){
                $('#favicon').css("color","#676a6c");
                startArr=[$star_ratingA,$star_ratingV,$star_ratingC];
                for(i=0;i<startArr.length;i++) {
                    item = startArr[i];
                    item.each(function () {
                        $(this).removeClass('fa-star');
                        $(this).addClass('fa-star-o');
                    })
                }
            }

            //For setting reportbroken int value
            function reportBroken(clickedId,brokenVal){
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    data: {"elementID":clickedId,"value":brokenVal},
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

            /*support functions
             */

        }//end of ready function
    );//end of ready function
}//end of else