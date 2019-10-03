<?php
/*
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2004 Bharat Mediratta
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * $Id: gpl.txt,v 1.6 2004/02/03 05:03:38 beckettmw Exp $
 */
?>
<?php
/* 
 * Protect against very old versions of 4.0 (like 4.0RC1) which  
 * don't implicitly create a new stdClass() when you use a variable 
 * like a class. 
 */ 
if (!isset($gallery)) { 
        $gallery = new stdClass(); 
}
if (!isset($gallery->app)) { 
        $gallery->app = new stdClass(); 
}

/* Version  */
$gallery->app->config_version = '80';

/* Features */
$gallery->app->feature["zip"] = 1;
$gallery->app->feature["rewrite"] = 1;
$gallery->app->feature["mirror"] = 0; // (missing <i>mirrorSites</i> -- it's optional)

/* Constants */
$gallery->app->galleryTitle = "The Ruggier Family Photo Gallery";
$gallery->app->albumDir = '/var/www/html/gallery/albums';
$gallery->app->tmpDir = '/var/www/html/gallery/tmp';
$gallery->app->photoAlbumURL = 'http://www.ruggier.com/gallery';
$gallery->app->albumDirURL = 'http://www.ruggier.com/gallery/albums';
$gallery->app->watermarkDir = "watermarks";
$gallery->app->movieThumbnail = '/var/www/html/gallery/images/movie.thumb.jpg';
// optional <i>mirrorSites</i> missing
$gallery->app->embedded_inside_type = "";
$gallery->app->geeklog_dir = "/path/to/geeklog/public_html";
$gallery->app->graphics = "ImageMagick";
$gallery->app->pnmDir = "/usr/bin";
$gallery->app->pnmtojpeg = "pnmtojpeg";
$gallery->app->ImPath = "/usr/bin";
$gallery->app->autorotate = "yes";
$gallery->app->jpegImageQuality = "95";
$gallery->app->showAlbumTree = "no";
$gallery->app->highlight_size = "200";
$gallery->app->showOwners = "no";
$gallery->app->albumsPerPage = "5";
$gallery->app->showSearchEngine = "yes";
$gallery->app->skinname = "ruggier";
$gallery->app->gallery_thumb_frame_style = "shadows";
$gallery->app->zipinfo = "/usr/bin/zipinfo";
$gallery->app->unzip = "/usr/bin/unzip";
// optional <i>use_exif</i> missing
$gallery->app->cacheExif = "no";
$gallery->app->use_jpegtran = "/usr/bin/jpegtran";
$gallery->app->default_language = "en_US";
$gallery->app->ML_mode = "0";
$gallery->app->available_lang[] = "en_US";
$gallery->app->show_flags = "no";
$gallery->app->dateString = "%x";
$gallery->app->dateTimeString = "%c";
$gallery->app->emailOn = "yes";
$gallery->app->adminEmail= "apatrick@webtoil.com";
// optional <i>adminEmail</i> missing
// optional <i>senderEmail</i> missing
$gallery->app->emailSubjPrefix = "[Gallery]";
// optional <i>emailGreeting</i> missing
$gallery->app->selfReg = "no";
$gallery->app->selfRegCreate = "no";
$gallery->app->multiple_create = "no";
// optional <i>email_notification</i> missing
$gallery->app->gallery_slideshow_type = "off";
$gallery->app->gallery_slideshow_length = "20";
$gallery->app->gallery_slideshow_loop = "yes";
$gallery->app->comments_enabled = "yes";
$gallery->app->comments_indication = "photos";
$gallery->app->comments_indication_verbose = "no";
$gallery->app->comments_anonymous = "no";
$gallery->app->comments_display_name = "!!FULLNAME!! (!!USERNAME!!)";
$gallery->app->timeLimit = "30";
$gallery->app->debug = "no";
$gallery->app->use_flock = "yes";
$gallery->app->expectedExecStatus = "0";
$gallery->app->sessionVar = "gallery_session";
$gallery->app->userDir = '/var/www/html/gallery/albums/.users';
$gallery->app->devMode = "no";
$gallery->app->adminCommentsEmail = "no";
$gallery->app->adminOtherChangesEmail = "no";
$gallery->app->maximumAlbumDepth = "50";

/* Defaults */
$gallery->app->default["bordercolor"] = "#0066cc";
$gallery->app->default["border"] = "1";
$gallery->app->default["font"] = "verdana";
$gallery->app->default["cols"] = "3";
$gallery->app->default["rows"] = "3";
$gallery->app->default["thumb_size"] = "150";
$gallery->app->default["resize_size"] = "640";
$gallery->app->default["resize_file_size"] = "0";
$gallery->app->default["max_size"] = "off";
$gallery->app->default["max_file_size"] = "0";
$gallery->app->default["useOriginalFileNames"] = "yes";
$gallery->app->default["add_to_beginning"] = "no";
$gallery->app->default["fit_to_window"] = "no";
$gallery->app->default["use_fullOnly"] = "no";
$gallery->app->default["print_photos"]["photoaccess"]["checked"] = "checked";
$gallery->app->default["print_photos"]["shutterfly"]["checked"] = "checked";
$gallery->app->default["print_photos"]["shutterfly"]["donation"] = "yes";
$gallery->app->default["print_photos"]["fotokasten"]["checked"] = "checked";
$gallery->app->default["print_photos"]["ezprints"]["checked"] = "checked";
$gallery->app->default["returnto"] = "yes";
$gallery->app->default["display_clicks"] = "yes";
$gallery->app->default["extra_fields"] = "Description";
$gallery->app->default["showDimensions"] = "no";
$gallery->app->default["item_owner_modify"] = "yes";
$gallery->app->default["item_owner_delete"] = "yes";
$gallery->app->default["item_owner_display"] = "no";
$gallery->app->default["voter_class"] = "Nobody";
$gallery->app->default["poll_type"] = "critique";
$gallery->app->default["poll_scale"] = "3";
$gallery->app->default["poll_hint"] = "Vote for this image";
$gallery->app->default["poll_show_results"] = "no";
$gallery->app->default["poll_num_results"] = "3";
$gallery->app->default["poll_orientation"] = "vertical";
$gallery->app->default["poll_nv_pairs"][0]["name"] = "Excellent";
$gallery->app->default["poll_nv_pairs"][0]["value"] = "5";
$gallery->app->default["poll_nv_pairs"][1]["name"] = "Very Good";
$gallery->app->default["poll_nv_pairs"][1]["value"] = "4";
$gallery->app->default["poll_nv_pairs"][2]["name"] = "Good";
$gallery->app->default["poll_nv_pairs"][2]["value"] = "3";
$gallery->app->default["poll_nv_pairs"][3]["name"] = "Average";
$gallery->app->default["poll_nv_pairs"][3]["value"] = "2";
$gallery->app->default["poll_nv_pairs"][4]["name"] = "Poor";
$gallery->app->default["poll_nv_pairs"][4]["value"] = "1";
$gallery->app->default["poll_nv_pairs"][5]["name"] = "";
$gallery->app->default["poll_nv_pairs"][5]["value"] = "";
$gallery->app->default["poll_nv_pairs"][6]["name"] = "";
$gallery->app->default["poll_nv_pairs"][6]["value"] = "";
$gallery->app->default["poll_nv_pairs"][7]["name"] = "";
$gallery->app->default["poll_nv_pairs"][7]["value"] = "";
$gallery->app->default["poll_nv_pairs"][8]["name"] = "";
$gallery->app->default["poll_nv_pairs"][8]["value"] = "";
$gallery->app->default["slideshow_type"] = "ordered";
$gallery->app->default["slideshow_recursive"] = "no";
$gallery->app->default["slideshow_loop"] = "yes";
$gallery->app->default["slideshow_length"] = "0";
$gallery->app->default["album_frame"] = "shadows";
$gallery->app->default["thumb_frame"] = "shadows";
$gallery->app->default["image_frame"] = "shadows";
?>
