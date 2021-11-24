<?php

class AttributePercentageCompletion extends AttributePercentage
{
	public function GetAsHTML($sValue, $oHostObject = null, $bLocalize = true)
	{
		$iWidth = 5; // Total width of the percentage bar graph, in em...
		$iValue = (int)$sValue;
		if ($iValue > 100)
		{
			$iValue = 100;
		}
		else
		{
			if ($iValue < 0)
			{
				$iValue = 0;
			}
		}
		if ($iValue > 90)
		{
			$sColor = "#33cc00";

		}
		else
		{
			if ($iValue > 50)
			{
				$sColor = "#cccc00";
			}
			else
			{
				$sColor = "#cc3300";
			}
		}
		$iPercentWidth = ($iWidth * $iValue) / 100;

		return "<div style=\"width:{$iWidth}em;-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;display:inline-block;border: 1px #ccc solid;\"><div style=\"width:{$iPercentWidth}em; display:inline-block;background-color:$sColor;\">&nbsp;</div></div>&nbsp;$sValue %";
	}
}

