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
        return $RecruitmentStatus=$params->get('RecruitmentStatus');
$RecruitmentBlurb=$params->get('RecruitmentBlurb');

$druid=$params->get('Druid');
$hunter=$params->get('Hunter');
$mage=$params->get('Mage');
$paladin=$params->get('Paladin');
$priest=$params->get('Priest');
$rogue=$params->get('Rogue');
$shaman=$params->get('Shaman');
$warlock=$params->get('Warlock');
$warrior=$params->get('Warrior');

$druidBlurb=$params->get('DruidBlurb');
$hunterBlurb=$params->get('HunterBlurb');
$mageBlurb=$params->get('MageBlurb');
$paladinBlurb=$params->get('PallyBlurb');
$priestBlurb=$params->get('PriestBlurb');
$rogueBlurb=$params->get('RogueBlurb');
$shamanBlurb=$params->get('ShamanBlurb');
$warlockBlurb=$params->get('WarlockBlurb');
$warriorBlurb=$params->get('WarriorBlurb');

    }
}

?>