<?php
/**
 * @link      https://dukt.net/craft/follow/
 * @copyright Copyright (c) 2016, Dukt
 * @license   https://dukt.net/craft/follow/docs/license
 */

namespace Craft;

class FollowController extends BaseController
{
    public function actionStartFollowing(array $variables = array())
    {
    	$elementId = craft()->request->getParam('id');

    	$response = craft()->follow->startFollowing($elementId);

        if (craft()->request->isAjaxRequest()) {

            if ($response) {
                $this->returnJson(array(
                    'success' => true
                ));
            }
            else
            {
                $this->returnErrorJson(Craft::t("Couldn't start following."));
            }
        }
        else
        {
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function actionStopFollowing(array $variables = array())
    {
    	$elementId = craft()->request->getParam('id');

    	$response = craft()->follow->actionStopFollowing($elementId);

        if (craft()->request->isAjaxRequest()) {

            if ($response) {
                $this->returnJson(array(
                    'success' => true
                ));
            }
            else
            {
                $this->returnErrorJson(Craft::t("Couldn't stop following."));
            }
        }
        else
        {
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
    }
}