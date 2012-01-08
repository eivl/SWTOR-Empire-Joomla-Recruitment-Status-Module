<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<?php 

$RecruitmentStatus=$params->get('RecruitmentStatus');
$RecruitmentBlurb=$params->get('RecruitmentBlurb');

$SithWarrior=$params->get('Sith Warrior');
$SithInquisitor=$params->get('Sith Inquisitor');
$BountyHunter=$params->get('Bounty Hunter');
$ImperialAgent=$params->get('Imperial Agent');

$SithWarriorBlurb=$params->get('SithWarriorBlurb');
$SithInquisitorBlurb=$params->get('SithInquisitorBlurb');
$BountyHunterBlurb=$params->get('BountyHunterBlurb');
$ImperialAgentBlurb=$params->get('ImperialAgentBlurb');

$ColorHigh=$params->get('Color High');
$ColorMedium=$params->get('Color Medium');
$ColorLow=$params->get('Color Low');
$ColorClosed=$params->get('Color Closed');
 
$content   = "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\">";
$content  .= "  <tbody>";

$content  .= "    <tr>";
$content  .= "      <td ><table border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\">";
$content  .= "          <tbody>";
$content  .= "            <tr>";

	if ($RecruitmentStatus == "Closed"){
		$content  .= "              <td><div align=\"center\"><font class=\"content\"><b>Recruitment is currently <font color=\"$ColorClosed\">CLOSED!</font></b></font>";
	} else{  //open
		$content  .= "              <td><div align=\"center\"><font class=\"content\">We are currently looking for new members of the following classes: </font>";


	$content  .= "                  <hr>";
	$content  .= "                      <table id=\"table2\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
	$content  .= "                        <tbody>";
	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table3\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/sithwarrior.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Sith Warrior:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($SithWarrior == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($SithWarrior == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($SithWarrior == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($SithWarrior == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}
	$content  .= "                          </tr>";

	if ($SithWarriorBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$SithWarriorBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
		}


	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table3\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/sithinquisitor.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Sith Inquisitor:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($SithInquisitor == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($SithInquisitor == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($SithInquisitor == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($SithInquisitor == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}

	$content  .= "                          </tr>";

	if ($SithInquisitorBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$SithInquisitorBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
	}

	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table4\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/bountyhunter.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Bounty Hunter	:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($BountyHunter == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($BountyHunter == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($BountyHunter == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($BountyHunter == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}

	$content  .= "                          </tr>";

	if ($BountyHunterBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$BountyHunterBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
	}

	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table5\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/imperialagent.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Imperial Agent:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($ImperialAgent == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($ImperialAgent == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($ImperialAgent == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($ImperialAgent == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}

	$content  .= "                          </tr>";

	if ($ImperialAgentBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$ImperialAgentBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
	}



	$content  .= "                        </tbody>";
	$content  .= "                      </table>";

	}
$content  .= "                      <hr>";
$content  .= "                      <font color=\"#16839c\">Notes:</font><br>$RecruitmentBlurb</div></td>";
$content  .= "            </tr>";
$content  .= "          </tbody>";
$content  .= "      </table></td>";
$content  .= "    </tr>";
$content  .= "  </tbody>";
$content  .= "</table>";


?>