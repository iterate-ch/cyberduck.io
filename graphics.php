<?php
	function createCardResized($message, $card, $border, $font, $font_size, $font_color) {
        /*
        int imagecopyresized ( resource dst_im, resource src_im, int dstX, int dstY, int srcX, int srcY, int dstW, int dstH, int srcW, int srcH)

imagecopyresized() copies a rectangular portion of one image to another image. Dst_im is the destination image, src_im is the source image identifier. If the source and destination coordinates and width and heights differ, appropriate stretching or shrinking of the image fragment will be performed. The coordinates refer to the upper left corner. This function can be used to copy regions within the same image (if dst_im is the same as src_im) but if the regions overlap the results will be unpredictable. */

            $card = isset($card) ? $card: "Canterbury_Mt_Cook_to_Lake_Pukaki_001.sized.jpg";
            $card_path = "./cards/".$card;
            $cardImage = ImageCreateFromJPEG($card_path);
            
            if(isset($cardImage)) {
                // size of the supplied picture to place on the ecard
                $image_size = getimagesize($card_path);  
                $image_width = $image_size[0];  
                $image_height = $image_size[1];
                
                $border = isset($border) ? $border : 20;

                // the with of the ecard without the text area
//                $new_width = ( $image_width < 500) ? $image_width : 500;
                $new_width=$image_width;
                // the total width of the ecard
                $base_width = $new_width+300;//(int)($new_width * (1/3));
                $base_height = ((int)($new_width/$image_width))*$image_height; //same ratio

//                $new_width=$image_width;
//                $base_width=$image_width+300;
//                $base_height=$image_height;
                
                $image = imagecreatetruecolor($base_width, $base_height);
                //background color
                $white = mkcolor ($image, "#FFFFFF");
                $black = mkcolor ($image, "#000000");
                // background color of the text area
                $color = isset($color) ? $color: "#FFFFFF";
                $font = isset($font) ? $font : "Trebuchet-Bold";
                $font_size = isset($font_size) ? $font_size : "10";
                $font_color = isset($font_color) ? $font_color : "#000000";
                $fontPath = "./fonts/".$font.".ttf";
                $angle = 0;
                // the message trimmed at both ends (no whitespace) and delete line breaks
                $message = trim($message);
                
                $text = $message;
                $text = str_replace("\n", " ", $text);
                $text = str_replace("\r", " ", $text);
                $text = str_replace("\t", " ", $text);
                
                $textBox = imageTTFBBox($font_size, 0, $fontPath, $text);
                
                $char_height = $textBox[1] - $textBox[7];
                $spaceBox = imageTTFBBox($font_size, 0, $fontPath, "  ");
                $char_width = $spaceBox[2] - $spaceBox[0];

                // set background color
                imagefilledrectangle ($image, 0, 0, $base_width, $base_height, mkcolor($image, $color));
                // copy card picture onto image
                //int imagecopyresized ( resource dst_im, resource src_im, int dstX, int dstY, int srcX, int srcY, int dstW, int dstH, int srcW, int srcH)
               imagecopyresized($image, $cardImage, 1, 1, 0, 0, $new_width-1, $base_height-1, $image_width, $image_height);  
                imageRectangle($image, 0, 0, $base_width-1, $base_height-1, $black);
              
                // x/y location whrere to start writing
                $start_x = $new_width + $border;
                $end_x = $base_width - $border;
                $start_y = $char_height + $border;
                $end_y = $base_height - $border;

                $left = $start_x;
                
                // the width/height of the text frame to write into
                //$text_width = $image_width - $start_x;
                $text_width = $end_x - $start_x;
                $text_height = $end_y - $start_y;
                //$text_box_height = $image_height - 2*$border;

                //array of all words of the message
                $stringpieces = explode(" ", $message);
                $newline = 0;
                $line_width = 0;
                for ($i = 0; $i < count($stringpieces); $i++) {
                    $string = $stringpieces[$i];
                    $box = ImageTTFBBox($font_size, $angle, $fontPath, $string);
                    $line_width = $line_width + $box[2] - $box[0] + $char_width;
                    if($line_width > $text_width) {
                        //insert new line
                        $start_x = $left;
                        $start_y = $start_y + $char_height + $char_height/5;
                        $line_width = $box[2] - $box[0] + $char_width;
                    }
                    imagettftext($image, $font_size, $angle, $start_x, $start_y, mkcolor($image, $font_color), $fontPath, $string);
                    $start_x = $left + $line_width;
                }
            }
            //error handling if image couldn't be found
            else {
                //create blank image
                $image  = imagecreatetruecolor(150, 30);
                //background color
                $bgc = imagecolorallocate ($image, 255, 255, 255);
                $tc  = imagecolorallocate ($image, 0, 0, 0);
                imagefilledrectangle ($image, 0, 0, 150, 30, $bgc);
                /* Output an errmsg */
                imagestring ($image, 1, 5, 5, "Error loading image ".$card, $tc);
            }
            $id = uniqid(card_);
            $cardid = $id . ".png";
            //$cardid = $id . ".jpeg";
            $path = "saved/$cardid";
            //imagePNG($image, $path, 100);
            imageJPEG($image, $path);
            imageDestroy($cardImage);
            imageDestroy($image);
            return $cardid;
	}
        
        // scale proportionally to the desired with. Load from param imagePath and save to thumbPath
        function thumbnail($card_dir, $thumb_dir, $card, $destWidth) {
            $thumbPath = $thumb_dir."/".$card;
            $imagePath = $card_dir."/".$card;
            $quality = 100;
            if(!file_exists($thumbPath)) {
                $image = ImageCreateFromJPEG($imagePath);
                $imageSize = getimagesize($imagePath);  
                $srcWidth = $imageSize[0];  
                $srcHeight = $imageSize[1];
                $destWidth = ($destWidth > $srcWidth) ? $srcWidth : $destWidth;
                $destHeight = ($destWidth/$srcWidth)*$srcHeight;
                $thumbnail  = imagecreatetruecolor($destWidth, $destHeight);
                imageCopyResized($thumbnail, $image, 0, 0, 0, 0, $destWidth, $destHeight, $srcWidth, $srcHeight);
                imageJPEG($thumbnail, $thumbPath);
                //imagePNG($thumbnail, $thumbPath, $quality);
                imageDestroy($image);
                imageDestroy($thumbnail);
            }
        }
                
        function createFontPreview($text, $font, $font_size, $color) {
            $imagePath = "./img/".$font.".png";
            $fontPath = "./fonts/".$font.".ttf";
            if(!file_exists($imagePath)) {            
                $box = ImageTTFBBox($font_size, 0, $fontPath, $text);
                $border = 20;
                $width = $box[2] - $box[0] + $border;
                $height = $box[1] - $box[7] + $border;
                //create blank image
                $image  = imagecreatetruecolor($width, $height);
                //background color
                $white = imagecolorallocate ($image, 255, 255, 255);
                $black = imagecolorallocate ($image, 0, 0, 0);
                imagefilledrectangle ($image, 0, 0, $width, $height, mkcolor($image, $color));
                imagettftext($image, $font_size, 0, $border/2, $height - $border/2, mkcolor($image, $black), $fontPath, $text);
                imagePNG($image, $imagePath, 100);
                imageDestroy($image);
            }
            return $imagePath;
        }
        
        function mkcolor($image, $color) {
            $color = eregi_replace("#","",$color);
            $red = hexdec(substr($color,0,2));
            $green = hexdec(substr($color,2,2));
            $blue = hexdec(substr($color,4,2));
            $out = ImageColorAllocate($image, $red, $green, $blue);
            return($out);
        }
?>
