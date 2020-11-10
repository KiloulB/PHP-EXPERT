<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="http://127.0.0.1/web/css/lumen.css" type="text/css">
<link rel="stylesheet" href="http://127.0.0.1/web/css/style.css" type="text/css">
<body>

<div id="header" style="background: linear-gradient(#2267d6, #3ab0ff);">
<div class="clouds"></div>
<div class="container">
<div class="header-left">
<div class="logo">'s online</div></div>
</div>
<style>
.expandrestyler {
	display:none;
}
.expandnotif {
	display:none;
	width:400px;
}
.howtoexpand {
	display:none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
	var uid = 9;
$('#blue').click(function() {
    $('#header').css({
        'background-color': '#3498db',
        'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_blue',
					id: uid,
				}
			})

});

$('#purple').click(function() {
    $('#header').css({
        'background-color': '#9b59b6',
        'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_purple',
					id: uid,
				}
			})

});
$('#red').click(function() {
    $('#header').css({
        'background-color': '#e74c3c',
        'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_red',
					id: uid,
				}
			})
});
$('#yellow').click(function() {
    $('#header').css({
        'background-color': '#f39c12',
        'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_yellow',
					id: uid,
				}
			})
});
$('#image1').click(function() {
    $('#header').css({
        'background-image': 'url("")',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_image1',
					id: uid,
				}
			})
});

$('#image2').click(function() {
    $('#header').css({
        'background-image': 'url("/web/img/bg/topbg.jpg")',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_image2',
					id: uid,
				}
			})
});

$('#image3').click(function() {
    $('#header').css({
        'background-image': 'url("/web/img/bg/bg2.png")',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_image3',
					id: uid,
				}
			})
});
$('#turquoise').click(function() {
    $('#header').css({
        'background-color': '#1abc9c',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_turquoise',
					id: uid,
				}
			})
});
$('#wetasphalt').click(function() {
    $('#header').css({
        'background-color': '#34495e',
		 'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_wetasphalt',
					id: uid,
				}
			})
});
$('#asbestos').click(function() {
    $('#header').css({
        'background-color': '#7f8c8d',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_asbestos',
					id: uid,
				}
			})
});
$('#clouds').click(function() {
    $('#header').css({
        'background-color': '#ecf0f1',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_clouds',
					id: uid,
				}
			})
});
$('#brown').click(function() {
    $('#header').css({
        'background-color': '#6F532A',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_brown',
					id: uid,
				}
			})
});
$('#lemonyellow').click(function() {
    $('#header').css({
        'background-color': '#EEE657',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_lemonyellow',
					id: uid,
				}
			})
});
$('#skyblue').click(function() {
    $('#header').css({
        'background-color': '#83D6DE',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_skyblue',
					id: uid,
				}
			})
});
$('#red2').click(function() {
    $('#header').css({
        'background-color': '#e74c3c',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_red2',
					id: uid,
				}
			})
});
$('#stupidblue').click(function() {
    $('#header').css({
        'background-color': '#3DA4AB',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_stupidblue',
					id: uid,
				}
			})
});
$('#facebookblue').click(function() {
    $('#header').css({
        'background-color': '#3B5998',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_facebookblue',
					id: uid,
				}
			})
});
$('#black').click(function() {
    $('#header').css({
        'background-color': '#000000',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_black',
					id: uid,
				}
			})
});
$('#cabaret').click(function() {
    $('#header').css({
        'background-color': '#D2527F',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_cabaret',
					id: uid,
				}
			})
});
$('#gossip').click(function() {
    $('#header').css({
        'background-color': '#87D37C',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_gossip',
					id: uid,
				}
			})
});
$('#confetti').click(function() {
    $('#header').css({
        'background-color': '#E9D460',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_confetti',
					id: uid,
				}
			})
});
$('#plum').click(function() {
    $('#header').css({
        'background-color': '#913D88',
		  'background-image': 'none',
    });

	$.ajax({
				method: 'post',
				url: 'web/css/includes/ajax.php',
				data: {
					action: 'update_plum',
					id: uid,
				}
			})
});


$('.restyler').hover( function() {
  $('.expandrestyler').toggle();
} );

$('.notif, .bell, #count, .icobell, .fa-bell').click( function() {
  $('.expandnotif').toggle();
} ).children().click(function(e) {
  return false;
});




   var refreshId = setInterval(function() {
      $(".expandnotif").load('web/css/includes/refresh_notifications.php');
   }, 5000);



   var refreshId = setInterval(function() {
      $("#count").load('web/css/includes/refresh_count.php');
   }, 5000);
   $.ajaxSetup({ cache: false });

   $(".trashcan").on("click", function() {
    var id = $(this).data("id");
	    $('#n_' + id).css({
        'display': 'none',

    });

    $.ajax({
        type: "POST",
        url: "web/css/includes/ajax.php",
        async: true,
        data: {"id": id, "action": "deletenotification" },
            success: console.log("Een Notificatie is Verwijderd | ID: " + id)
        });
    });

});
</script>


<!-- Begin restyler -->



	<div class="restyler" style="min-width:150px;">
		<div style="width:125px; height:30px; padding:10px; background-color:#ecf0f1; font-weight:bold; font-size:11px; color:#bdc3c7; border-radius:2px;" ><i class="fa fa-paint-brush" style="padding-right:15px;"></i> Restyler</div>
                <div class="expandrestyler" style="margin-top:10px;">

		   <div class="color" id="blue" style="background-color:#3498db;"></div> <div class="color" id="purple" style="background-color:#9b59b6;"></div> <div class="color"  id="red" style="background-color:#e74c3c;"></div>
				<div class="color" id="yellow" style="background-color:#f39c12;"></div>
         <div class="color" id="turquoise" style="background-color:#1abc9c;"></div>
				<div class="color" id="clouds" style="background-color:#ecf0f1;"></div>

		 <div class="color" id="lemonyellow" style="background-color:#EEE657;"></div> <div class="color" id="skyblue" style="background-color:#83D6DE;"></div> <div class="color"  id="red2" style="background-color:#e74c3c;"></div>
				<div class="color" id="stupidblue" style="background-color:#3DA4AB;"></div>



		  <div class="color" id="black" style="background-color:#000000;"></div> <div class="color" id="cabaret" style="background-color:#D2527F;"></div> <div class="color"  id="gossip" style="background-color:#87D37C;"></div>
				<div class="color" id="confetti" style="background-color:#E9D460;"></div> <div class="color" id="plum" style="background-color:#913D88;"></div>
			<br>
		  </div>
		  </div>

		  <style>
		  .trashcan{
			  margin-left:5px;
		  }
		  .trashcan:hover{
			  color:#e74c3c;
		  }
		  </style>


		  </div>
		  </div>

	<!-- End restyler -->
</body>
</html>

<?php
echo "drm";
?>
