<?php
/*Activities-Title-Price Data Starts Here*/
function activitytp_values($fpropactivities)
{
	if(is_array($fpropactivities))
	{
		$output_array = array();
		foreach($fpropactivities as $key=>$val)
		{
			$primitive_output = activitytp_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivities;
	}
}
$fpropactivities1 = activitytp_values($fpropactivities);
/*Activities-Title-Price Data Ends Here*/


/*Activities-Latitude-Longitude Data Starts Here*/
function activityll_values($fpropactivitieslatlon)
{
	if(is_array($fpropactivitieslatlon))
	{
		$output_array = array();
		foreach($fpropactivitieslatlon as $key=>$val)
		{
			$primitive_output = activityll_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivitieslatlon;
	}
}
$fpropactivitieslatlon1 = activityll_values($fpropactivitieslatlon);
/*Activities-Latitude-Longitude Data Ends Here*/


/*Activities-Id Data Starts Here*/
function activityid_values($fpropactivitiesid)
{
	if(is_array($fpropactivitiesid))
	{
		$output_array = array();
		foreach($fpropactivitiesid as $key=>$val)
		{
			$primitive_output = activityid_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivitiesid;
	}
}
$fpropactivitiesid1 = activityid_values($fpropactivitiesid);
/*Activities-Id Data Ends Here*/


/*Activities-Details Data Starts Here*/
function activitydetails_values($fpropactivitydetails)
{
	if(is_array($fpropactivitydetails))
	{
		$output_array = array();
		foreach($fpropactivitydetails as $key=>$val)
		{
			$primitive_output = activitydetails_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivitydetails;
	}
}
$fpropactivitydetails1 = activitydetails_values($fpropactivitydetails);
/*Activities-Details Data Ends Here*/


/*Activities-Full-Details Data Starts Here*/
function activityfulldetails_values($fpropactivityfulldetails)
{
	if(is_array($fpropactivityfulldetails))
	{
		$output_array = array();
		foreach($fpropactivityfulldetails as $key=>$val)
		{
			$primitive_output = activityfulldetails_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivityfulldetails;
	}
}
$fpropactivityfulldetails1 = activityfulldetails_values($fpropactivityfulldetails);
/*Activities-Full-Details Data Ends Here*/


/*Activities-Title Data Starts Here*/
function activitytitle_values($fpropactivitytitle)
{
	if(is_array($fpropactivitytitle))
	{
		$output_array = array();
		foreach($fpropactivitytitle as $key=>$val)
		{
			$primitive_output = activitytitle_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivitytitle;
	}
}
$fpropactivitytitle1 = activitytitle_values($fpropactivitytitle);
/*Activities-Title Data Ends Here*/


/*ActivityDate Data Starts Here*/
function activitydates_values($fpropactivitydates)
{
	if(is_array($fpropactivitydates))
	{
		$output_array = array();
		foreach($fpropactivitydates as $key=>$val)
		{
			$primitive_output = activitydates_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivitydates;
	}
}
$fpropactivitydates1 = activitydates_values($fpropactivitydates);
/*Activity-Date Data Ends Here*/


/*Property-Date Data Starts Here*/
function propnodates_values($fpropnodates)
{
	if(is_array($fpropnodates))
	{
		$output_array = array();
		foreach($fpropnodates as $key=>$val)
		{
			$primitive_output = propnodates_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropnodates;
	}
}
$fpropnodates1 = propnodates_values($fpropnodates);
/*Property-Date Data Ends Here*/


/*Transport-Full Data Starts Here*/
function transportfd_values($fproptransport)
{
	if(is_array($fproptransport))
	{
		$output_array = array();
		foreach($fproptransport as $key=>$val)
		{
			$primitive_output = transportfd_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fproptransport;
	}
}
$fproptransport1 = transportfd_values($fproptransport);
/*Transport-Full Data Ends Here*/


/*Transport-Title-Price Data Starts Here*/
function transporttp_values($fpropactivitiestransports)
{
	if(is_array($fpropactivitiestransports))
	{
		$output_array = array();
		foreach($fpropactivitiestransports as $key=>$val)
		{
			$primitive_output = transporttp_values($val);
			if(is_array($primitive_output)) 
			{
				$output_array = array_merge($output_array, $primitive_output);
			}
			else
			{
				array_push($output_array, $primitive_output);
			}
		}
		return $output_array;
	}
	else
	{
		return $fpropactivitiestransports;
	}
}
$fpropactivitiestransports1 = transporttp_values($fpropactivitiestransports);
/*Transport-Title-Price Data Ends Here*/

?>