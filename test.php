<?php
require './vendor/autoload.php';

require './app/init.php';

$json = '{
  "instagram": "https://i.postimg.cc/ZncWBLrK/icons8-instagram-48.png",
  "facebook": "https://i.postimg.cc/MGCMhH6x/icons8-facebook-48.png",
  "discord": "https://i.postimg.cc/KztkFbjT/icons8-discord-48.png",
  "pinterest": "https://i.postimg.cc/vmgxqfd3/icons8-pinterest-48.png",
  "telegram": "https://i.postimg.cc/L5Rq8Wgb/icons8-telegram-app-48.png",
  "reddit": "https://i.postimg.cc/FFgdBh25/reddit.png",
  "snapchat": "https://i.postimg.cc/90GzK09z/icons8-snapchat-a-multimedia-messaging-app-used-globally-48.png",
  "spotify": "https://i.postimg.cc/prNpszpg/icons8-spotify-48.png",
  "youtube": "https://i.postimg.cc/fbr306ZW/icons8-youtube-48.png",
  "star": "https://i.postimg.cc/pT5mQqXf/icons8-star-filled-48.png"
}';

echo "<pre>";

$a = json_decode($json,true);

$i = $a["instagram"];

$b = HTTP_REQUEST($i,"",array(""),"GET",0);

file_put_contents($_SERVER["DOCUMENT_ROOT"]."/image.png",$b);

/*

elseif( $action == "edit_category" ):

 $id = $_POST["id"];

$category = $conn->prepare("SELECT * FROM categories WHERE category_id=:id ");
$category->execute(array("id"=>$id));
$category = $category->fetch(PDO::FETCH_ASSOC);

$images = $conn->prepare("SELECT * FROM files");
$images->execute();
$images = $images->fetchAll(PDO::FETCH_ASSOC);

$return .= '<div class="modal-body">'."\r\n".'<div class="form-group">' . "\r\n" . '  <label class="form-group__service-name">Category name</label>' . "\r\n" . '  <input type="text" class="form-control" id="cat_name" value="' . $category['category_name'] . '">' . "\r\n" . ' </div>';

$return .= '
<ul class="list-group list-group-horizontal">
<li  class="list-group-item active enable-icon-picker">Icon Picker</li>
<li  class="list-group-item enable-image-picker">Image Picker</li>
</ul>

<div class="iconpicker-div">
<div class="form-group">
<label>Category Icon</label>
<p class="lead">
<i class="fa fa-anchor fa-3x picker-target"></i>
</p>
<input class="form-control icp icp-auto" id="icon-picked" value="fas fa-anchor" type="text"/>
<input type="hidden" id="cat_id" value="'.$id.'">
</div>
</div>
<div style="display:none;" class="picker imagepicker-div">

<label>Select Category Icon</label>
<select id="image-picker" class="image-picker">';

for($i = 0;$i < count($images);$i++){
$j = $i + 1;
if($i == 0){
    $a = 'data-img-class="first"';
}
$return .= '<option '.$a.' data-img-src="'.$images[$i]["link"].'" value="'.$images[$i]["id"].'">Image '.$j.'</option>';

}
$return .= '
</select>
</div>';


$return .= '<button type="button" id="update-category" class="btn btn-primary">Update category</button>' . "\r\n" . '  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>';
$return .= '<script>

$(document).ready(function(){

$(".icp-auto").iconpicker();
$(".icp").on("iconpickerSelected", function (e) {
            $(".lead .picker-target").get(0).className = \'picker-target fa-3x \' +
                e.iconpickerInstance.options.iconBaseClass + \' \' +
                e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
        });

$(".image-picker").imagepicker({
          hide_select : true,
          show_label  : false
        })


$(".enable-icon-picker").click(function(){
$(".enable-image-picker").removeClass("active");
$(this).addClass("active");
$(".iconpicker-div").show();
$(".imagepicker-div").hide();
});

$(".enable-image-picker").click(function(){
$(".enable-icon-picker").removeClass("active");
$(this).addClass("active");
$(".iconpicker-div").hide();
$(".imagepicker-div").show();
});

$("#update-category").click(function(){
$(".list-group").addClass("disabledDiv");
var cat_id = $("#cat_id").val();
var cat_name = encodeURIComponent($("#cat_name").val());

var image_id = $("#image-picker").val();
if($(".enable-icon-picker").hasClass("active")){
 var icon_data = "&icon_type=icon";
}
if($(".enable-image-picker").hasClass("active")){

 var icon_data = "&icon_type=image";

}
var icon_class = $("#icon-picked").val();
$.ajax({
url:"admin/services/edit-category",
data:"cat_id="+cat_id+"&cat_name="+cat_name+icon_data+"&image_id="+image_id+"&icon_class="+icon_class,
type:"POST",
success:function(resp){
var resp = JSON.parse(resp);
if(resp.success == 1){
iziToast.show({
    icon:\'fa fa-check\',
    title: resp.message,
    message: \'\',
    color:\'green\',
    position:\'topCenter\'
});
} else {
iziToast.show({
    icon:\'fa fa-times\',
    title: resp.message,
    message: \'\',
    color:\'red\',
    position:\'topCenter\'
});
}
$(".modal .close").trigger("click");
}
});
});
});
</script>';
    echo json_encode(['content' => $return, 'title' => 'Edit Category <span class="badge badge-primary">'.$id.'</span>']);

  elseif( $action ==

*/




?>