<html>

<!--***************************************************************************
*
* Filename:     Example.php
*
* Description:  An example of how the PHP JPEG Metadata Toolkit can be used to
*               display JPEG Metadata.
*
* Author:       Evan Hunter
*
* Date:         30/7/2004
*
* Project:      PHP JPEG Metadata Toolkit
*
* Revision:     1.10
*
* Changes:      1.00 -> 1.10 : Changed name of GET parameter from 'filename' to 'jpeg_fname'
*                              to stop script-kiddies using the google command 'allinurl:*.php?filename=*'
*                              to find servers to attack
*                              Changed behavior when no filename is given, to be cleaner
*
* URL:          http://electronics.ozhiker.com
*
* Copyright:    Copyright Evan Hunter 2004
*
* License:      This file is part of the PHP JPEG Metadata Toolkit.
*
*               The PHP JPEG Metadata Toolkit is free software; you can
*               redistribute it and/or modify it under the terms of the
*               GNU General Public License as published by the Free Software
*               Foundation; either version 2 of the License, or (at your
*               option) any later version.
*
*               The PHP JPEG Metadata Toolkit is distributed in the hope
*               that it will be useful, but WITHOUT ANY WARRANTY; without
*               even the implied warranty of MERCHANTABILITY or FITNESS
*               FOR A PARTICULAR PURPOSE.  See the GNU General Public License
*               for more details.
*
*               You should have received a copy of the GNU General Public
*               License along with the PHP JPEG Metadata Toolkit; if not,
*               write to the Free Software Foundation, Inc., 59 Temple
*               Place, Suite 330, Boston, MA  02111-1307  USA
*
*               If you require a different license for commercial or other
*               purposes, please contact the author: evan@ozhiker.com
*
***************************************************************************-->

<?php
/**
 * linpha mods
 * make use of image id when calling (security)
 */

/**
 * read path and filename from DB
 */
if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }
include_once(TOP_DIR.'/include/db_connect.php');

unset($filename);

/**
 * security
 */
if(!isset($filename) || strlen($_GET['md5sum']) <> 32)
{
    echo "FATAL: expecting length of 32 chars for md5sum parameter...";
    exit();
}

$query = $GLOBALS['db']->Execute("SELECT filename, prev_path FROM ".PREFIX."photos " .
		"WHERE md5sum = '".htmlspecialchars($_GET['md5sum'], ENT_QUOTES)."'");
$path = $query->FetchRow();		
$filename = "../".$path[1]."/".$path[0]."";
?>
        <head>

                <META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
                <STYLE TYPE="text/css" MEDIA="screen, print, projection">
                <!--

                        BODY { background-color:#505050; color:#F0F0F0 }
                        a  { color:orange  }
                        .EXIF_Main_Heading { color:red }
                        .EXIF_Secondary_Heading{ color: orange}
                        .EXIF_Table {  border-collapse: collapse ; border: 1px solid #909000}
                        .EXIF_Table tbody td{border-width: 1px; border-style:solid; border-color: #909000;}

                -->
                </STYLE>


                <?php
                        // Hide any unknown EXIF tags
                        $GLOBALS['HIDE_UNKNOWN_TAGS'] = TRUE;

                        include './phpmeta/JPEG.php';
                        include './phpmeta/JFIF.php';
                        include './phpmeta/PictureInfo.php';
                        include './phpmeta/XMP.php';
                        include './phpmeta/Photoshop_IRB.php';
                        include './phpmeta/EXIF.php';

                        // Output the title
                        echo "<title>Metadata details for $filename</title>";

                        // Retrieve the header information
                        $jpeg_header_data = get_jpeg_header_data( $filename );

                 ?>

        </head>

        <body>
                <B><U>Metadata for &quot;<?php echo $filename; ?>&quot;</U></B>
                <br>

                <!-- Output a link allowing user to edit the Photoshop File Info -->
				<!--
                <h4><a href="Edit_File_Info_Example.php?jpeg_fname=<?php echo $filename; ?>" >Click here to edit the Photoshop File Info for this file</a></h4>
                <br>
				-->


                <!-- Output the information about the APP segments -->
                <?php   echo Generate_JPEG_APP_Segment_HTML( $jpeg_header_data ); ?>

                <BR>

                <!-- Output the Intrinsic JPEG Information -->
                <?php   echo Interpret_intrinsic_values_to_HTML( get_jpeg_intrinsic_values( $jpeg_header_data ) );  ?>

                <BR>

                <!-- Output the JPEG Comment -->
                <?php   echo Interpret_Comment_to_HTML( $jpeg_header_data ); ?>

                <BR>

                <!-- Output the JPEG File Interchange Format Information -->
                <?php   echo Interpret_JFIF_to_HTML( get_JFIF( $jpeg_header_data ), $filename ); ?>

                <BR>

                <!-- Output the JFIF Extension Information -->
                <?php   echo Interpret_JFXX_to_HTML( get_JFXX( $jpeg_header_data ), $filename ); ?>

                <BR>

                <!-- Output the Picture Info Text -->
                <?php   echo Interpret_App12_Pic_Info_to_HTML( $jpeg_header_data ); ?>

                <BR>

                <!-- Output the EXIF Information -->
                <?php   echo Interpret_EXIF_to_HTML( get_EXIF_JPEG( $filename ), $filename );  ?>

                <BR>

                <!-- Output the XMP Information -->
                <?php   echo Interpret_XMP_to_HTML( read_XMP_array_from_text( get_XMP_text( $jpeg_header_data ) ) ); ?>

                <BR>

                <!-- Output the Photoshop IRB (including the IPTC-NAA info -->
                <?php   echo Interpret_IRB_to_HTML( get_Photoshop_IRB( $jpeg_header_data ), $filename ); ?>

                <BR>

                <!-- Output the Meta Information -->
                <?php   echo Interpret_EXIF_to_HTML( get_Meta_JPEG( $filename ), $filename );  ?>

                <BR>
                <p>Interpreted using:</p>
                <p><a href="http://www.ozhiker.com/electronics/pjmt/" >PHP JPEG Metadata Toolkit version 1.0, Copyright (C) 2004 Evan Hunter</a></p>

        </body>

</html>

<?php

/**
* NOT YET USED
*/
/*
<html>

<!--***************************************************************************
*
* Filename:     Edit_File_Info_Example.php
*
* Description:  An example file showing how edit_file_info allows the user to edit
*               the metadata of an image over the internet in the same way
*               that Photoshop edits 'File Info' data
*
* Author:       Evan Hunter
*
* Date:         17/11/2004
*
* Project:      PHP JPEG Metadata Toolkit
*
* Revision:     1.10
*
* URL:          http://electronics.ozhiker.com
*
* Copyright:    Copyright Evan Hunter 2004
*
* License:      This file is part of the PHP JPEG Metadata Toolkit.
*
*               The PHP JPEG Metadata Toolkit is free software; you can
*               redistribute it and/or modify it under the terms of the
*               GNU General Public License as published by the Free Software
*               Foundation; either version 2 of the License, or (at your
*               option) any later version.
*
*               The PHP JPEG Metadata Toolkit is distributed in the hope
*               that it will be useful, but WITHOUT ANY WARRANTY; without
*               even the implied warranty of MERCHANTABILITY or FITNESS
*               FOR A PARTICULAR PURPOSE.  See the GNU General Public License
*               for more details.
*
*               You should have received a copy of the GNU General Public
*               License along with the PHP JPEG Metadata Toolkit; if not,
*               write to the Free Software Foundation, Inc., 59 Temple
*               Place, Suite 330, Boston, MA  02111-1307  USA
*
*               If you require a different license for commercial or other
*               purposes, please contact the author: evan@ozhiker.com
*
***************************************************************************-->

        <head>

                <META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
                <STYLE TYPE="text/css" MEDIA="screen, print, projection">
                <!--

                        BODY { background-color:#505050; color:#F0F0F0 }
                        a  { color:orange  }
                        .EXIF_Main_Heading { color:red }
                        .EXIF_Secondary_Heading{ color: orange}
                        .EXIF_Table {  border-collapse: collapse ; border: 1px solid #909000}
                        .EXIF_Table tbody td{border-width: 1px; border-style:solid; border-color: #909000;}

                -->
                </STYLE>


                <?php
                        // Turn off Error Reporting
                        error_reporting ( 0 );

                        // Retrieve the JPEG image filename from the http url request
                        if ( ( !array_key_exists( 'jpeg_fname', $GLOBALS['HTTP_GET_VARS'] ) ) ||
                             ( $GLOBALS['HTTP_GET_VARS']['jpeg_fname'] == "" ) )
                        {
                                echo "<title>No image filename defined</title>\n";
                                echo "</head>\n";
                                echo "<body>\n";
                                echo "<p>No image filename defined - use GET method with field: jpeg_fname</p>\n";
                                echo "<p><a href=\"http://www.ozhiker.com/electronics/pjmt/\" >PHP JPEG Metadata Toolkit version 1.0, Copyright (C) 2004 Evan Hunter</a></p>\n";
                                echo "</body>\n";
                                exit( );

                        }
                        else
                        {
                                $filename = $GLOBALS['HTTP_GET_VARS']['jpeg_fname'];
                        }
                 ?>


                <title>Edit Photoshop File Info details for <?php $filename ?></title>
        </head>

        <body >
                <p>Powered by: <a href="http://www.ozhiker.com/electronics/pjmt/" >PHP JPEG Metadata Toolkit version 1.0, Copyright (C) 2004 Evan Hunter</a></p>
                <br>
                <br>


                <?php
                        // Output a heading
                        echo "<H1>Edit Photoshop File Info details for $filename</H1>";

                        // Output a link to display the full metadata
                        echo "<p><a href=\"Example.php?jpeg_fname=" . $filename . "\" >View Full Metatdata Information</a></p>\n";


                        // Display a small copy of the image
                        echo "<p><img src=\"$filename\" height=\"50%\"></p>";

                        // Define defaults for the fields - These are only used where the image has blank fields
                        $default_ps_file_info_array = array (
                                                                'title'                 => "",
                                                                'author'                => "Evan Hunter",
                                                                'authorsposition'       => "",
                                                                'caption'               => "",
                                                                'captionwriter'         => "Evan Hunter",
                                                                'jobname'               => "",
                                                                'copyrightstatus'       => "Copyrighted Work",
                                                                'copyrightnotice'       => "Copyright (c) Evan Hunter 2004",
                                                                'ownerurl'              => "http://www.ozhiker.com",
                                                                'keywords'              => array(),
                                                                'category'              => "",
                                                                'supplementalcategories'=> array(),
                                                                'date'                  => "",
                                                                'city'                  => "",
                                                                'state'                 => "Tasmania",
                                                                'country'               => "Australia",
                                                                'credit'                => "Evan Hunter",
                                                                'source'                => "Evan Hunter",
                                                                'headline'              => "",
                                                                'instructions'          => "",
                                                                'transmissionreference' => "",
                                                                'urgency'               => ""
                                                                );

                        // outputfilename must always be defined, as it specifies the
                        // file which will be changed

                        // These two lines create a temporary copy of the file
                        // which will be the one that is edited, keeping
                        // the original intact. - This would not be required if you wanted
                        // to change the original - in that case just set $outputfilename = $filename
                        $outputfilename = get_next_filename( );
                        copy( $filename, $outputfilename );




                        // Include the File Info Editor.

                        include "Edit_File_Info.php";

                ?>


        </body>

</html>
<?php

/******************************************************************************
*
* Function:     get_next_filename
*
* Description:  Simple function to cycle through temporary filenames ( a to z )
*               This means that there will only be a maximum of 26 temporary files,
*               hence avoiding filling up the server or having a cron job to remove them.
*
*               NOTE: This function would not normally be required, and is just
*                     to protect my website (and others) from filling up with
*                     temporary files whilst demonstrating the toolkit
*
* Parameters:   none
*
* Returns:      TRUE - on Success
*               FALSE - on Failure
*
******************************************************************************/
/*
function get_next_filename( )
{
        // Read the letter of the next temp file from disk
        $filename = file( "next_temp_file.dat" );
        // If it wasn't read - start at 'a'
        if ( $filename == FALSE )
        {
                $filename = 'a';
        }
        else
        {
                $filename = $filename{0};
        }

        // Ensure the filename letter is valid
        if ( ( $filename < 'a' ) || ( $filename > 'z' ) )
        {
                $filename = 'a';
        }


        // Check if the names are up to 'z'
        if( $filename == 'z' )
        {
                // Name is at z - the next one should be 'a'
                $new_filename = 'a';
        }
        else
        {
                // The name is not 'z' add one to it to get the next value
                $new_filename = chr( ord( $filename ) + 1 );
        }

        // Write the next temp file letter back into the file
        $Fhnd = fopen ("next_temp_file.dat", "w");
        fwrite ($Fhnd, $new_filename);
        fclose ($Fhnd);

        // return the filename
        return "temp_$filename.jpg";
}

/******************************************************************************
* End of Function:     get_next_filename
******************************************************************************/

/*
 * NOT YET USED
 */
 /*

/****************************************************************************
*
* Filename:     Edit_File_Info.php
*
* Description:  Allows the user to edit the metadata of an image over the internet
*               in the same way that Photoshop edits 'File Info' data
*               This file provides only the html for a form containing the file info
*               input fields. The rest of the html file must be provided by the calling script.
*               $outputfilename must always be defined - it is ne name of the file which
*               have the metadata changed after the form has been submitted
*
*               This file has several modes of operation:
*
*               1) If $new_ps_file_info_array is defined then it's data will be used
*                  to fill the fields.
*               2) If $new_ps_file_info_array is not defined but $filename is defined,
*                  then the file info fields will be filled from the metadata in the file specified
*               3) If $new_ps_file_info_array is not defined but $filename and $default_ps_file_info_array
*                  are defined, then the file info fields will be filled from the metadata
*                  in the file specified, but where fields are blank, they will be filled from $default_ps_file_info_array
*               4) Otherwise the fields will be blank
*
*               See Edit_File_Info_Example.php for an example of usage
*
* Author:       Evan Hunter
*
* Date:         17/11/2004
*
* Project:      PHP JPEG Metadata Toolkit
*
* Revision:     1.10
*
* URL:          http://electronics.ozhiker.com
*
* Copyright:    Copyright Evan Hunter 2004
*
* License:      This file is part of the PHP JPEG Metadata Toolkit.
*
*               The PHP JPEG Metadata Toolkit is free software; you can
*               redistribute it and/or modify it under the terms of the
*               GNU General Public License as published by the Free Software
*               Foundation; either version 2 of the License, or (at your
*               option) any later version.
*
*               The PHP JPEG Metadata Toolkit is distributed in the hope
*               that it will be useful, but WITHOUT ANY WARRANTY; without
*               even the implied warranty of MERCHANTABILITY or FITNESS
*               FOR A PARTICULAR PURPOSE.  See the GNU General Public License
*               for more details.
*
*               You should have received a copy of the GNU General Public
*               License along with the PHP JPEG Metadata Toolkit; if not,
*               write to the Free Software Foundation, Inc., 59 Temple
*               Place, Suite 330, Boston, MA  02111-1307  USA
*
*               If you require a different license for commercial or other
*               purposes, please contact the author: evan@ozhiker.com
*
***************************************************************************/

/*

        // Turn off Error Reporting
        error_reporting ( E_ALL );

        // Check for operation modes 2 or 3
        // i.e. $filename is defined, and $new_ps_file_info_array is not
        if ( ( ! isset( $new_ps_file_info_array ) ) &&
             ( isset( $filename ) ) &&
             ( is_string( $filename ) ) )
        {
                // Hide any unknown EXIF tags
                $GLOBALS['HIDE_UNKNOWN_TAGS'] = TRUE;

                // Accessing the existing file info for the specified file requires these includes
                include 'JPEG.php';
                include 'XMP.php';
                include 'Photoshop_IRB.php';
                include 'EXIF.php';
                include 'Photoshop_File_Info.php';

                // Retrieve the header information from the JPEG file
                $jpeg_header_data = get_jpeg_header_data( $filename );

                // Retrieve EXIF information from the JPEG file
                $Exif_array = get_EXIF_JPEG( $filename );

                // Retrieve XMP information from the JPEG file
                $XMP_array = read_XMP_array_from_text( get_XMP_text( $jpeg_header_data ) );

                // Retrieve Photoshop IRB information from the JPEG file
                $IRB_array = get_Photoshop_IRB( $jpeg_header_data );

                // Retrieve Photoshop File Info from the three previous arrays
                $new_ps_file_info_array = get_photoshop_file_info( $Exif_array, $XMP_array, $IRB_array );



                // Check if there is an array of defaults available
                if ( ( isset( $default_ps_file_info_array) ) &&
                     ( is_array( $default_ps_file_info_array) ) )
                {
                        // There are defaults defined

                        // Check if there is a default for the date defined
                        if ( ( ! array_key_exists( 'date', $default_ps_file_info_array ) ) ||
                             ( ( array_key_exists( 'date', $default_ps_file_info_array ) ) &&
                               ( $default_ps_file_info_array['date'] == '' ) ) )
                        {
                                // No default for the date defined
                                // figure out a default from the file

                                // Check if there is a EXIF Tag 36867 "Date and Time of Original"
                                if ( ( $Exif_array != FALSE ) &&
                                     ( array_key_exists( 0, $Exif_array ) ) &&
                                     ( array_key_exists( 34665, $Exif_array[0] ) ) &&
                                     ( array_key_exists( 0, $Exif_array[0][34665] ) ) &&
                                     ( array_key_exists( 36867, $Exif_array[0][34665][0] ) ) )
                                {
                                        // Tag "Date and Time of Original" found - use it for the default date
                                        $default_ps_file_info_array['date'] = $Exif_array[0][34665][0][36867]['Data'][0];
                                        $default_ps_file_info_array['date'] = preg_replace( "/(\d\d\d\d):(\d\d):(\d\d)( \d\d:\d\d:\d\d)/", "$1-$2-$3", $default_ps_file_info_array['date'] );
                                }
                               // Check if there is a EXIF Tag 36868 "Date and Time when Digitized"
                                else if ( ( $Exif_array != FALSE ) &&
                                     ( array_key_exists( 0, $Exif_array ) ) &&
                                     ( array_key_exists( 34665, $Exif_array[0] ) ) &&
                                     ( array_key_exists( 0, $Exif_array[0][34665] ) ) &&
                                     ( array_key_exists( 36868, $Exif_array[0][34665][0] ) ) )
                                {
                                        // Tag "Date and Time when Digitized" found - use it for the default date
                                        $default_ps_file_info_array['date'] = $Exif_array[0][34665][0][36868]['Data'][0];
                                        $default_ps_file_info_array['date'] = preg_replace( "/(\d\d\d\d):(\d\d):(\d\d)( \d\d:\d\d:\d\d)/", "$1-$2-$3", $default_ps_file_info_array['date'] );
                                }
                                // Check if there is a EXIF Tag 306 "Date and Time"
                                else if ( ( $Exif_array != FALSE ) &&
                                     ( array_key_exists( 0, $Exif_array ) ) &&
                                     ( array_key_exists( 306, $Exif_array[0] ) ) )
                                {
                                        // Tag "Date and Time" found - use it for the default date
                                        $default_ps_file_info_array['date'] = $Exif_array[0][306]['Data'][0];
                                        $default_ps_file_info_array['date'] = preg_replace( "/(\d\d\d\d):(\d\d):(\d\d)( \d\d:\d\d:\d\d)/", "$1-$2-$3", $default_ps_file_info_array['date'] );
                                }
                                else
                                {
                                        // Couldn't find an EXIF date in the image
                                        // Set default date as creation date of file
                                        $default_ps_file_info_array['date'] = date ("Y-m-d", filectime( $filename ));
                                }
                        }

                        // Cycle through all the elements of the default values array
                        foreach( $default_ps_file_info_array as $def_key =>$default_item )
                        {
                                // Check if the current element is Keywords or
                                // Supplemental Categories as these are arrays
                                // and need to be treated differently
                                if ( ( strcasecmp( $def_key, "keywords" ) == 0 ) ||
                                     ( strcasecmp( $def_key, "supplementalcategories" ) == 0 ) )
                                {
                                        // Keywords or Supplemental Categories found
                                        // Check if the File Info from the file is empty for this element
                                        // and if there are default values in this array element
                                        if ( ( count( $new_ps_file_info_array[ $def_key ] ) == 0 ) &&
                                             ( is_array( $default_item ) ) &&
                                             ( count( $default_item ) >= 0 ) )
                                        {
                                                // The existing file info is empty, and there are
                                                // defaults - add them
                                                $new_ps_file_info_array[ $def_key ] = $default_item;
                                        }
                                }
                                // Otherwise, this is not an array element, just check if it is blank in the existing file info
                                else if ( trim( $new_ps_file_info_array[ $def_key ] ) == "" )
                                {
                                        // The existing file info is blank, add the default value
                                        $new_ps_file_info_array[ $def_key ] = $default_item;
                                }

                        }
                }
        }
        // Check for operation mode 4 - $new_ps_file_info_array and $filename are not defined,
        else if ( ( ( !isset($new_ps_file_info_array) ) || ( ! is_array($new_ps_file_info_array) ) ) &&
                  ( ( !isset($filename) ) || ( ! is_string( $filename ) ) ) )
        {
                // No filename or new_ps_file_info_array defined, create a blank file info array to display
                $new_ps_file_info_array = array(
                      "title" => "",
                      "author" => "",
                      "authorsposition" => "",
                      "caption" => "",
                      "captionwriter" => "",
                      "jobname" => "",
                      "copyrightstatus" => "",
                      "copyrightnotice" => "",
                      "ownerurl" => "",
                      "keywords" => array(),
                      "category" => "",
                      "supplementalcategories" => array(),
                      "date" => "",
                      "city" => "",
                      "state" => "",
                      "country" => "",
                      "credit" => "",
                      "source" => "",
                      "headline" => "",
                      "instructions" => "",
                      "transmissionreference" => "",
                      "urgency" => "" );
        }



/***************************************************************************
*
* Now output the actual HTML form
*
***************************************************************************/
/*       
?>




        <form name="EditJPEG" action="Write_File_Info.php" method="post">


        <?php echo "<input name=\"filename\" type=\"hidden\" value=\"$outputfilename\">"; ?>

                <table>

                        <tr>
                                <td>
                                        Title
                                </td>
                                <td>
                                        <?php
                                        echo "<input size=49 name=\"title\" type=\"text\" value=\"". $new_ps_file_info_array[ 'title' ] ."\">";
                                        ?>
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        Author
                                </td>
                                <td>
                                        <?php
                                        echo "<input size=49 name=\"author\" type=\"text\" value=\"". $new_ps_file_info_array[ 'author' ] ."\">";
                                        ?>
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        Authors Position
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"authorsposition\" type=\"text\" value=\"". $new_ps_file_info_array[ 'authorsposition' ] ."\"> - Note: not used in Photoshop 7 or higher";
                                        ?>
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        Description
                                </td>
                                <td>
                                        <textarea name="caption" rows=3 cols=37 wrap="off"><?php echo $new_ps_file_info_array[ 'caption' ]; ?></textarea>
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        Description Writer
                                </td>
                                <td>
                                        <?php
                                        echo "<input size=49 name=\"captionwriter\" type=\"text\" value=\"". $new_ps_file_info_array[ 'captionwriter' ] ."\">";
                                        ?>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Keywords
                                </td>
                                <td>
                                        <textarea name="keywords" rows=3 cols=37 wrap="off"><?php
                                                                                                foreach( $new_ps_file_info_array[ 'keywords' ] as $keyword )
                                                                                                {
                                                                                                        echo "$keyword&#xA;";
                                                                                                }
                                                                                            ?></textarea>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Copyright Status
                                </td>
                                <td>
                                        <select size=1  name="copyrightstatus">
                                                <?php
                                                        $copystatus = $new_ps_file_info_array[ 'copyrightstatus' ];
                                                        if ( $copystatus == "Unknown" )
                                                        {
                                                                echo "<option value=\"Unknown\" SELECTED >Unknown</option>\n";
                                                        }
                                                        else
                                                        {
                                                                echo "<option value=\"Unknown\">Unknown</option>\n";
                                                        }

                                                        if ( $copystatus == "Copyrighted Work" )
                                                        {
                                                                echo "<option value=\"Copyrighted Work\" SELECTED >Copyrighted Work</option>\n";
                                                        }
                                                        else
                                                        {
                                                                echo "<option value=\"Copyrighted Work\">Copyrighted Work</option>\n";
                                                        }

                                                        if ( $copystatus == "Public Domain" )
                                                        {
                                                                echo "<option value=\"Public Domain\" SELECTED >Public Domain</option>\n";
                                                        }
                                                        else
                                                        {
                                                                echo "<option value=\"Public Domain\">Public Domain</option>\n";
                                                        }
                                                ?>
                                        </select>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Copyright Notice
                                </td>
                                <td>
                                        <textarea name="copyrightnotice" rows=3 cols=37 wrap="off"><?php echo $new_ps_file_info_array[ 'copyrightnotice' ]; ?></textarea>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Copyright Info URL
                                </td>
                                <td>
                                        <?php
                                        echo "<input size=49 name=\"ownerurl\" type=\"text\" value=\"". $new_ps_file_info_array[ 'ownerurl' ] ."\">\n";
                                        if ($new_ps_file_info_array[ 'ownerurl' ] != "" )
                                        {
                                                echo "<a href=\"". $new_ps_file_info_array[ 'ownerurl' ] ."\" > (". $new_ps_file_info_array[ 'ownerurl' ] .")</a>\n";
                                        }
                                        ?>

                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Category
                                </td>
                                <td>
                                        <?php
                                        echo "<input size=49 name=\"category\" type=\"text\" value=\"". $new_ps_file_info_array[ 'category' ] ."\">\n";
                                        ?>

                                </td>
                        </tr>

                        <tr>
                                <td>
                                        Supplemental Categories
                                </td>
                                <td>
                                        <textarea name="supplementalcategories" rows=3 cols=37 wrap="off"><?php
                                                                                                foreach( $new_ps_file_info_array[ 'supplementalcategories' ] as $supcat )
                                                                                                {
                                                                                                        echo "$supcat&#xA;";
                                                                                                }
                                                                                            ?>
                                        </textarea>
                                </td>
                        </tr>



                        <tr>
                                <td>
                                        Date Created
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"date\" type=\"text\" value=\"". $new_ps_file_info_array[ 'date' ] ."\">";
                                        ?>
                                        (Note date must be YYYY-MM-DD format)
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        City
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"city\" type=\"text\" value=\"". $new_ps_file_info_array[ 'city' ] ."\">";
                                        ?>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        State
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"state\" type=\"text\" value=\"". $new_ps_file_info_array[ 'state' ] ."\">";
                                        ?>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Country
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"country\" type=\"text\" value=\"". $new_ps_file_info_array[ 'country' ] ."\">";
                                        ?>
                                </td>
                        </tr>



                        <tr>
                                <td>
                                        Credit
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"credit\" type=\"text\" value=\"". $new_ps_file_info_array[ 'credit' ] ."\">";
                                        ?>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Source
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"source\" type=\"text\" value=\"". $new_ps_file_info_array[ 'source' ] ."\">";
                                        ?>
                                </td>
                        </tr>



                        <tr>
                                <td>
                                        Headline
                                </td>
                                <td>
                                        <textarea name="headline" rows=3 cols=37 wrap="off"><?php echo $new_ps_file_info_array[ 'headline' ]; ?></textarea>
                                </td>
                        </tr>



                        <tr>
                                <td>
                                        Instructions
                                </td>
                                <td>
                                        <textarea name="instructions" rows=3 cols=37 wrap="off"><?php echo $new_ps_file_info_array[ 'instructions' ]; ?></textarea>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        Transmission Reference
                                </td>
                                <td>
                                        <textarea name="transmissionreference" rows=3 cols=37 wrap="off"><?php echo $new_ps_file_info_array[ 'transmissionreference' ]; ?></textarea>
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        Job Name
                                </td>
                                <td>
                                        <?php
                                                echo "<input size=49 name=\"jobname\" type=\"text\" value=\"". $new_ps_file_info_array[ 'jobname' ] ."\"> - Note: not used in Photoshop CS";
                                        ?>
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        Urgency
                                </td>
                                <td>
                                        <select size="1" name="urgency">
                                                <?php
                                                        for( $i = 1; $i <= 8; $i++ )
                                                        {
                                                                echo "<option value=\"$i\"";
                                                                if ( $new_ps_file_info_array[ 'urgency' ] == $i )
                                                                {
                                                                        echo " SELECTED ";
                                                                }
                                                                echo ">";
                                                                if ( $i == 1 )
                                                                {
                                                                        echo "High";
                                                                }
                                                                else if ( $i == 5 )
                                                                {
                                                                        echo "Normal";
                                                                }
                                                                else if ( $i == 8 )
                                                                {
                                                                        echo "Low";
                                                                }
                                                                else
                                                                {
                                                                        echo "$i";
                                                                }
                                                                echo "</option>\n";
                                                        }
                                                        if ( $new_ps_file_info_array[ 'urgency' ] == "none" )
                                                        {
                                                                echo "<option value=\"none\" SELECTED >None</option>";
                                                        }
                                                        else
                                                        {
                                                                echo "<option value=\"none\" >None</option>";
                                                        }
                                                 ?>

                                        </select>
                                </td>
                        </tr>

                </table>
                <br>
                <input type="submit" value="Update!">


        </form>

        <br>
        <br>
        <p>Powered by: <a href="http://www.ozhiker.com/electronics/pjmt/" >PHP JPEG Metadata Toolkit version 1.0, Copyright (C) 2004 Evan Hunter</a></p>
        <br>
        <br> 
 
 */

/*
 * NOT YET USED
 */ 
/*
<html>

<!--***************************************************************************
*
* Filename:     Write_File_Info.php
*
* Description:  An example file showing how a user can write the metadata of an
*               image over the internet in the same way that Photoshop
*               edits 'File Info' data.
*               This script pairs with Edit_File_Info_Example.php, receiving
*               and processing the data from the HTML form in that script
*
* Author:       Evan Hunter
*
* Date:         17/11/2004
*
* Project:      PHP JPEG Metadata Toolkit
*
* Revision:     1.10
*
* URL:          http://electronics.ozhiker.com
*
* Copyright:    Copyright Evan Hunter 2004
*
* License:      This file is part of the PHP JPEG Metadata Toolkit.
*
*               The PHP JPEG Metadata Toolkit is free software; you can
*               redistribute it and/or modify it under the terms of the
*               GNU General Public License as published by the Free Software
*               Foundation; either version 2 of the License, or (at your
*               option) any later version.
*
*               The PHP JPEG Metadata Toolkit is distributed in the hope
*               that it will be useful, but WITHOUT ANY WARRANTY; without
*               even the implied warranty of MERCHANTABILITY or FITNESS
*               FOR A PARTICULAR PURPOSE.  See the GNU General Public License
*               for more details.
*
*               You should have received a copy of the GNU General Public
*               License along with the PHP JPEG Metadata Toolkit; if not,
*               write to the Free Software Foundation, Inc., 59 Temple
*               Place, Suite 330, Boston, MA  02111-1307  USA
*
*               If you require a different license for commercial or other
*               purposes, please contact the author: evan@ozhiker.com
*
***************************************************************************-->



        <head>
                <META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
                <STYLE TYPE="text/css" MEDIA="screen, print, projection">
                <!--

                        BODY { background-color:#505050; color:#F0F0F0 }
                        a  { color:orange  }
                        .EXIF_Main_Heading { color:red }
                        .EXIF_Secondary_Heading{ color: orange}
                        .EXIF_Table {  border-collapse: collapse ; border: 1px solid #909000}
                        .EXIF_Table tbody td{border-width: 1px; border-style:solid; border-color: #909000;}

                -->
                </STYLE>

                <title>Writing Photoshop File Info Metadata</title>
        </head>

        <body>
                <p>Powered by: <a href="http://www.ozhiker.com/electronics/pjmt/" >PHP JPEG Metadata Toolkit version 1.0, Copyright (C) 2004 Evan Hunter</a></p>
                <br>
                <br>

                <?php
                        // Turn off Error Reporting
                        error_reporting ( E_ALL );

                        // Include the required files for reading and writing Photoshop File Info
                        include 'JPEG.php';
                        include 'XMP.php';
                        include 'Photoshop_IRB.php';
                        include 'EXIF.php';
                        include 'Photoshop_File_Info.php';


                        // Copy all of the HTML Posted variables into an array
                        $new_ps_file_info_array = $GLOBALS['HTTP_POST_VARS'];

                        // Some characters are escaped with backslashes in HTML Posted variable
                        // Cycle through each of the HTML Posted variables, and strip out the slashes
                        foreach( $new_ps_file_info_array as $var_key => $var_val )
                        {
                                $new_ps_file_info_array[ $var_key ] = stripslashes( $var_val );
                        }

                        // Keywords should be an array - explode it on newline boundarys
                        $new_ps_file_info_array[ 'keywords' ] = explode( "\n", trim( $new_ps_file_info_array[ 'keywords' ] ) );

                        // Supplemental Categories should be an array - explode it on newline boundarys
                        $new_ps_file_info_array[ 'supplementalcategories' ] = explode( "\n", trim( $new_ps_file_info_array[ 'supplementalcategories' ] ) );

                        // Make the filename easier to access
                        $filename = $new_ps_file_info_array[ 'filename' ];

                        // Protect against hackers editing other files
                        $path_parts = pathinfo( $filename );
                        if ( strcasecmp( $path_parts["extension"], "jpg" ) != 0 )
                        {
                                echo "Incorrect File Type - JPEG Only\n";
                                exit( );
                        }
                        $filename = $path_parts["basename"];


                        // Retrieve the header information
                        $jpeg_header_data = get_jpeg_header_data( $filename );

                        // Retreive the EXIF, XMP and Photoshop IRB information from
                        // the existing file, so that it can be updated
                        $Exif_array = get_EXIF_JPEG( $filename );
                        $XMP_array = read_XMP_array_from_text( get_XMP_text( $jpeg_header_data ) );
                        $IRB_array = get_Photoshop_IRB( $jpeg_header_data );

                        // Update the JPEG header information with the new Photoshop File Info
                        $jpeg_header_data = put_photoshop_file_info( $jpeg_header_data, $new_ps_file_info_array, $Exif_array, $XMP_array, $IRB_array );

                        // Check if the Update worked
                        if ( $jpeg_header_data == FALSE )
                        {
                                // Update of file info didn't work - output error message
                                echo "Error - Failure update Photoshop File Info : $filename <br>\n";

                                // Output HTML with the form and data which was
                                // sent, to allow the user to fix it

                                $outputfilename = $filename;
                                include "Edit_File_info.php";
                                echo "</body>\n";
                                echo "</html>\n";

                                // Abort processing
                                exit( );
                        }

                        // Attempt to write the new JPEG file
                        if ( FALSE == put_jpeg_header_data( $filename, $filename, $jpeg_header_data ) )
                        {
                                // Writing of the new file didn't work - output error message
                                echo "Error - Failure to write new JPEG : $filename <br>\n";

                                // Output HTML with the form and data which was
                                // sent, to allow the user to fix it

                                $outputfilename = $filename;
                                include "Edit_File_info.php";
                                echo "</body>\n";
                                echo "</html>\n";

                                // Abort processing
                                exit( );
                        }


                        // Writing of new JPEG succeeded

                        // Output information about new file

                        echo "<h1>DONE! - $filename updated</h1>\n";
                        echo "<p><a href=\"Example.php?jpeg_fname=$filename\" >View Full Metatdata Information</a></p>\n";
                        echo "<p><a href=\"Edit_File_Info_Example.php?jpeg_fname=$filename\" >Re-Edit Photoshop File Info</a></p>\n";
                        echo "<br><br>\n";
                        echo "<p>Below is the updated image, you can save it and look at the changed metadata in your favorite image editor</p>\n";
                        echo "<p><img src=\"$filename\" ></p>\n";


                ?>

                <br>
                <br>
                <br>
                <br>


                <p>Powered by: <a href="http://www.ozhiker.com/electronics/pjmt/" >PHP JPEG Metadata Toolkit version 1.0, Copyright (C) 2004 Evan Hunter</a></p>

                <br>
                <br>

        </body>

</html> 
 */
?>