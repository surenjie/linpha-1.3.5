<?php

/**
 * 1 -> low, 2 -> medium, 3 -> high
 */
function getExifTagsByVerbosityLevel($level)
{
    $array[1] = Array(
        'DateTimeOriginal','Make','Model','Artist','Copyright'
    );

    $array[2] = Array(
        'DateTimeOriginal','Make','Model','Artist','Copyright'
        ,'ApertureValue','ShutterSpeedValue','ExposureTime'
    );

    $array[3] = Array(
        'DateTimeOriginal','Make','Model','Artist','Copyright'
        ,'ApertureValue','ShutterSpeedValue','ExposureTime'
        ,'ISOSpeedRatings','Flash','FocalLength','FNumber'
    );
    
    if(isset($array[$level]))
    {
        return $array[$level];
    }
    else
    {
        return $array[2];
    }
}

/**
 * 1 -> low, 2 -> medium, 3 -> high
 */
function getIptcTagsByVerbosityLevel($level)
{
    $array[1] = Array(
       	'caption','caption_writer','headline','instructions', 'copyright'
    	,'keywords', 'object_name'
    );

    $array[2] = Array(
       	'caption','caption_writer','headline','instructions','copyright','byline'
        ,'byline_title','object_name', 'keywords','category','supplemental_categorie'
    );

    $array[3] = Array(
        'caption','caption_writer','headline','instructions','copyright','byline'
        ,'byline_title','object_name','keywords','category','supplemental_categorie'
        ,'credit','source','date_created','time_created'
    );
    
    if(isset($array[$level]))
    {
        return $array[$level];
    }
    else
    {
        return $array[2];
    }
}

$iptc_search_tags = Array(
    'caption_writer','caption','keywords','headline','copyright','source','byline'
    , 'object_name');    

$exif_search_tags = Array(
    'DateTimeOriginal', 'ImageDescription','JpegComment','Artist','Copyright','Make','Model'
    );
    
    
/**
 * Function used in search.php to translate iptc tags to human readable values
 * if called with $arg == single. If called with $arg == array return the wholw
 * thing for metadata.class.php (i.e. left_view )
 * @returns $array or single array value
 */
function translateIptcSearchTags($tag, $arg)
{
	$trans_array= array(
		'caption' => 'Caption',
		'caption_writer' => 'Caption Writer',
		'headline' => 'Headline',
		'instructions' => 'Special Instructions',
		'keywords' => 'Keywords',
		'category' => 'Category',
		'supplemental_categorie' => 'Supplemental Category',
		'copyright' => 'Copyright Notice',
		'byline' => 'By-Line (Author)',
		'byline_title' => 'By-Line Title',
		'credit' => 'Credit',
		'source' => 'Source',
		'edit_status' => 'Edit Status',
		'priority' => 'Priority',
		'object_cycle' => 'Object Cycle',
		'job_id' => 'Fixture Identifier',
		'program' => 'Originating Program',
		'object_name' => 'Object Name (Title)',
		'date_created' => 'Date Created',
		'date_released' => 'Release Date',
		'time_created' => 'Time Created',
		'time_released' => 'Release Time',
		'city' => 'City',
		'sublocation' => 'Sub-Location',
		'state' => 'Province/State',
		'country' => 'Country Name',
		'country_code' => 'Country Code',
		'trans_reference' => 'Transmission Reference'
		);

	/**
	 * return: either single value or whole array
	 */
	if($arg == "single")
	{
		return $trans_array[$tag];
	}
	else
	{
		return $trans_array;
	}
}
?>