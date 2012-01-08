<?php
/**
 * Helper class for Guild Recruitment module
 * 
 * 
 * 
 * 
 * @license        GNU/GPL, see LICENSE.php
 * mod_recruitment is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modRecruitmentHelper
{
    /**
     * 
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    function getRecruit( $params )
    {
        return
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


    }
}

?>