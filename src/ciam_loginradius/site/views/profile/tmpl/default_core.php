<?php
/**
* @package      CiamLoginRadius.Component
 * @subpackage  com_ciamloginradius
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>

<fieldset id="users-profile-core">
    <legend>
        <?php echo JText::_('COM_USERS_PROFILE_CORE_LEGEND'); ?>
    </legend>
    <dl class="dl-horizontal">
        <dt>
            <?php echo JText::_('COM_USERS_PROFILE_NAME_LABEL'); ?>
        </dt>
        <dd>
            <?php echo $this->data->name; ?>
        </dd>
        <dt>
            <?php echo JText::_('COM_USERS_PROFILE_USERNAME_LABEL'); ?>
        </dt>
        <dd>
            <?php echo htmlspecialchars($this->data->username); ?>
        </dd>
        <dt>
            <?php echo JText::_('COM_USERS_PROFILE_REGISTERED_DATE_LABEL'); ?>
        </dt>
        <dd>
            <?php echo JHtml::_('date', $this->data->registerDate); ?>
        </dd>
        <dt>
            <?php echo JText::_('COM_USERS_PROFILE_LAST_VISITED_DATE_LABEL'); ?>
        </dt>

            <?php if ($this->data->lastvisitDate != '0000-00-00 00:00:00')
            { ?>
            <dd>
                <?php echo JHtml::_('date', $this->data->lastvisitDate); ?>
            </dd>
        <?php } else
                {
            ?>
            <dd>
                <?php echo JText::_('COM_USERS_PROFILE_NEVER_VISITED'); ?>
            </dd>
        <?php } ?>
    </dl>
    <?php if (JFactory::getUser()->id == $this->data->id)
    {?>
    <dl class="dl-horizontal">
        <ul class="btn-toolbar pull-right">
            <li class="btn-group">
                <a class="btn" href="<?php echo JRoute::_('index.php?option=com_ciamloginradius&view=updateprofile&user_id=' . (int) $this->data->id); ?>">
                    <i class="icon-user"></i> <?php echo JText::_('COM_USERS_EDIT_PROFILE'); ?></a>
            </li>
        </ul>
    </dl>
    <?php }?>
</fieldset>
